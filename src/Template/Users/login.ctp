<div class="container">
    <h1>User Login</h1>
    <?php
        $myTemplates = [
            'inputContainer' => '<div class="form-group">{{content}}</div>',
            'input' => '<input type="{{type}}" class="form-control" name="{{name}}"{{attrs}}/>'
        ];
        $this->Form->setTemplates($myTemplates);

        echo $this->Form->create();
        echo $this->Form->control('email', ['placeholder' => "Email Address", 'required' => false]);
        echo $this->Form->control('password', ['placeholder' => "Password", 'required' => false]);
        echo $this->Form->button('<i class="fa fa-sign-in"></i> Login', [
            'class' => 'btn btn-success', 
            'type' => 'submit',
            'escape' => false
        ]);
        echo $this->Form->end();
    ?>
</div>