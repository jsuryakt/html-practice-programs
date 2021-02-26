<html>
    <body>
        <form method="POST" >
            <input name="phone" >
            <button>SUBMIT</button>
        </form>
        <?php
        if(isset($_POST['phone'])) {
            $phone = $_POST['phone'];
            if(preg_match("/^0?[6-9][0-9]{9}$/", $phone)) {
            echo "Phone $phone valid";
            }
            else {
                echo "Please enter Valid Phone Number";
            }
        }
?>
    </body>
</html>