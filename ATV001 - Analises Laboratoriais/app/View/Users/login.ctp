<h2><?php echo __('Login'); ?></h2>
<?php
echo $this->Session->flash('auth');
echo $this->Form->create('Paciente');
echo $this->Form->inputs(array(
'login',
'senha'
));
echo $this->Form->end(__('Sign In'));