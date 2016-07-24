<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="#">
            First name: <input type="text" name="fname"><br>
            Last name: <input type="text" name="lname"><br>
            <input type="submit" value="Submit">
        </form> 
        <?php
        require('./Connector.php');
        require('./Name.php');
        $connector = new Connector("Marcin");
        $name = new Name("Marcin");
        echo $connector->getinscription();
        $connector->getinscription();
        $connector->setinscription();
        ?>
    </body>
</html>
