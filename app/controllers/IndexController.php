<?php 

class IndexController extends \HXPHP\System\Controller
{
	public function indexAction()
	{
            $this->view->setVar('description', 'Seja muito bem-vindo ao site oficial da ETEC Rosa Perrone Scavone');
		/*
		 	//Opções disponíveis
			$this->view->setPath('index')
					   ->setFile('index')
					   ->setHeader('header')
					   ->setFooter('footer')
					   ->setTemplate(true)
					   ->setVar('ola', 'Mundo')
					   ->setVars(array(
					   		'teste' => 'Ola Mundo'
					   	))
					   ->setAssets('css', 'teste.css')
					   ->setAssets('css', array(
					   		'teste2.css',
					   		'teste3.css'
					   	))
					   ->setAssets('js', array(
					   		'teste2.js',
					   		'teste3.js'
					   	))
					   ->setTitle('Oops! Nada encontrado!');
		*/
	}
}