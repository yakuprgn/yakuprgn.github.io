<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Activity-5 Currency Calculator </title>

    </head>
    <body>
        <h1>Currency Calculator</h1>
        <form method="post">
            From: <input type="text" name="from" id="from" value="0">

            Currency: 
            <select name="cur1" id="cur1">
                <option value="USD">US Dollar</option>
                <option value="CAD">Canadian Dollar</option>
                <option value="EUR">Euro</option>
            </select><br><br>

            To: <input type="text" name="to" id="to" value="0">

            Currency: 
            <select name="cur2" id="cur2">
                <option value="USD">US Dollar</option>
                <option value="CAD">Canadian Dollar</option>
                <option value="EUR">Euro</option>
            </select><br><br>

            <input type="submit" name="convert" value="convert" id="convert">
            
        </form> <br>


        <?php
            $currencies = array(
                "USD" => array("USD" => 1,"CAD" => 1.35,"EUR" => 0.92),
                "CAD" => array("CAD" => 1,"USD" => 0.74,"EUR" => 0.67),
                "EUR" => array("EUR" => 1,"USD" => 1.10,"CAD" => 1.47),
            );

            if(isset($_POST["convert"])) {
                $from = $_POST["from"];
                $cur1 = $_POST["cur1"];
                $cur2 = $_POST["cur2"];

                $result = $from * $currencies[$cur1][$cur2];

                echo "From: ".$from."  To: ".$result ;
            }
        ?>
    </body>

</html>