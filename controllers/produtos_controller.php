<?php

class ProdutosController extends AppController {
	
	public $helpers = array('Html', 'Number');

	public function index() {
		$data = $this->Produto->find('all', array(
			'conditions' => array('Produto.active' => true),
			'order' => array('Produto.titulo' => 'ASC')
		));
		
		$this->set('produtos', $data);
	}
	
	public function view($slug) {
		$produto = $this->Produto->findBySlug($slug);
		
		$this->set('produto', $produto);
	}
	
}