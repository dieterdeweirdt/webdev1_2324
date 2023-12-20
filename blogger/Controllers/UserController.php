<?php

namespace App\Controllers;

use App\Models\Article;
use App\Models\User;

class UserController extends BaseController {

    public function detail($id) {

        // user ophalen uit db met id
        $user = User::find($id);
        $articles = Article::getByUserId($user->user_id);
        //Of via onderstaande code. Dit is een instantie van een user waar een method op wordt aangeroepen.
        //$articles = $user->articles();

        //view inladen
        self::loadView('/user/detail', [
            'title' => 'Detail',
            'user' => $user,
            'articles' => $articles
        ]);
    }

    public function login() {
        self::loadView('/user/login', [
            'title' => 'Login'
        ]);
    }

    public function logout() {
        unset($_SESSION['user_id']);
        header('Location: /');
    }

    public function register() {
        self::loadView('/user/register', [
            'title' => 'Register',
        ]);
    }

    public function handleLogin() {
        $user = \App\Models\User::findByEmail($_POST['email']);

        if($user && password_verify($_POST['password'], $user->password)) {
            $_SESSION['user_id'] = $user->user_id;
            header('Location: /');
        } else {
            header('Location: /login?error=Invalid credentials');
        }
    }

    public function handleRegister() {
        try {
            $user = new \App\Models\User();
            $user->firstname = $_POST['firstname'];
            $user->lastname = $_POST['lastname'];
            $user->email = $_POST['email'];
            $user->password = $_POST['password'];
            $user->register();

            $_SESSION['user_id'] = $user->user_id;

            header('Location: /');
        }
        catch(\Exception $e) {
            header('Location: /register?error=' . $e->getMessage());
        }
    }
}