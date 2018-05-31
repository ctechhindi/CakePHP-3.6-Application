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

        # Using A Different Validation Set
        $users = $this->Users->newEntity($this->request->getData(), ['validate' => 'register']);
        // Set this errors in fields
        $this->set('users', $users);
    }
}