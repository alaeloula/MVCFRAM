<?php
namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class AuthController extends Controller{
    public function login()
    {
        return $this->render('login');
    }
    public function Register(Request $request)
    {
        if ($request->ispost()) {
            return 'hadle submited data';
        }
        return $this->render('register');
    }
}