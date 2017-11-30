<?php
  interface CarInterface {

    /**
     * We set our car
     * @param [string] $brand [The brand of our car]
     * @param [string] $model [The model of our car]
     * @param string $color [The color of our car, by default it is green]
     * @return void
     */
    public function __construct($brand, $model, $color = 'green');

    /**
     * Gets the info from our car
     * @return [arr] [A array with the information of our car]
     */
    public function getInfo();

    /**
     * Sets the type of fuel of our car
     * @param [string] $fuel [The type of fuel in our car]
     */
    public function setFuel($fuel);

    /**
     * Gets the fuel of our car
     * @return [string] [The fuel of our car]
     */
    public function getFuel();

    /**
     * Sets the color of our car
     * @param [string] $color [description]
     * @return [boolean] [If we don't have that color, we return false]
     */
    public function setColor($color);

    /**
     * Gets the color of our car
     * @return [string] [The color of our car]
     */
    public function getColor();

  }

  class Car implements CarInterface {

    private $brand;
    private $model;
    private $fuel;
    private $color;

    /**
     * Runs when the script is defined
     * @param [string] $brand [The brand of the car]
     * @param [string] $model [The model of the car]
     * @param string $color [The color of the car]
     */
    public function __construct($brand, $model, $color = 'green') {
      $this->brand = $brand;
      $this->model = $model;
      $this->color = $this->setColor($color);
    }

    /**
     * Returns the car info in a indexed array
     * @return [arr] [The information about the car]
     */
    public function getInfo() {
      $carArray['brand'] = $this->brand;
      $carArray['model'] = $this->model;
      $carArray['fuel'] = $this->fuel;
      $carArray['color'] = $this->color;
      return($carArray);
    }

    public function setFuel($fuel) {
      $this->fuel = $fuel;
    }

    public function getFuel() {
      return($this->fuel);
    }

    /**
     * Sets the color of the car
     * @param [string] $color [The color we want to use]
     */
    public function setColor($color) {
      switch ($color) {
        case 'green':
          $this->color = $color;
          break;
        case 'blue':
          $this->color = $color;
          break;
        case 'red':
          $this->color = $color;
          break;

        default:
          return(false);
          break;
      }
    }

    /**
     * Gets the color from the car
     * @return [string] [The color of the car]
     */
    public function getColor() {
      return($this->color);
    }


    /**
     * checks if a car is durable for the enforment
     * @return [boolean] [If it is durable we return true]
     */
    public function checkIfCarIsDurable() {
      if ($this->fuel == 'diesel' || $this->fuel == 'Diesel') {
        return(false);
      }

      else {
        return(true);
      }
    }
  }

  $mustang = new Car('Ford', 'Mustang');
  $mustang->setColor('Pink');
  $mustang->setFuel('Eletric');

  // $Engine = new Engine();
  // $Engine->startEngine();
  echo "<pre>";
    var_dump($mustang);
  echo "</pre>";


  switch ($mustang->checkIfCarIsDurable()) {
    case true:
      echo "Onze auto is duurzaam";
      break;
    case false:
      echo "Onze auto is niet duurzaam";
      break;
  }




?>
