<?	
	class MY_Model extends CI_Model {

		protected $_table_name = '';
		protected $_primary_key = 'id';
		protected $_primary_filter = 'intval';
		protected $_order_by = '';
	    protected $_order_direction = 'DESC';
		protected $_rules = array();
		protected $_timestamps = FALSE;
	    protected $_limit = 15;

		function __construct() {
			parent::__construct();
		}
		public function order_by($field){
			$this->_order_by = $field;
		}
		public function order_direction($dir){
			$this->_order_direction = $dir;
		}
		public function rules($rules = NULL)
		{
			if($rules == NULL)
			{
				return $this->_rules;
			} else {
				$this->_rules = $rules;
			}
		}		
		public function get($id = NULL, $single = FALSE){
			if($id != NULL){
				$filter = $this->_primary_filter;
				$id = $filter($id);
				$this->db->where($this->_primary_key, $id);
				$method = 'row';
			} elseif($single == TRUE){
				$method = 'row';
			} else{
				$method = 'result';
			}
			$this->db->order_by($this->_order_by,$this->_order_direction);
			return $this->db->get($this->_table_name)->$method();
		}
		public function count_pages()
	    {
	        $this->db->from($this->_table_name);
	        return ceil($this->db->count_all_results()/$this->_limit);
	    }
	}
?>