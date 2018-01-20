<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Rest extends REST_Controller
{

    function index_get()
    {
        $this->response([
            'Hello' => 'Anonymous',
        ]);
    }
}
