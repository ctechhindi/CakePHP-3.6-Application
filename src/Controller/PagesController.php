<?php
namespace App\Controller;

class PagesController extends AppController
{
    public function home()
    {
        $this->set('title', 'Welcome to CakePHP 3.6');
        // $this->render('home');
    }
}
