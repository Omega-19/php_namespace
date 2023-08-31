<?php 

class AuthView{
    /**
     * Vue pour se connecter
     */
    public function showLoginForm(){
        echo <<<LOGIN
        <form method='post' action = 'index.php?action=login'>
        <input type='text' name= 'username' placeholder= 'Votre nom'>
        <input type = 'password' name= 'password' placeholder = 'Mot de passe' />
        <button type='submit' > Se connecter</button>
        </form>
        LOGIN;
    }
    /**
     * Vue pour créer un compte
     */
    public function showSignupForm(){
        echo <<<SIGNUP
        <form method='post' action = 'index.php?action=signup'>
        <input type='text' name= 'username' placeholder= 'Votre nom'>
        <input type = 'password' name= 'password' placeholder = 'Mot de passe' />
        <button type='submit' > S'inscrire</button>
        </form>
        SIGNUP;
    }
}