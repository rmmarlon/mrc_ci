<?php if (!defined('BASEPATH')) die();
	
	class Cadastro extends MY_Controller {
		protected $_controller_name = "cadastro";

        public function __construct() {
            parent::__construct();
            $this->model = $this->load->model('cadastro_model');
        }

		public function save(){
			$this->form_validation->set_rules($this->model->rules());
			if($this->form_validation->run() === FALSE){
				$this->load->library('parser');
				$this->parser->parse($this->_controller_name.'/novo', $this->data);
			} else{
				$id = $this->input->post('idCadastro');
				$data = array(
						"idCadastro" => '',
						"nome" => 	'',
						"cpf" =>	'',
						"cnpj" => 	'',
						"telefone" =>	'',
						"dataCadastro" => $now
					);

				$this->model->save($data,$id);
				$this->index();

			}
		}
	}
?>