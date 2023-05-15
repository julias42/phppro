<?php 

namespace GeekBrains\LevelTwo\Person;

class Name
{
  private string $firstname;
  private string $lastname;
  
  public function __construct(string $firstname, string $lastname)
  {
    $this->firstname = $firstname;
    $this->lastname = $lastname;
  }

  
public function __toString()
{
    return $this->firstname . ' ' . $this->lastname;
}
}