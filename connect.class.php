<?php
    $link = mysqli_connect("mysql.hostinger.com","u640958987_nlarj","larjac@2018");
    if($link){
        mysqli_select_db($link, "u640958987_nlarj");
    }else{
        echo "Erro ao conectar ao banco de dados!!!";
    }
?>