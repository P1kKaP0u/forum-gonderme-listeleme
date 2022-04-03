<?php

class FormApp extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        /* Kullanılacak model çekilir */
        $this->load->model("FormApp_Model");


    }

    /* form view ekrana basma */
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
        if ($insert)
        {
            redirect("formapp/listele");
        }
        else
        {
            redirect("formapp");
        }
        
    }

    /* list view ekrana basma */
    public function listele()
    {

        $items = $this->FormApp_Model->get_all();

        $viewData = array(

            "items" => $items

        );

        $this->load->view("list", $viewData);
    }


}
