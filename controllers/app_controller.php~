<?php

class AppController extends Controller {
	
	public $components = array('Auth');
	
	public $scaffold = 'painel';
	
	public function beforeFilter() {
		
		$this->Auth->loginError = 'Usuário e/ou senha inválidos';
		$this->Auth->userScope = array('active' => true);
		
		if (isset($this->params['prefix'])) {
			$this->layout = 'painel';
		} else {
			$this->Auth->allow('*');
		}
		
		/*
		$this->loadModel('User');
		$this->User->save(array(
			'name' => 'Thiago Belem',
			'username' => 'TiuTalk',
			'password' => $this->Auth->password('12345'),
			'active' => true
		));
		*/
	}
	
}
