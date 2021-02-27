<?php
        if(!isset($PHONE['phone'])) {
            $phone = $_POST['phone'];
            if (preg_match("/^0?[6-9][0-9]{9}$/", $phone)) {
                echo "Phone $phone valid";
            }
            else {
                echo "Please enter Valid Phone Number";
            }
        }
        echo "<br><a href='JavaScript:history.go(-1);'>GO BACK</a>";
?>