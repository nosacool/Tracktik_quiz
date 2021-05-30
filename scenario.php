<?php
require_once('Console.php');
require_once('Controller.php');
require_once('Television.php');
require_once('Microwave.php');

$totalCost = 0; // Initial Cost as 0
//New Item Console
$console = New Console(); // Initialize 1st Console
$console->setPrice(400); // Setting Console Price 


$consoleController_1 = New Controller(); //Initialize 1st Console Controller 
$consoleController_1->setPrice(20); // Sets 1st Console Controller Price
$consoleController_1->setWired('remote'); // Sets Console Controller to be Remote

$console->addExtras($consoleController_1); //Adding 1st Console Controller as an Extra to Console 
//echo "Console costs: ".$console->getPrice().'\n';

$consoleController_2 = New Controller(); //Initialize 2nd Console Controller 
$consoleController_2->setPrice(20); // Sets 2nd Console Controller Price
$consoleController_2->setWired('remote'); // Sets 2nd Console Controller to be Remote

$console->addExtras($consoleController_2); //Adding 2nd Console Controller as an Extra to Console 
//echo "Console costs: ".$console->getPrice().'\n';

$consoleController_3 = New Controller(); //Initialize 3rd Console Controller 
$consoleController_3->setPrice(30); // Sets 3rd Console Controller Price
$consoleController_3->setWired('wired'); // Sets 3rd Console Controller to be Wired

$console->addExtras($consoleController_3); //Adding 3rd Console Controller as an Extra to Console 
//echo "Console costs: ".$console->getPrice().'\n';


$consoleController_4 = New Controller(); //Initialize 4th Console Controller 
$consoleController_4->setPrice(40); // Sets 4th Console Controller Price
$consoleController_4->setWired('wired'); // Sets 4th Console Controller to be Wired

$console->addExtras($consoleController_4); //Adding 4th Console Controller as an Extra to Console 
//echo "Console costs: ".$console->getPrice().'\n';


$totalCost+=$console->getPrice(); // Getting the Total Price of Console and Adding it to totalPrice

//New Item 1st Television
$television_1 = New Television(); //Initialize 1st Television Object 
$television_1->setPrice(300); //Sets 1st Television price



$television1Controller1 = New Controller(); //Initialize 1st Television 1st Controller
$television1Controller1->setPrice(10); //Sets Price for 1st Television 1st Controller
$television1Controller1->setWired('remote'); //Sets 1st Television 1st Controller to be Remote

$television_1->addExtras($television1Controller1); //Adding 1st Controller as an Extra to Television_1 
print_r($television_1);
$television1Controller2 = New Controller(); //Initialize 1st Television 2nd Controller
$television1Controller2->setPrice(20); //Sets Price for 1st Television 2nd Controller
$television1Controller2->setWired('remote'); //Sets 1st Television 2nd Controller to be Remote

$television_1->addExtras($television1Controller2); //Adding 2nd Controller as an Extra to Television_1 
$totalCost+=$television_1->getPrice(); // Getting Total Price of Television 1 and Adding it to totalPrice
// New Item 2nd Television

$television_2 = New Television(); //Initialize 2nd Television Object 
$television_2->setPrice(500); //Sets 2nd Television price

$television2Controller1 = New Controller(); //Initialize 2nd Television 1st Controller
$television2Controller1->setPrice(30); //Sets Price for 2nd Television 1st Controller
$television2Controller1->setWired('remote'); //Sets 2nd Television 1st Controller to be Remote

$television_2->addExtras($television2Controller1); //Adding 1st Controller as an Extra to Television_2 
$totalCost+=$television_2->getPrice(); // Getting Total Price of Television 2 and Adding it to totalPrice
//New Item - Microwave

$microwave = New Microwave(); //Initialize Microwave Object
$microwave->setPrice(5); //Sets Microwave Price
$totalCost+=$microwave->getPrice(); // Getting Total Price of Microwave and Adding it to totalPrice


$allItems = New ElectronicItems([$console,$television_1,$television_2,$microwave]); //Initialize an ElectronicItems Object with All 4 Items

$sortedAllItems = $allItems->getSortedItems('price'); // Sorting Items with Price in Ascending Order

print_r($sortedAllItems); // Printing out sorted Items
echo $totalCost."\n"; // Printing out the Total Cost

/* QUESTION 2 That person's friend saw her with her new purchase and asked her how much the
console and its controllers had cost her. Give the answer. */

$itemsOfOneType = $allItems->getItemsByType('console'); // Function returns an array of ElectronicItem with only type of Item Specified ('console')
$itemsOfOneTypeTotalCost = 0; 
foreach ($itemsOfOneType as $itemOfOneType){
    $itemsOfOneTypeTotalCost+= $itemOfOneType->getPrice();
}

echo $itemsOfOneTypeTotalCost."\n";
?>