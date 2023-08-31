<?php

class AuthModel {
    private $users = [];

    /**
     * Fonction qui ajoute un utilisateur dans notre tableau
     */
    function addUser($username, $password){
        $this->users[$username] = password_hash($password, PASSWORD_DEFAULT);
        //PASSOWORD_BCRYPT
    }

    /**
     * Fonction qui recherche un utilisateur dans notre tableau
     */
    function getUser(string $username): null | string{
        // echo "<pre>";
        // print_r(($this->users));
        // echo"</pre>";
        // exit;
        return $this->users[$username] ?? null;
    }
}