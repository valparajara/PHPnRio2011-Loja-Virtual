<?php

class Produto extends AppModel {
	
	public $belongsTo = array('Marca', 'Categoria');

	public $displayField = 'titulo';
}