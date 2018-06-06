<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function validationDefault(Validator $validator) {
    }

    /**
     * User Registration Form Validation
     */
    public function validationRegister(Validator $validator)
    {
        # Full Name
        $validator->notEmpty('fullname');

        # Email Address
        $validator->notEmpty('email')
            ->add('email', 'valid', [
                'rule' => 'email',
                'message' => 'Please enter valid email',
            ]);

        # Username
        $validator->notEmpty('username')
            ->lengthBetween('username', [4,12], 'Please enter a username between 4 & 12');

        # Password
        $validator->notEmpty('password');

        # Confirm Password
        $validator->notEmpty('confirmpassword')
            ->add('confirmpassword', 'no-misspelling', [
                'rule' => ['compareWith', 'password'],
                'message' => 'Passwords are not equal',
            ]);
        
        return $validator;
    }
} 