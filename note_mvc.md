## <mark>MVC - Model View Controller</mark>

Le Modèle-Vue-Contrôleur (En: Model-View-Controller) est un modèle de conception (design pattern) couramment utilisé dans le développement web pour aider à organiser le code et séparer différentes composantes d'une application. Il favorise l'idée de diviser une application en trois composants principaux: le <strong>Modèle</strong>, la <strong>Vue</strong> et le <strong>Contrôleur</strong>. Chaque composant a un rôle et des responsabilités spécifiques, ce qui rend la base de code plus organisée, plus facile à entretenir et plus évolutive.


Voici une explication de chaque composant
 
 ## <mark><strong>Modèle</strong></mark>  : 

Le Modèle représente les données et la logique de votre application. Il est responsable de la gestion des données telles que la récupération des données depuis une base de données, l'<em>exécution de calcul et l'application des règles métiers</em>. 


## <mark><strong>Vue</strong></mark>  :

La Vue est responsable de l'affichage des données à l'utilisateur. C'est ce que l'utilisateur voit et avec quoi il interagit. La Vue prend les données du Modèle et les présente sous une forme conviviale pour l'utilisateur, généralement sous forme de HTML, CSS et parfois de JAVASCRIPT. Les Vues sont principalement concernés par la présentation et ne contiennent généralement pas de logique complexe.

NB: Elle définit l'interface utilisateur par exemple un formulaire. Finissant par l'envoie de données au contrôleur.


## <mark><strong>Contrôleur</strong></mark>  :

Le Contrôleur agit comme un intermédiaire entre le Modèle et la Vue. Il reçoit les entrées de l'utilisateur depuis la Vue, les traite, interagit avec le Modèle pour récupérer ou mettre à jour les données, puis décide quelle Vue présenter à l'utilisateur avec les données mises à jour. Le Contrôleur contient donc la logique de l'application qui coordonne le flux de données entre le Modèle et la Vue. 

## Le  système d'authentification

le htmlspecialchars est une syntaxe qui dit aux navigateurs d'échapper aux caractères spéciaux

