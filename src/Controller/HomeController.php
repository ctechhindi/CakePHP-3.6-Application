<?php
namespace App\Controller;

class HomeController extends AppController
{
    public function index()
    {
        $this->set('title', 'Welcome to CakePHP 3.6');
        // $this->render('home');
    }
}
