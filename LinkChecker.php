<?php

const MAX_CS_ERRORS = 15; 
const MIN_LINE_COVERAGE = 15;



function linkChecker($link) {
    
    $blockedHosts = array('youporn.com','rotten.com');
    $blockedTlds = array('ru', 'xxx');
    
    $parsedUrl = parse_url($link);
    
    $host = $parseUrl['host'];
    
    
    if( in_array($host, $blockedHosts) ) {
        echo "domain blocked";
        return false;
    }
    
    //@todo finish
    
    
    
}