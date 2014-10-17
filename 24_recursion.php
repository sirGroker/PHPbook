<?php

function rec($x)
{
    if($x===0){
        return 1;
    }else {
        return $x*rec($x-1);
    }
}

echo'<pre>';
print_r(rec(3));
