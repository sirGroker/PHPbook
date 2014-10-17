<?php

    $var = "first_var";
    $$first_var = "name_var";
    
  
    echo'<pre>';
    print_r($var);
    echo'<pre>';
    print_r($$var);
    

