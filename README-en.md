---
modified: 2024-11-10T17:39:11.085Z
title: "Template "
---

# Template

A technical assessment of 9 questions about PHP programming fundamentals made for the internship program of the company Gaudium.

## About

**Level:** Intern
**Concepts:**

- Object-Oriented Programming

  - Encapsulation
  - Polymorphism
  - Abstract Classes and Interfaces

- PHP / Programming Basics

  - Passing parameters by reference
  - Static variables
  - Variable scope
  - Array manipulation functions
  - Do While vs While

- Database

  - Primary and foreign keys

- Software Testing
  - Manual testing

## Question 1

In object-oriented programming, what are the characteristics of `encapsulation`?

Select all the true alternatives.

a) It is implemented using public, protected, and private access modifiers.

b) The process of checking errors generated within the class itself.

c) Hiding the internal implementation details of a class.

d) Exposing only what is necessary for external use.

e) The creation of nested methods within the class itself.

**Answer:** `a, c, d`

## Question 2

Which of the following alternatives correctly describes the concept of `polymorphism` in object-oriented programming?

Select only one option

a) It is the ability of a function to perform arithmetic operations with different types of variables.

b) It is the ability of a class to inherit methods and properties from another class.

c) It is the technique that allows a class to have multiple instances at the same time in memory.

d) It allows an interface or method to be used to represent different types of objects that can respond differently to that method.

e) It is the concept of creating multiple constructors in the same class for different types of parameters.

**Answer:** `d)`

## Question 3

Regarding the use of `abstract classes` and `interfaces` in object-oriented programming, which of the following alternatives are correct?

Select all the options that apply

a) A class can inherit from an abstract class and implement one or more interfaces at the same time.

b) An interface can only define methods without implementation (in some modern languages, interfaces can have methods with default implementation).

c) An interface cannot be instantiated directly.

d) An abstract class can define methods with implementation.

e) A class can inherit from multiple abstract classes at the same time.

**Answer:** `a, b, c, d`

## Question 4

Consider the following PHP code. What will be the output when it is executed?

```php
<?php
function modifyArray(&$arr) {
  $arr[] = "new item";
}

$originalArray = ["first", "second"];
modifyArray($originalArray);
echo implode(", ", $originalArray);
```

**Answer:** `first, second, new item`

## Question 5

Consider the following PHP code. What will be the output when this code is executed?

```php
<?php
function test($a, &$b) {
  $a += 5;
  $b *= 2;
  return $a++ + $b;
}

$x = 10;
$y = 5;

$result = test($x, $y);
echo $result . " and " . $y;
```

**Answer:** `25 and 10`

## Question 6

Consider the following PHP code. What will be the output when this code is executed?

```php
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
```

**Answer:** `2`

## Question 7

In relational databases, which of the following alternatives correctly describes the main difference between a primary key and a foreign key?

Select only one option

a) The foreign key uniquely identifies each record in a table, while the primary key is used only to relate tables.

b) The primary key uniquely identifies each record in a table, while the foreign key creates a link between different tables.

c) The primary key allows duplicate values, while the foreign key must be unique in each row of the table.

d) The primary key is optional in relational databases, while the foreign key is mandatory for all tables.

e) The primary key can contain null values, while the foreign key does not allow null values.

**Answer:** `b)`

## Question 8

Which of the following alternatives correctly describes the main characteristic of manual testing in software development?

a) Manual testing ensures that the code is tested on all browsers and devices simultaneously.

b) Manual testing is performed automatically by scripts and tools, without the intervention of a tester.

c) Manual testing is exclusive for testing the security of the software.

d) Manual testing requires the tester to manually execute test cases, verifying the software's functionality without automation.

e) Manual testing is performed only after the software is in production.

**Answer:** `d)`

## Question 9

Which of the following alternatives is true about loops in PHP?

Select all the options that apply

a) The do...while loop always executes the code block at least once, regardless of the condition.

b) The for loop must always have a stopping condition.

c) The while loop may not be executed at all if the initial condition is false.

d) The foreach loop can only be used with indexed arrays.

e) The for loop cannot be nested inside another loop.

**Answer:** `a and c`
