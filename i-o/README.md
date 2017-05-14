```php
<?php
require_once './TraitTest.php';
class MainClass {
  use TraitTest;

  private function __construct($data)
  {
    $this->setData($data);
  }

  public static function getInstance($data)
  {
    if (!empty($data)) return new static($data);
  }
}
```