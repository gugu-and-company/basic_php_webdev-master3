<?php

class Post
{
  private const DEFAULT_NAME = "名無しさん";
  private static $count = 0;
  public $post;
  public $dttm;

  public function __construct($post)
  {
    $this->setPost($post);
  }

  public function setPost($post)
  {
    $this->dttm = new DateTime('now');;
    $this->post = $post;
  }

  public function getDatetime()
  {
    return $this->dttm->format('Y年m月d日 H時i分s秒');
  }

  public function getPost()
  {
    return $this->post;
  }
}
