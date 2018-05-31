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
                'email' => ['placeholder' => "Email Address", 'required' => false],
                'password' => ['placeholder' => "Password", 'required' => false],
            ],
            ['legend' => 'User Login']
        );

        echo $this->Form->button('<i class="fa fa-sign-in"></i> Login', [
            'class' => 'btn btn-success', 
            'type' => 'submit',
            'escape' => false
        ]);
        echo $this->Form->end();
    ?>
</div>