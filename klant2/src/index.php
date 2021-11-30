<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body class="container">
    <div class="jumbotron">
    <?php
        $message = "Hello klant 2";
        $version = "0.2";

        echo "<h1>" . $message . "</h1>";
        echo "<p>Hostname: " . $_ENV['HOSTNAME'] . "</p>" ;
        echo "<p>IP Address: " . $_SERVER['SERVER_ADDR'] . "</p>" ;
        echo "<p>Running version " . $version . " </p>";
        echo "<p><a href='./test.php'>phpinfo</a></p>";
        echo '<img src="https://www.docker.com/sites/default/files/horizontal.png">';
    ?>
    </div>
</body>
</html>