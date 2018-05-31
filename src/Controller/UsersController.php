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
        # Set Page Title
        $this->set('title', 'User Registration');

        $users = $this->Users->newEntity($this->request->getData(), ['validate' => 'register']);
        if ($this->request->is('post'))
        {
            if (empty($users->getErrors()))
            {
                $users = $this->Users->patchEntity($users, $this->request->getData(), ['validate' => 'register']);
                
                # Set Data in Table
                $users->is_active = 1;
    
                # Save Data
                if ($this->Users->save($users)) {
                    $this->Flash->success(__('User has been saved.'));
                    return $this->redirect(['action' => 'registration']);
                }
                $this->Flash->error(__('Unable to add your user.'));
            }
        }
        // Set this errors in fields
        $this->set('users', $users);
    }
}