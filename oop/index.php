<?php
declare(strict_types=1);
//http://php.net/manual/pt_BR/language.oop5.php
//http://php.net/manual/pt_BR/language.oop5.traits.php
//http://php.net/manual/pt_BR/language.oop5.visibility.php
//http://php.net/manual/en/language.oop5.overloading.php#object.set
// class Car
// {
//   const TYRE_SUPPLIER = 'Pirelli';
//   public $window;
//   public $chassis;
//   public $engine;
//   private $tyres;
//   public $wheels;
//   protected $model;

//   public function __construct()
//   {
//     $this->tyres = self::TYRE_SUPPLIER;
//   }

//   public function setModel($model)
//   {
//     return $this->model = $model;
//   }
  
//   public function getModel()
//   {
//     return $this->model;
//   }
// }
// $car = new Car();
// $car->window = 'black';
// $car->chassis = 'lightweight-frame';
// $car->engine = 'V8 turbo';
// $car->wheels = 'oz';
// $car->setModel('Ferrari FXX');
// print_r($car);
// echo $car->getModel();
// $class_methods = get_class_methods($car);
// $class_vars = get_object_vars($car);
// print_r($class_vars);
// print_r($class_methods);
// abstract class Service {
//   public abstract function request();
//   public abstract function response();
// }

// class JsonService extends Service
// {
//   public function request()
//   {
//     return $this;
//   }
//   public function response()
//   {
//     //
//   }
// }
// $json = new JsonService();
// $request = $json->request();
// $response = $request->response();

trait LogTrait {
  public function write($message)
  {
    return file_put_contents('log.txt', $message . PHP_EOL, FILE_APPEND);
  }

  public abstract function getLog();
}

class Logger
{
  use LogTrait;
  public function getLog()
  {
    return file_get_contents('log.txt');
  }
}

$logger = new Logger();
$logger->write('ZCE OOP!');
echo $logger->getLog();
