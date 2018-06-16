 <?php
 $dsn='mysql:host=localhost;charset=utf8;dbname=hotel';
 $utilizator='root';
 $parola='';
 $cnx = null;

 try {
   $cnx = new PDO($dsn, $utilizator, $parola);
   $cnx ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }

 catch (PDOException $e) {
   echo 'Conectare nereusita: ' . $e->getMessage();
 };
 ?>