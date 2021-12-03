<?php

namespace App\Controller;

use Model\PostManager;

abstract class BaseController{
  protected $params;
  protected $template = __DIR__ . '../Views/template';
  protected $viewsDir = __DIR__ . '../Views/';
  public function __construct(string $action, array $params = []){
    $this->params = $params;
    $method = 'execute'. ucfirst($action);
    if (is_callable([$this, $method])){
      throw new \RunTimeException("L'action" . $method . "n'est pas définie sur ce module");
    }
    $this->$method;
  }
}
?>