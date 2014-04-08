<?php


class TrafficFeeCalculator {
    
    public function __construct(){
        
    }
    
    public function getFee($overSpeed, $terrain) {
        if($overSpeed <= 5 && $terrain == 'village') {
            return 32;        
        }
        
       if($overSpeed <= 5 && $terrain == 'land') {
            return 29;        
        }
        
        if($overSpeed <= 5 && $terrain == 'highway') {
            return 28;        
        }
        
        
    }
    
}