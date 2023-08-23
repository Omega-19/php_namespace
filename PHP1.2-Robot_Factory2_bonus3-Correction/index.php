<?php

/**
 * Ce bonus était une première approche des expressions régulières, ou RegExp.
 * C'est un langage très puissant permettant de décrire avec exactitude une
 * chaîne de caractères. L'expression régulière [A-Z]{2}-[0-9]{4} se traduit
 * ainsi : « Deux lettres majuscules entre A et Z, suivies d'un tiret, suivi
 * de quatre chiffres entre 0 et 9. » Bref, cette expression décrit
 * parfaitement le format de notre nom de robot.
 *
 * Les expressions régulières peuvent sembler un peu cryptiques pour un œil
 * non averti. Et à raison : c'est un langage particulièrement difficile
 * à apprendre. C'est pourquoi nous vous avons dit que ce bonus était d'un
 * niveau un peu avancé. Mais ne vous inquiétez pas. Les expressions
 * régulières suivent en réalité une syntaxe très logique et avec les années
 * vous apprendrez les connaître de mieux en mieux.
 *
 * Nous en ferons peu au cours de cette formation, toujours en tant que bonus.
 * Personne en entreprise ne reprochera à des développeurs junior de ne pas
 * maîtriser les expressions régulières. Vous travaillerez généralement avec
 * des collègues patients et heureux de partager leurs connaissances. En bref,
 * vous apprendrez ce langage sur le tas, comme nous l'avons tous fait. (:
 *
 * ----
 *
 * Au-delà de ces petits mots, expliquons ce que nous avons fait.
 *
 * Tout d'abord, directement dans le formulaire HTML, nous avons utilisé un
 * attribut `pattern` sur le champ de texte. Cet attribut prend comme valeur
 * une expression régulière. Le navigateur empêchera la soumission de tout le
 * formulaire si la valeur saisie ne correspond pas au pattern demandé.
 *
 * On pourrait se contenter de ce contrôle en frontend, mais vous apprendrez
 * à ne jamais faire confiance à ce qui vient de l'utilisateur. Il peut avoir
 * modifié le HTML de votre page pour supprimer cet attribut `pattern`. Il
 * peut même avoir envoyé la requête directement au serveur sans passer par
 * un navigateur, c'est possible avec des outils comme Curl ou même Postman
 * par exemple. En somme, ne partez jamais du principe que les contrôles
 * frontend suffisent, en vérité ils ne sont que cosmétiques et un vrai
 * contrôle doit toujours être effectué en backend. Ici nous vérifions donc
 * une nouvelle fois, en PHP, que le nom correspond au pattern voulu. Si ce
 * n'est pas le cas, nous le redirigeons simplement au formulaire. C'est
 * suffisant pour cet exercice, mais on aurait bien sûr pu imaginer une vraie
 * gestion d'erreur. Si vous êtes chauds... (:
 */

// Using a constant to define the RegExp pattern. This will allow us to
// maintain it at only one place while still using it multiple times.
const ROBOT_NAME_PATTERN = '[A-Z]{2}-[0-9]{4}';

if (!empty($_POST)) {

    require './functions/generic_functions.php';
    require './functions/robot_functions.php';

    // If the robot's name matches the wanted pattern, rock'n'roll.
    // If not, we redirect the user to the robot form.
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        if (preg_match('/' . ROBOT_NAME_PATTERN . '/', $_POST['name']) === 1) {
            $robotName = $_POST['name'];
        } else {
            header('Location: /');
        }
    } else {
        $robotName = generateRandomRobotName(2, 4, '-');
    }
    $reversedName = reverseString($robotName);

    $date = date('d m Y');
    $hour = date('H:i:s');

    $randomNumber = generateRandomNumber(1, 10);
    if (isNumberEven($randomNumber)) {
        $parityMsg = 'pair';
    } else {
        $parityMsg = 'impair';
    }

    if (isset($_POST['evilness'])) {
        switch ($_POST['evilness']) {
            case 'yes':
                $robotEvil = true;
                break;
            case 'no':
                $robotEvil = false;
                break;
            default:
                $robotEvil = isRobotEvil(0.33334);
                break;
        }
    } else {
        $robotEvil = isRobotEvil(0.33334);
    }

    if ($robotEvil) {
        $robotMoralDecision = 'Extermination ! Extermination !';
    } else {
        $robotMoralDecision = 'Vous voulez un café ?';
    }
}

require 'views/homepage.phtml';
