<?php

  class Person {

    private $name;
    private $age;

    public function __construct($name, $age) {
      $this->setName($name);
      $this->setAge($age);
    }

    public function setName($name) {
      $this->name = $name;
    }

    public function getName() {
      return($this->name);
    }

    public function setAge($age) {
      $this->age = $age;
    }

    public function getAge() {
      return($this->age);
    }

    public function checkIfPersonIsAdold() {
      if ($this->getAge() >= 18) {
        return(true);
      }

      else {
        return(false);
      }
    }

    public function getPersonInfo() {
      $personArray['name'] = $this->getName();
      $personArray['age'] = $this->getAge();
      return($personArray);
    }
  }

  $Person = new Person('Peter', 19);
  echo "<pre>";
    var_dump($Person->getPersonInfo());
  echo "</pre>";

  if ($Person->checkIfPersonIsAdold() === true) {
    echo "Deze is volwassen";
  }

  else if ($Person->checkIfPersonIsAdold() === false) {
    echo "Deze persoon is niet volwassen";
  }



?>
