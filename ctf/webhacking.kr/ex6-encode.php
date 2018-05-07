<?php
    $val_id="admin";

    for($i=0;$i<20;$i++)
    {
        $val_id=base64_encode($val_id);
    }

    $val_id=str_replace("1","!",$val_id);
    $val_id=str_replace("2","@",$val_id);
    $val_id=str_replace("3","$",$val_id);
    $val_id=str_replace("4","^",$val_id);
    $val_id=str_replace("5","&",$val_id);
    $val_id=str_replace("6","*",$val_id);
    $val_id=str_replace("7","(",$val_id);
    $val_id=str_replace("8",")",$val_id);

    echo($val_id);
?> 