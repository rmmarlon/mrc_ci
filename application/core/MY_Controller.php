<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
	
	class MY_Controller extends CI_Controller {
		protected $data;
		protected $model;
		protected $_controller_name = '';
		protected $_response = "";

		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$this->data['title'] = $this->_controller_name;
			$this->load->view('templates/header', $this->data);
			$this->load->view('index', $this->data);
			$this->load->view('templates/footer');
		}
		
		public function pages(){
			if (!file_exists('../application/views/'.$this->_controller_name.'/lista.php')){
				show_404 (); 
			}
			var_dump($this->model);exit;
			$this->data['title'] = ucfirst($this->_controller_name);
			$this->data['itens'] = $this->model->get();
			$this->load->view($this->_controller_name.'/lista', $this->data);
			
		}

	}
?>