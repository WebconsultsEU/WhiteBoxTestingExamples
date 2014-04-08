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
        $this->assertInstanceOf('TraficFeeCalculator', $trafficFeeCalculator);
        
    }     
    
    
   
    
}
