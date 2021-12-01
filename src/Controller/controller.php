<?php

namespace Controller;

use Model\PostManager;

abstract class BaseController{
  protected $params;
  protected $template = __DIR__ . './../Views/template.php';
  protected $viewsDir = __DIR . './../Views/';
  public function __construct(string $action, array $params = []){
    $this->params = $params;
    $method = 'execute'. ucfirst($action);
    if (is_callable([$this, $method])){
      throw new \RunTimeException("L'action" . $method . "n'est pas définie sur ce module");
    }
    $this->$method;
  }
}
class FrontController extends BaseController
{
  public function executeIndex(int $number = 5)
  {
    $manager = new PostManager();
    $index = $manager->getPosts($number);

    return $this->render("Page d'accueil",$index, "Frontend/index");
    }

    public function executeShow()
    {
      $manager = new PostManager();
      $article = $manager->getPostById($this->params['id']);
      if (!$article)
      {
        header('Location: /');
        exit();
      }
      return $this->render($article->getTitle(), ['article' => $article], 'Frontend/show');
    }

    public function render(string $title, array $vars, string $view)
    {
      $view = $this->viewsDir . $viewew . 'view.php';
      ob_start();
      require $view;
      $content = ob_get_clean();
      return require $this->template;
    }
}

?>