<?php

class FormApp_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /* Model için kullanılacak tablo */
    public $table_name = "rezervasyon_form";

    public function insert( $data = array())
    {

            return $this->db->insert( $this->table_name, $data);
            
    }

    public function get_all()
    {

        return $this->db->get( $this->table_name )->result();

    }

    public function delete($id)
    {

        return $this->db->where("id" , $id)->delete($this->table_name);

    }

    public function getfor_edit($id)
    {
        return $this->db->where("id", $id)->get($this->table_name)->result();
        
    }

    public function update($id,$data = array())
    {

        return $this->db->where("id", $id)->update($this->table_name, $data);

    }




}