<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() 
	{
		parent::__construct();
	}

	public function index($page = null)
	{
		$navData = $this->Data_cache->get_all();
		
		if(is_null($page)) {	// Home page
			$page = 'home';
			$bodyData = '';
		} else {				// Not home page
			$bodyData = $this->Data_cache->get_article($page);
			$bodyData[COLLECTION_META] = lf_get_collection_meta($bodyData);	
		}
		
		$data = array(
			DATA_NAV => $navData, 
			DATA_BODY => $bodyData
		);
		
		$this->load->view('shared/_header',$data);
		$this->load->view('shared/_navbar');
		$this->load->view($page);
		$this->load->view('shared/_footer');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */