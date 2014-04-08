<?php




function getWochentagsName($nummer) {
  switch($nummer) {
    case 1: return "Montag";
    case 2: return "Dienstag";
    case 3: return "Mittwoch";
    case 4: return "Donnerstag";
    case 5: return "Freitag";
    case 6: return "Samstag";
    case 7: return "Sonntag";
  }
  return "(unbekannter Wochentag)";
}

function getWochentagsNameFromArray($nummer) {
    $wochentagsNamen = array(
        1 => "Montag",
        2 => "Dienstag",
        3 => "Mittwoch",
        4 => "Donnerstag",
        5 => "Freitag",
        6 => "Samstag",
        7 => "Sonntag"        
    );
    if(array_key_exists($nummer, $wochentagsNamen)) {
       return $wochentagsNamen[$nummer];       
    } else {
        return $unbekannterWochentag;
    }       
    
}