<?php 

namespace GeekBrains\LevelTwo\Blog;

use GeekBrains\LevelTwo\Person\Person;

class Post
{
  private int $id;
  private Person $author;
  private string $text;
  
  public function __construct(Person $author, string $text, int $id)
  {
    $this->id = $id;
    $this->author = $author;
    $this->text = $text;
  }
  public function __toString()
  {
      return $this->author . 'пишет:' . $this->text;
  }
}