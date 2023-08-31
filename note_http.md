## Communication HTTP clIENT-Serveur

Lorsqu'un serveur communique avec un client, plusieurs en-têtes sont souvent échangés pour communiquer des infos supplémentaires. Voici quelques-uns des en-têtes couramment envoyés par un serveur PHP:

## Location: 
Utilisé pour rediriger le navigateur vers une autre page. EX: L'en-tête `Location: https://example.com`provoquera une redirection vers le site web https://example.com;
## Set-cookie: 
Utilisé pour définir des cookies dans le navigateur. Ex: ` set-cookie: username = john` définit un cookie nommé "username" avec la "valeur" john
## Content-Disposition: 
Utilisé pour indiquer au navigateur de traiter le contenu.
ex: ` Content-Disposition: attachment; filename=le_code.pdf` peut être utilisé pour forcer le téléchargement d'un fichier avec le nom "le_code.pdf"
## Content-Type: Définit le contenu de la réponse. 
EX: ` Content-Type: text/html` indique la réponse est du code HTML. D'autres valeurs courantes incluent:application/json, image/jpeg
## Content-Length: 
Indique la taille de la réponse en octects
## Expires: 
Indique la date et l'heure d'espiration de la réponse
 
