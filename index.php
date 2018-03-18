<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:oskarserwer.database.windows.net,1433; Database = kulinaria", "Astorn", "{gry123123gryA}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "Astorn@oskarserwer", "pwd" => "{gry123123gryA}", "Database" => "kulinaria", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:oskarserwer.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
 ?>

<!DOCTYPE html>
<html lang="pl">

<head>
<meta charset="utf-8">
<title> Pchorek. gotuje</title>
<meta name="description" content="Blog na temat prostoty gotowania i przyjemności jaka z niego płynie!">
<meta name="keywords" content="gotowanie,gotowanie dla mężczyzn,ciekawe przepisy, proste przepisy, łatwe gotowanie, przepisy">
<meta name="author" content="Oskar Zadora">

<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
<link rel="stylesheet" href="main.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">

</head>


<body>
  <header>
    <h1 class="logo">Pchorek;) gotuje</h1>
    <nav id="topnav">

      <ul class="topmenu">
        <li><a href="#">O tobie!</a></li>
        <li><a href="#">Nowości</a></li>
        <li><a href="#">Logowanie</a></li>
        <li><a href="#">Wyszukiwarka przepisów</a></li>
        <li><a href="#">Polecane</a></li>
      </ul>

    </nav>
  </header>

  <main>
    <?php
$usersQuery = $conn->query('SELECT * FROM klient');
echo '$usersQuery';
echo 'nic';
      ?>

  </main>

</body>



</main>
</body>
  </html>
