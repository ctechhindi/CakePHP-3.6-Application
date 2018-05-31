<?php
namespace App\Controller;

class UsersController extends AppController
{
    /**
     * User Login
     */
    public function login()
    {
        $this->set('title', 'User Login');
    }

    /**
     * User Registration
     */
    public function registration()
    {
        $this->set('title', 'User Registration');
        
    }
}