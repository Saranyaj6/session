<?php
interface Fruits{
    public function Fruits_categories();
}
abstract class Fruits_categories implements Fruits{
    function __construct($type,$taste,$availability,$nature) {
        $this->type = $type;
        $this->taste = $taste;
        $this->availability = $availability;
        $this->nature = $nature;
    }
    public function Fruits_categories()
    {
        echo "Fruits Categories<br><br>";
        echo $this->type . "<br>";
        echo $this->taste . "<br>";
        echo $this->availability . "<br>";
        echo $this->nature . "<br><br><br>";
    }
    abstract public function Fruit_Type();
    abstract public function Fruit_Taste();
    abstract public function Fruit_Availability();
    abstract public function Nature();
}

class fruits_details extends Fruits_categories {
    public function Fruit_Type(){
        echo $this->type."<br>";
        echo "Berries<br>";
        echo "Citrus fruit<br>";
        echo "Tropical fruit<br>";
        echo "Stone fruit<br>";
        echo "Pome fruit<br><br>";
    }
    public function Fruit_Availability()
    {
        echo $this->availability."<br>";
        echo "Seasonal<br>";
        echo "Year-round<br><br>";
    }
    public function Fruit_Taste()
    {
        echo $this->taste."<br>";
        echo "Sweet<br>";
        echo "Sour<br>";
        echo "Tart<br><br>";
    }
    public function Nature()
    {
        echo $this->nature."<br>";
        echo "Fresh<br>";
        echo "Dried<br>";
        echo "Canned<br><br>";
    }
}

$fruits = new fruits_details('Fruit Types:','Fruit Taste:','Fruit Availability:','Fruit Nature:');
$fruits->Fruits_categories();
$fruits->Fruit_Type();
$fruits->Fruit_Availability();
$fruits->Fruit_Taste();
$fruits->Nature();
?>
