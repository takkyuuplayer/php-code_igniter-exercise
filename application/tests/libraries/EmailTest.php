<?php

class EmailTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->CI->load->library('email');
    }

    public function testLoaded()
    {
        $this->assertInstanceOf(
            'CI_Email',
            $this->CI->email
        );
    }

    public function testSendTextEmail()
    {
        $this->CI->email->from('takkyuuplayer+test@gmail.com', 'takkyuuplayer');
        $this->CI->email->to('takkyuuplayer+to@gmail.com', 'takkyuuplayer');
        $this->CI->email->subject('Text Email Test');
        $this->CI->email->message('Testing the email class.');

        $this->CI->email->send();
    }

    public function testSendHtmlEmailWitView()
    {
        $output = $this->CI->load->view('templates/footer', [], true);

        $this->CI->email->initialize([
            'charset' => 'utf8',
            'mailtype' => 'html',
        ]);
        $this->CI->email->from('takkyuuplayer+test@gmail.com', 'takkyuuplayer');
        $this->CI->email->to('takkyuuplayer+to@gmail.com', 'takkyuuplayer');
        $this->CI->email->subject('Text Email Test');
        $this->CI->email->message($output);

        $this->CI->email->send();
    }
}

