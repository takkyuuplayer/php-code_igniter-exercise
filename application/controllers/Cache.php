<?php

class Cache extends CI_Controller
{
    public function index()
    {
        $data = [
            'cached_at' => date('Y-m-d H:i:s'),
        ];
        $this->output->cache(1);
        $this->load->view('cache', $data);
    }
}
