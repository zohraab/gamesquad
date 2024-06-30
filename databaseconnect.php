
<?php


  $host_name = 'db5016015639.hosting-data.io';
  $database = 'dbs13049133';
  $user_name = 'dbu3875095';
  $password = '<MounirNael23122016>';

  $link = new mysqli($host_name, $user_name, $password, $database);

  if ($link->connect_error) {
    die('<p>La connexion au serveur MySQL a échoué: '. $link->connect_error .'</p>');
  } else {
    echo '<p>Connexion au serveur MySQL établie avec succès.</p>';
  }
  require_once 'pdoconfig.php';

try {
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
die ("Could not connect to the database $dbname :" . $pe->getMessage());
}
?>
