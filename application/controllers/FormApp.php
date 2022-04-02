<?php

class FormApp extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        /* Kullanılacak model çekilir */
        $this->load->model("FormApp_Model");

    }

	public function index()
	{

		$this->load->view('form');
 
	}

    public function insert()
    {
       // echo "Form Kayıt işlemi";

       /* Formdan gelen bilgileri tutmak için array tanımlanır */
        $data = array(
            "name"      => $this->input->post("name"),
            "email"     => $this->input->post("email"),  
            "phone"     => $this->input->post("phone"),
            "message"   => $this->input->post("message")
        );

        /* Arraydeki bilgileri modele taşıyacak yapı */

        $insert = $this->FormApp_Model->insert($data);
        if($insert)
        {
            redirect("formapp");
        }
        
    }
}
