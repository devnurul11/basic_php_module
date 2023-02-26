<?php
class Car {
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function get_make() {
        return $this->make;
    }

    public function set_make($make) {
        $this->make = $make;
    }

    public function get_model() {
        return $this->model;
    }

    public function set_model($model) {
        $this->model = $model;
    }

    public function get_year() {
        return $this->year;
    }

    public function set_year($year) {
        $this->year = $year;
    }

    public function display_info() {
        echo "Make: " . $this->make . "\n";
        echo "Model: " . $this->model . "\n";
        echo "Year: " . $this->year . "\n";
    }
}

// create obj.
$my_car = new Car("Toyota", "Corolla", 2015);

// display the car information
$my_car->display_info();

//set_make and set_model
$my_car->set_make("Honda");
$my_car->set_model("Civic");

// display information
$my_car->display_info();
