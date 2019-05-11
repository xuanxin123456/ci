<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hello extends CI_Controller {

    public function index(){
       // $data['header']='header';
       // $data['body']='成为大牛的开山之作';
        $data=array(
                'header' => 'MZOON',
                'body'=>'成为大牛的开山之作',
                );
        $this->load->view('hello',$data);
    }
}
