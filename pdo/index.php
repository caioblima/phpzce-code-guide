<?php
declare(strict_types=1);
// http://php.net/manual/pt_BR/pdo.constants.php
// http://php.net/manual/pt_BR/pdo.setattribute.php
// http://php.net/manual/pt_BR/pdostatement.fetch.php
// http://php.net/manual/pt_BR/pdostatement.execute.php
$pdo = new PDO('mysql:dbname=zce;host=10.0.17.5', 'root', '');
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
// print_r($pdo);
// http://php.net/manual/pt_BR/pdo.drivers.php
// $drivers = \PDO::getAvailableDrivers();
// print_r($drivers);

//error handling
// $pdo->query('SELECT * FROM  tabela_que_nao_existe');
// if  ($pdo->errorCode()) {
//   $errorDetails = $pdo->errorInfo();
//   print_r($errorDetails);
//   echo PHP_EOL;
//   print sprintf(
//     'Código : %s, Código  do  driver  : %s, Mesagem:  %s',
//     $errorDetails[0],
//     $errorDetails[1],
//     $errorDetails[2]
//   );
// }
//Inserting data
// $affectedRows = $pdo->exec("INSERT INTO usuarios (nome, email) VALUES ('pdo', 'pdo@php.net');");
// print_r($affectedRows);
//Updating data
// $affectedRows = $pdo->exec("UPDATE usuarios SET nome = 'PHP', email = 'caio.lima@php.net'");
// print_r($affectedRows);
// //Updating data
// $affectedRows = $pdo->exec("DELETE FROM usuarios WHERE email = 'caio.lima@php.net'");
// print_r($affectedRows);

//Escaping parameters with PDO->quote
// $email = $_POST['email'];
// $deletionScript = $pdo->exec("DELETE FROM usuarios WHERE email = " . $pdo->quote($email));

//Transactions
// $pdo->beginTransaction();
// try {
//   //Sql instructions
//   $pdo->commit();
// } catch (Exception $e) {
//   $pdo->rollback();
// }
// Statements
// $data = $pdo->query("SELECT * FROM usuarios", PDO::FETCH_ASSOC);
// print_r($data->fetchAll());exit;
$query = $pdo->prepare("SELECT * FROM usuarios WHERE nome = :nome");
$query->execute([':nome' => 'PHP']);
// Or
// $query->bindParam(':nome', 'PHP', PDO::PARAM_STR);
print_r($query->fetchAll(PDO::FETCH_ASSOC));exit;
