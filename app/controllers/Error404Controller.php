<?php 

    class Error404Controller extends \HXPHP\System\Controller
    {
        public function indexAction()
        {
            $this->view->setTitle('Página não encontrada');
        }
    }