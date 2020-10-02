<?php 

class Bicycle{

  var $brand;
  var $model;
  var $year;
  var $description;
  var $weight_kg;

  function name(){
    return 'Brand: ' . $this->brand . ', Model: ' . $this->model . ', Year: ' . $this->year;
  }

  function weight_lbs(){
    return $this->weight_kg * 2.2046226218;
  }

  function set_weight_lbs( $weight_lbs ){
    $this->weight_kg = floatval($weight_lbs) * 0.45359237;
  }

}

$class_methods = get_class_methods('Bicycle');
echo 'Class methods:'.implode(', ', $class_methods).'<br>';

$b1 = new Bicycle;

$b1->brand = 'Kona Bikes';
$b1->model = 'BMX';
$b1->year = 2019;
$b1->weight_kg = 22;

echo $b1->name().'<br>';

echo 'KG to LBS: ' . $b1->weight_lbs().'lbs<br>';

$b1->set_weight_lbs( 48.5016976796 );

echo $b1->weight_kg.'<br>';
echo $b1->weight_lbs();

?>