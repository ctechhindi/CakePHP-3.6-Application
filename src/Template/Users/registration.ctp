<div class="container">
    <h1>User Registration</h1>
    <?php
        $myTemplates = [
            'inputContainer' => '<div class="form-group">{{content}}</div>',
            'input' => '<input type="{{type}}" class="form-control" name="{{name}}"{{attrs}}/>'
        ];
        $this->Form->setTemplates($myTemplates);

        echo $this->Form->create();
        echo $this->Form->control('fullname', ['placeholder' => "Full Name", 'required' => false]);
        echo $this->Form->control('email', ['placeholder' => "Email Address", 'required' => false]);
        echo $this->Form->control('username', ['placeholder' => "Username", 'required' => false]);
        echo $this->Form->control('password', ['placeholder' => "Password", 'required' => false]);
        echo $this->Form->control('confirm password', ['name' => 'confirmpassword', 'placeholder' => "Confirm Password", 'required' => false]);
        echo $this->Form->submit('Registration', ['class' => 'btn btn-primary']);
        echo $this->Form->end();
    ?>
</div>