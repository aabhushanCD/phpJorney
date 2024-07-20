<?php 

class Car {
    public $Model;
    public $Name;
    public $Power;

    // Constructor method
    function __construct($Model = null) {
        $this->Model = $Model;
    }

    function Run($speed) {
        return "This is running in $speed km/h.";
    }

    function getModel() {
        return "The Model name is " . $this->Model;
    }
}

$nano = new Car("Nano2024");
$nano->Name = "Nano";
$nano->Power = "85 HP"; // Assuming you want to set the power

$speed = $nano->Run(200);

echo($nano->Model);
echo("<br>");
echo($nano->Name);
echo("<br>");
echo($nano->Power);
echo("<br>");
echo($speed);
echo("<br>");
echo($nano->getModel());

?>
