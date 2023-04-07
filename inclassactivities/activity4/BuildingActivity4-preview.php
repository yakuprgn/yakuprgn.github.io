<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> BuildingActivity4-preview Php file </title>

    </head>
    <body>

        <?php
            if(empty($_POST['name'])==true)
            {
                echo "Name: Not Provided" ."<br />";
            }
            else
            {
                echo $_POST['name'] ."<br />";
            }

            if(empty($_POST['username'])==true)
            {
                echo "Username: Not Provided" ."<br />";
            }
            else
            {
                echo $_POST['username'] ."<br />";
            }

            if(empty($_POST['password'])==true)
            {
                echo "Password: Not Provided" ."<br />";
            }
            else
            {
                echo $_POST['password'] ."<br />";
            }

            if(empty($_POST['address'])==true)
            {
                echo "Address: Not Provided" ."<br />";
            }
            else
            {
                echo $_POST['address'] ."<br />";
            }

            if(empty($_POST['country'])==true)
            {
                echo "Country: Not Provided" ."<br />";
            }
            else
            {
                echo $_POST['country'] ."<br />";
            }

            if(empty($_POST['zipcode'])==true)
            {
                echo "Zip: Not Provided" ."<br />";
            }
            else
            {
                echo $_POST['zipcode'] ."<br />";
            }

            if(empty($_POST['email'])==true)
            {
                echo "Email: Not Provided" ."<br />";
            }
            else
            {
                echo $_POST['email'] ."<br />";
            }

            if(empty($_POST['sex'])==true)
            {
                echo "Sex: Not Provided" ."<br />";
            }
            else
            {
                echo $_POST['sex'] ."<br />";
            }

            if(empty($_POST['language'])==true)
            {
                echo "Language: Not Provided" ."<br />";
            }
            else
            {
                echo $_POST['language'] ."<br />";
            }

            if(empty($_POST['about'])==true)
            {
                echo "About: Not Provided" ."<br />";
            }
            else
            {
                echo $_POST['about'] ."<br />";
            }


        ?>
    </body>

</html>