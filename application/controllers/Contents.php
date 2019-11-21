<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contents extends CI_Controller {

    public function __construct(){

         parent::__construct();
         $this->load->helper('url');
         $this->load->database();

    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Content
	 *	- or -
	 * 		http://example.com/index.php/Content/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){

	    $data['content'] =  $this->Content->all();
	    $this->load->view('header');
		$this->load->view('content/index', $data);
		$this->load->view('footer');
	}

	public function save(){


	    $this->load->library('form_validation');

	    $this->form_validation->set_rules('name','Name','required');
	    $this->form_validation->set_rules('description','Description','required');

	    $name =  $this->input->post('name');
        $description = $this->input->post('description');
        $data = array(
            'name' => $name,
            'description' => $description
        );

        if( $this->form_validation->run() ){
            $result = $this->Content->store($data);
            if($result){
            redirect('contents', 'refresh');
            }
        } else {
            $this->load->helper('form');
	        $this->load->view('header');
	        $this->load->view('content/add');
	        $this->load->view('footer');
        }



    }


	public function add(){

	    $this->load->helper('form');
	    $this->load->view('header');
	    $this->load->view('content/add');
	    $this->load->view('footer');
    }

    public function search(){

	    $this->load->view('header');
	    $this->load->view('content/search');
	    $this->load->view('footer');
    }

    public function search_content(){

	    $term = $this->input->get('term');
        $this->db->like('name', $term);
        $data = $this->db->get("content")->result();
        echo json_encode( $data);

    }

    public function get(){

	    $id = $this->input->get('id');
        $this->db->where('ID',$id);
        $query= $this->db->get('content');
        $result= $query->result();
        $num_rows=$query->num_rows();
        if($num_rows > 0){
            echo json_encode( $result);
        }

    }



}
