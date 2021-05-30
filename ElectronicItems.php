<?php
require_once ('ElectronicItem.php');
class ElectronicItems
 {
    
 private $items = array();

 public function __construct(array $items)
 {

 $this->items = $items;
 }

 /**
 * Returns the items depending on the sorting type requested
 * @params type :- accepts a string type
 * @return array
 */
 public function getSortedItems($type)
 {

 $sorted = array();
 foreach ($this->items as $item)
 {

 $sorted[($item->$type * 100)] = $item;
 }
 
  ksort($sorted, SORT_NUMERIC);
  return (array_values($sorted)); // return the array_values of sorted items according to the type
 }

 /**
 *
 * @param string $type
 * @return array
 */
 public function getItemsByType($type)
 {

 if (in_array($type, ElectronicItem::$types))
 {

 $callback = function($item) use ($type)
 {

 return $item->getType() == $type;  // Changed to get the Type of Item with Function getType()
 };

 $items = array_filter($this->items, $callback);
 return $items; 
 }

 return false;
 }
 }