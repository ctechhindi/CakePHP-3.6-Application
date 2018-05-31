<div class="container">
    <?php
        $myTemplates = [
            'inputContainer' => '<div class="form-group">{{content}}</div>',
            'input' => '<input type="{{type}}" class="form-control" name="{{name}}"{{attrs}}/>'
        ];
        $this->Form->setTemplates($myTemplates);

        echo $this->Form->create();
        echo $this->Form->controls(
            [
                'full name' => ['name' => 'fullname','placeholder' => "Full Name", 'required' => false],
                'email' => ['placeholder' => "Email Address", 'required' => false],
                'username' => ['placeholder' => "Username", 'required' => false],
                'password' => ['placeholder' => "Password", 'required' => false],
                'confirm password' => ['name' => 'confirmpassword', 'placeholder' => "Confirm Password", 'required' => false],
            ],
            ['legend' => 'User Registration']
        );
        echo $this->Form->submit('Registration', ['class' => 'btn btn-primary']);
        echo $this->Form->end();
    ?>
</div>