<div class="container">
    <?php
        # Set Form Template
        $myTemplates = [
            'inputContainer' => '<div class="form-group">{{content}}</div>',
            // 'input' => '<input type="{{type}}" class="form-control is-invalid" name="{{name}}"{{attrs}}/>',
            'inputContainerError' => '<div class="form-group {{required}} error">{{content}}{{error}}</div>',
            'error' => '<div class="invalid-feedback">{{content}}</div>',
        ];
        $this->Form->setTemplates($myTemplates);

        echo $this->Form->create($users);

        # Check field error
        // var_dump($this->Form->isFieldError('fullname'));

        echo $this->Form->controls(
            [
                'fullname' => [
                    'name' => 'fullname',
                    'placeholder' => "Full Name", 
                    'required' => false,
                    'label' => 'Full Name',
                    'class' => ($this->Form->isFieldError('fullname')) ? 'form-control is-invalid' : 'form-control'
                ],
                'email' => [
                    'placeholder' => "Email Address", 
                    'required' => false,
                    'class' => ($this->Form->isFieldError('email')) ? 'form-control is-invalid' : 'form-control'
                ],
                'username' => [
                    'placeholder' => "Username", 
                    'required' => false,
                    'class' => ($this->Form->isFieldError('username')) ? 'form-control is-invalid' : 'form-control'
                ],
                'password' => [
                    'placeholder' => "Password", 
                    'required' => false,
                    'class' => ($this->Form->isFieldError('password')) ? 'form-control is-invalid' : 'form-control'
                ],
                'confirmpassword' => [
                    'type' => 'password',
                    'name' => 'confirmpassword', 
                    'placeholder' => "Confirm Password", 
                    'required' => false,
                    'label' => 'Confirm Password',
                    'class' => ($this->Form->isFieldError('confirmpassword')) ? 'form-control is-invalid' : 'form-control'
                ],
            ],
            ['legend' => 'User Registration']
        );
        echo $this->Form->submit('Registration', ['class' => 'btn btn-primary']);
        echo $this->Form->end();
    ?>
</div>