<?php

require_once SRC_DIR . DIRECTORY_SEPARATOR . 'organizer.php'; 

class OrganizerTest extends PHPUnit_Framework_TestCase
{
    public function testWithCorrectValue(){
        
        /**
         * as name stated we are going to test this with the correct option
         * i have added the correct name here they all are organizer so
         * function should return true  
         */
        $this->assertEquals(true, is_organizer('harshadmane@gmail.com'));
        $this->assertEquals(true, is_organizer('tejaswini@webfanzine.com'));
        
        
    }
    
    public function testWithInCorrectValue(){
        
        /**
         * While i am not so this should return false
         */
        
        $this->assertEquals(false, is_organizer('anthakkar08@gmail.com'));
    }
}

