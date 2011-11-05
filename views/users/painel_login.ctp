<h1>Formulário de Login</h1>
<?php echo $this->Session->flash('auth') ?>
<?php echo $this->Form->create('User') ?>
	<?php echo $this->Form->input('username', array('label' => 'Usuário')) ?>
	<?php echo $this->Form->input('password', array('label' => 'Senha')) ?>
	<?php echo $this->Form->submit('Entrar') ?>
<?php echo $this->Form->end() ?>