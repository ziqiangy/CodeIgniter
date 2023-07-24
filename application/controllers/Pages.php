<?php
class Pages extends CI_Controller{

    /**
     * to request this page, routing: http://codeigniter/index.php/pages/view/
     */
    public function view($page ='home'){
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            echo "error";
            show_404();
        }

        echo "yes";
        $data['title'] = ucfirst($page);
        $this->load->view('templates/header',$data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}