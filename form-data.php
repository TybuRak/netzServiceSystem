<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Gotowe!</title>
    <style>
        h4{text-align: center;}
        .wrapper{
            text-align: center;
        }
    </style>
</head>
<body>
<nav>
    <div class="wrapper">
        <a class="brand-logo center">Netz Service System</a>
    </div>
</nav>
    <div class="wrapper">
        <h4>Gotowe!</h4>
        <button class="btn waves-effect waves-light" onclick="window.close()">Zakończ</button>
        <p><a href="mainWindow.php">powrót</a></p>
        <br />
        <?php

        $con = mysqli_connect('127.0.0.1', 'root', '');

        if(!$con){
            echo 'Nie jesteś podłączony do servera!';
        }

        if(!mysqli_select_db($con,'netzservicesystem')){
            echo 'Nie wybrałeś bazy danych!';
        }

        $sn = $_POST['sn'];
        $snczesc = $_POST['snczesc'];
        $czesc = $_POST['czesc'];
        $procedura = $_POST['procedura'];
        $data = $_POST['data'];


        $sql = "INSERT INTO zapis (sn,sn_czesc,czesc,procedura,data) VALUES ('$sn','$snczesc','$czesc','$procedura','$data')";

        if(!mysqli_query($con,$sql)){
            echo "Nie połączono!";
        }
        else{
            echo "Dane zostały wprowadzone!";
        }

        //header("refresh:30; url=mainWindow.php");

        ?>
</div>
</body>
</html>