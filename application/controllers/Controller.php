<?php

class Controller extends CI_Controller {
    public function _remap($method, $params = [])
    {
        if (method_exists($this, $method)) {
            return call_user_func_array([$this, $method], $params);
        }
        echo $method;
    }

    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function hello($name = 'guest', $greeting = 'hello')
    {
        echo "$name, $greeting";
    }
}
