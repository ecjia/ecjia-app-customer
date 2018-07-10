<?php

defined('IN_ROYALCMS') or exit('No permission resources.');

class customer_contact_way_viewmodel extends Component_Model_View {

    public $table_name = '';
    public $view = array();

    public function __construct() {
//         $this->db_config = RC_Config::load_config('database');
//         $this->db_setting = 'default';
        $this->table_name = 'customer_contact_way';
        $this->table_alias_name = 'cw';

        $this->view = array(
        	'admin_user' => array(
        		'type' => Component_Model_View::TYPE_LEFT_JOIN,
        		'alias' => 'au',
      			'on' => 'au.user_id = cw.updater'
        	),
        );
        parent::__construct();
    }

}

// end