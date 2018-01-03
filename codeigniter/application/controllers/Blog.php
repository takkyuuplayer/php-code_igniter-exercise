<?php
class Blog extends CI_Controller {

    public function index()
    {
        $out = $this->load->view('blogview', [], TRUE);
        echo strlen($out);
    }
}
