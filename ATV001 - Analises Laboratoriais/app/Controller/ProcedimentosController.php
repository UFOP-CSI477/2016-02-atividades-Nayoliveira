<?php
	
	class ProcedimentosController extends AppController{
		public $helpers = array('Form');
		public $components = array('Flash');
		public function index(){
			$this->Procedimento->recursive = -1;
			$this->set('procedimentos', $this->paginate());
		}
	}