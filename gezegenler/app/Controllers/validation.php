<?php

class Validation extends CI_Controller
{

    public function index()
    {
        $this->load->view("login");
    }

    public function save()
    {

        $this->load->library("form_validation");

        $this->form_validation->set_rules("asd","Kullanıcı Adı","required|trim");
        $this->form_validation->set_rules("qwe", "Şifre", "required|trim|min_length[6]|max_length[8]");


        $error_messages = array(
            "required"  => "<strong>{field}</strong>   alanını doldurmak zorundasınız",
            "valid_email"   => "Lütfen geçerli bir {field} adresi giriniz",
            "is_unique"     => "Girmiş olduğunuz {field} ile zaten bir kayıt vardır",
            "matches"       => "Girmiş olduğunuz şifreler birbirleriyle uyuşmuyor"
        );

        $this->form_validation->set_message($error_messages);

        if($this->form_validation->run() == FALSE){
            echo validation_errors();
        }


    }

}