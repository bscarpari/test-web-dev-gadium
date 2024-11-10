<?php
class Counter { 
    private static $count = -1;

    public function __construct() { 
        self::$count++;
    } 

    public static function getCount() { 
        return self::$count;
    }
}

$a = new Counter();
$b = new Counter();
$c = new Counter();

echo Counter::getCount();