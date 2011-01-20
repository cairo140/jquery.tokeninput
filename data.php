<?php

header('Content-Type: application/json');

$elements = "Actinium Aluminum Americium Antimony Argon Arsenic Astatine Barium Berkelium Beryllium Bismuth Bohrium Boron Bromine Cadmium Calcium Californium Carbon Cerium Cesium Chlorine Chromium Cobalt Copper Curium Darmstadtium Dubnium Dysprosium Einsteinium Erbium Europium Fermium Fluorine Francium Gadolinium Gallium Germanium Gold Hafnium Hassium Helium Holmium Hydrogen Indium Iodine Iridium Iron Krypton Lanthanum Lawrencium Lead Lithium Lutetium Magnesium Manganese Meitnerium Mendelevium Mercury Molybdenum Neodymium Neon Neptunium Nickel Niobium Nitrogen Nobelium Osmium Oxygen Palladium Phosphorus Platinum Plutonium Polonium Potassium Praseodymium Promethium Protactinium Radium Radon Rhenium Rhodium Rubidium Ruthenium Rutherfordium Samarium Scandium Seaborgium Selenium Silicon Silver Sodium Strontium Sulfur Tantalum Technetium Tellurium Terbium Thallium Thorium Thulium Tin Titanium Tungsten Ununbium Ununnilium Ununumium Uranium Vanadium Xenon Ytterbium Yttrium Zinc Zirconium";

$data = explode(' ', $elements);
$results = array();

if(array_key_exists('q', $_GET) && $_GET['q']) {
  $t = count($data);
  for($i = 0; $i < $t; $i++) {
    $v = $data[$i];
    if(stripos($v, $_GET['q']) !== false) {
      $results[$i] = $v;
    }
  }
} else {
  $results = $data;
}

echo '[';

foreach($results as $key => $result) {
  echo "{\"id\":$key,\"name\":\"$result\"}";
}

echo ']';
