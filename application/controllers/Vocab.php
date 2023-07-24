<?php
class Vocab extends CI_Controller{
    /**
     * http://codeigniter/index.php/vocab/view
     */
    public function view(){
        echo "me";
        $this->load->view('vocab/home');
    }
}