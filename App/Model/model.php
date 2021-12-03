<?php

namespace Entity;

use Model\CommentManager;
use Model\UserManager;

abstract class BaseEntity {

}

class Post extends BaseEntity {

  private $id;
  private $date;
  private $title;
  private $content;
  private $authorId;

  public function getId()
  {
    return $this->id;
  }

  public function getDate(): \DateTime
  {
    return new \DateTime($this->date);
  }
}

namespace App\Model;

use Vendor\Core\PDOFactory;

abstract class BaseManager {
  protected $db;

  public function __construct()
  {
    $this->db = PDOFactory::getMysqlConnexion();
  }
};

class PostManager extends BaseManager {
  public function getPosts(int $number = null):array
  {
    if($number) {
      $query = this->db->prepare('SELECT * FROM posts ORDER BY id DESC LIMIT :limit');
      $query->bindValue(':limit',$number,\PDO::PARAM_INT);
      $query->execute();
    }
    else {
      $query =  $this->db->query('SELECT * FROM posts ORDER BY id DESC');
    }
    $query->setFetchmode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Post'); 
    return $query->fetchAll();
  }

  public function getPostsById(int $id)
  {
    $query = this->db->prepare('SELECT * WHERE id = :id');
    $query->bindValue(':id',$id,\PDO::PARAM_INT);
    $query->execute();
    $query->setFetchmode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'Entity\Post'); 
    return $query-fetch();
  }
};