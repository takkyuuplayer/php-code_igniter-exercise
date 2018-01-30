<?php

class TestCase extends CIPHPUnitTestCase
{
    public $CI;

    public function setUp()
    {
        parent::setUp();

        $this->CI =& get_instance();
    }
}
