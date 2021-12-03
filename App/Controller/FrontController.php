<?php
namespace App\FrontController;


require "./controller";
require_once "./BaseController";


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