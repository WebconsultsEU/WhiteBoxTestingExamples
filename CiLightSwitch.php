<?php

const MAX_CS_ERRORS = 15; 
const MIN_LINE_COVERAGE = 15;

function ciLightSwitch($unitTestOk, $codeStandardErrors, $testCoveragePercent  ) {
    
    if ($unitTestOK === true ) {
        echo 'tests ok';
    } else {
         echo "tests failed";
         return 'red';
    }
    
    if ($codeStandardErrors > MAX_CS_ERRORS) {
        echo "tests failed";
        return 'red';
    } else {
        echo 'cs standard ok';
    }
    
    if($testCoveragePercent >= MIN_LINE_COVERAGE) {
        echo "line coverage okay";
    } else {
        echo 'line coverage not okay';
        return 'yellow';
    }
    
    return 'green';
    
}