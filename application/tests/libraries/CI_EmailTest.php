<?php

class CI_EmailTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->CI->load->library('email');
        $this->CI->email->initialize([
            'protocol' => 'smtp',
            'crlf' => "\r\n",
            'newline' => "\r\n",
            'smtp_host' => 'smtp-server',
            'smtp_port' => '1025',
            'mailtype' => 'text',
            '_encoding' => '7bit',
        ]);
    }

    public function test_load()
    {
        $this->assertInstanceOf(
            'MY_Email',
            $this->CI->email
        );
    }

    public function test_utf8_email_sending()
    {
        $res = $this->CI->email->from('from@example.com', 'From Name')
            ->to('takkyuuplayer@gmail.com', 'To Name')
            ->subject('This is subject')
            ->message('This is ＵＴＦ−８', 'UTF-8')
            ->send();

        $this->assertTrue($res);
    }
}
