<?php

    $a = array("Washington" => "USA", "5" => "North Korea", "Kyiv" => "Ukraine", "Addis Abeba" => "Ethiopian");
    
    echo "Default array <br/>";
    echo'<pre>';
    print_r($a);
    
    ksort($a);
    echo "ksort <br/>";
    print_r($a);
    
    asort($a);
    echo "asort <br/>";
    print_r($a);
    
    
    sort($a);
    echo "sort <br/>";
    print_r($a);
    
    rsort($a);
    echo "rsort <br/>";
    print_r($a);
    
    $str = array('h', 'e', 'l', 'l', 'o');
    rsort($str);
    echo'<pre>';
    print_r($str);
    
    
    
    