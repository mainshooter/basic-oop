<?php

  require_once 'Car.class.php';

  class Engine extends Car {
    private $engineStatus;

    /**
     * Stops the engine when we are no longer driving
     */
    public function __destruct() {
      $this->stopEngine();
    }

    /**
     * Starts the engine
     */
    public function startEngine() {
      $this->engineStatus = true;
    }

    /**
     * Stops the engine
     */
    private function stopEngine() {
      $this->engineStatus = false;
    }
  }


?>
