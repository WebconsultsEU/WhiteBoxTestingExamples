<?php

include '../TrafficFeeCalculator.php';

/**
 * Description of TrafficFeeCalculator
 *
 * @author Webconsults
 */
class TrafficFeeCalculatorTest extends PHPUnit_Framework_TestCase
{
   
    private function getTestObject() {
        return new TrafficFeeCalculator();
    }
    
    public function testConstruct()
    {
        $trafficFeeCalculator = $this->getTestObject();         
        $this->assertInstanceOf('TrafficFeeCalculator', $trafficFeeCalculator);
        
    }     
    
    public function testVillage5km()
    {
        $trafficFeeCalculator = $this->getTestObject();
        $fee =  $trafficFeeCalculator->getFee(5,'village'); 
        $this->assertEquals(32, $fee);
        
    }
    
    public function testLand5km()
    {
        $trafficCalculator = $this->getTestObject();
        $fee = $trafficCalculator->getFee(5,'land');
        $this->assertEquals(29, $fee);
    }
    
    public function testHighway5km()            
    {
        $trafficCalculator = $this->getTestObject();
        $fee = $trafficCalculator->getFee(5,'highway');
        $this->assertEquals(28, $fee);
    }
    
    

    
    
    
    
   
    
}
