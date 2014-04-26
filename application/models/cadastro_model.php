<? if (!defined('BASEPATH')) die();
	class cadastro_model extends MY_Model {
		
		protected $_table_name = 'cadastro';
		protected $_primary_key = 'idCadastro';
		protected $_primary_filter = 'intval';
		protected $_order_by = 'idCadastro';
		protected $_rules = array();

		function __construct(){
            parent::__construct();
        }
	}
?>