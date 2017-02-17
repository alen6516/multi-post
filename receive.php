<?php
    #$var=$_POST["final"];
    #echo $var;
    
    foreach ($_POST as $key => $value) {
       $$key=$value;
    }

    for($i=0;$i<count($var);$i++){
        echo $var[$i]."<br>";
    }
    echo $final;

?>
