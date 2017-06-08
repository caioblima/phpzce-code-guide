<?php
declare(strict_types=1);
// http://php.net/manual/pt_BR/pdo.constants.php
// http://php.net/manual/pt_BR/pdo.setattribute.php
// http://php.net/manual/pt_BR/pdostatement.fetch.php
// http://php.net/manual/pt_BR/pdostatement.execute.php
//http://php.net/manual/pt_BR/class.pdo.php
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
// $query = $pdo->prepare("SELECT * FROM usuarios WHERE nome = :nome");
// $query->execute([':nome' => 'PHP']);
// Or
// $query->bindParam(':nome', 'PHP', PDO::PARAM_STR);
// print_r($query->fetchAll(PDO::FETCH_ASSOC));exit;

//Data manipulation - PDO::FETCH*
// $query = $pdo->prepare('SELECT id, nome, email FROM  usuarios');
// $query->execute();
// // $query->bindColumn(1,  $id);
// // $query->bindColumn(2,  $nome);
// // $query->bindColumn(3,  $email);
// $query->bindColumn('id',  $id);
// $query->bindColumn('nome',  $nome);
// $query->bindColumn('email',  $email);
// while($row = $query->fetch(\PDO::FETCH_BOUND))  {
//   print sprintf('%d %s  %s',  $id,  $nome,  $email);
// }

// $query = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
// $query->bindValue(':email', 'caio.lima@php.net');
// $query->execute();
// print_r($query->fetch(PDO::FETCH_ASSOC));

// $query = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
// $query->bindValue(':email', 'caio.lima@php.net');
// $query->execute();
// print_r($query->fetch(PDO::FETCH_OBJ));

// class User
// {
//   public $id;
//   public $nome;
//   public $email;
// }
// $query = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
// $query->bindValue(':email', 'caio.lima@php.net');
// $query->execute();
// print_r($query->fetchAll(PDO::FETCH_CLASS, 'User'));

// class User
// {
//   private $pdo;
//   public $id;
//   public $nome;
//   public $email;

//   public function __construct()
//   {
//     $this->pdo = new PDO('mysql:dbname=zce;host=10.0.17.5', 'root', 'macabro656');
//     $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
//   }

//   public function getUser()
//   {
//     $query = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
//     $query->bindValue(':email', 'caio.lima@php.net');
//     $query->setFetchMode(PDO::FETCH_INTO, $this);
//     $query->execute();
//     return $query->fetchAll();
//   }
// }

// $user = new User();
// print_r($user->getUser());

//PDO::FETCH_NAMED
// $sql = "
// SELECT u.id, u.nome, pm.nome FROM usuarios u
// INNER JOIN permissao pm ON u.id = pm.usuarios_id          
// "; 
// $query = $pdo->prepare($sql);
// // $query->bindValue(':email', 'caio.lima@php.net');
// $query->execute();
// while ($row = $query->fetchAll(PDO::FETCH_NAMED)) {
//   print_r($row);
// }

//PDO::FETCH_NUM
$sql = "
SELECT u.id, u.nome, pm.nome FROM usuarios u
INNER JOIN permissao pm ON u.id = pm.usuarios_id          
"; 
$query = $pdo->prepare($sql);
// $query->bindValue(':email', 'caio.lima@php.net');
$query->execute();
while ($row = $query->fetchAll(PDO::FETCH_NUM)) {
  print_r($row);
}