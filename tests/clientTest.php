<?php

    use PHPUnit\Framework\TestCase;

    require_once '../Opbeat/client.php';

    class ClientTest extends TestCase {

        public function testGetErrorLevel() {
            $this->assertEquals(Opbeat_Client::getErrorLevel(E_WARNING), 'warning');
            $this->assertEquals(Opbeat_Client::getErrorLevel(E_ERROR), 'fatal');
            $this->assertEquals(Opbeat_Client::getErrorLevel(E_COMPILE_ERROR), 'fatal');
            $this->assertEquals(Opbeat_Client::getErrorLevel(E_NOTICE), 'notice');
        }

    }