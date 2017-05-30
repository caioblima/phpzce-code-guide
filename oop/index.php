<?php
declare(strict_types=1);
//http://php.net/manual/pt_BR/language.oop5.php
//http://php.net/manual/pt_BR/language.oop5.traits.php
//http://php.net/manual/pt_BR/language.oop5.visibility.php
//http://php.net/manual/en/language.oop5.overloading.php#object.set
//http://php.net/manual/en/language.oop5.magic.php
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

// trait LogTrait {
//   public function write($message)
//   {
//     return file_put_contents('log.txt', $message . PHP_EOL, FILE_APPEND);
//   }

//   public abstract function getLog();
// }

// class Logger
// {
//   use LogTrait;
//   public function getLog()
//   {
//     return file_get_contents('log.txt');
//   }
// }

// $logger = new Logger();
// $logger->write('ZCE OOP!');
// echo $logger->getLog();

// class Livro {
//   public function __construct()
//   {
//     echo 'Objeto Livro criado' . PHP_EOL;
//   }
//   public function __destruct()
//   {
//     echo 'Objeto Livro destruído' . PHP_EOL;
//   }
// }
// $livro = new Livro();
//or
// unset($livro);
// exit;

class Overloading {
  private $strProperty = 'You are using overload echo to show some data like this property';
  private $testPropData = [];

  public function __call($method, array $args)
  {
    echo 'Method: ' . $method . ' invoked' . PHP_EOL;
    foreach ($args as $params) {
      print_r($params);
    }
  }

  public function __get($propName) 
  {
    print_r('Trying to get non-existent or non-accessible property ' . $propName . PHP_EOL);
    print_r($this->{$propName});
  }

  public function __set($propName, $value)
  {
    if (!property_exists($this, $propName)) {
      throw new Exception("Error cannot overload property that doesn't exists!", 1);
      
    }
    $this->{$propName} = $value;
  }

  public function __toString()
  {
    return 'Class Name: '. get_class($this) . ' ' . $this->strProperty;
  }

  public function __isset($propName)
  {
    return isset($this->{$propName});
  }

  public function __unset($propName)
  {
    return $this->{$propName} = null;
  }
  //Pass an indexed array with all properties you want to serialize
  public function __sleep()
  {
    return array_keys(get_object_vars($this));
  }

  public function __wakeup()
  {
    //Do something;
    print_r('Method wakeup called after an unserialize');
  }
}

$overloading = new Overloading();
// __call
// $overloading->testMethod(['test1', 'test2', 'test3']);

// __set and __get
// $overloading->testPropData = ['someData'];
// print_r($overloading->testPropData);

// __isset
// $exists = isset($overloading->testPropData);
// var_dump($exists);

// __unset
// unset($overloading->testPropData);
// var_dump($overloading->testPropData);

// __sleep and __wakeup
// $serializedObject = serialize($overloading);
// $unserializedObject = unserialize($serializedObject);

// __toString
echo $overloading;
