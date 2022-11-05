# PHP Level Up

PHP stands for Hypertext Preprocessor and it an open source server-side scripting language, meaning that it is executed on the server not in the browser. A PHP script is executed on the server and the plain HTML result sent back to the browser.

### What can PHP do?

- PHP can generate dynamic page content
- PHP can create, open, read, write, delete, and close files on the server
- PHP can collect form data
- PHP can send and receive cookies
- PHP can add, delete, modify data in your database
- PHP can be used to control user-access
- PHP can encrypt data

### PHP Installation

- Install a web server like xampp and start apache and mysql
- Make sure your php project folder is in the **xampp** directory specifically in the **htdocs**

### PHP syntax

```php
<?php
// code
?>
```

**Note:**

- PHP statements end with a semicolon `(;)`.
- PHP Keywords are not case-sensitive
- However, all variable names are case-sensitive!

### PHP Variables

Variables are containers for storing information. We declare variable with the `$` sign, followed by the name of the variable

e.g:

```php
<?php
$fullName = "John Niyontwali";
?>
```

### PHP Variables Scope

The scope of a variable is the part of the script where the variable can be referenced/used. PHP has three different variable scopes

- local
- global
- static

##### Variables with Global Scope

Variables declared outside a function, once called inside a function they will generate an error eg, but when called outside the function they will not generate an error

```php
 <?php
  $x = 5;
  function myTest()
  {
    echo $x;
  }
  ?>
```

##### Variables with Local scope

A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:

**Note:** To access a global variable from within a function we use the _global_ keyword before the variable and inside the function
e.g

```php
<?php
$x = 5;

function myTest() {
  global $x;
  echo $x;
}

myTest();
echo $y; // outputs 15
?>
```

###### PHP Global Variable Array

PHP has all its global variables stored in an array called `$GLOBALS[index]`. The index holds the name of the variable. This array can be accessed from within a function and can be used to update variables directly.

##### Static Scope

Normally when a function is executed, all of its variables are deleted.

However, sometimes we want to use tht local variable hence we might not want it not to be deleted and this is where **static** keyword comes.

eg.

```php
<?php
function myNum() {
  static $x = 0;
  echo $x;
  $x++;
}

myNum();
myNum();
myNum();
?>
```

### PHP Data Types

Variables can store data of different types. PHP supports the following data types

- String
- Integer
- Float (also called double or decimal points)
- Boolean
- Object
- Null
- Resource

**Notes**:

- If you want to return the data type of a variable use **var_dump()** function
- PHP array can be represented in one of the following two ways but the second one is more preferrably
- if a variable is created without a value, it is automatically assigned a value of NULL.

```php
<?php
 $cars = array("Bentley", "Toyota")
?>
```
```php
<?php
 $cars = ["Bentley", "Toyota"]
?>
```
###### PHP Object
Classes and objects are the two main aspects of OOP. A class is a template for objects, and an object is an instance of a class. When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
e.g
```php
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>
```

### Strings' Methods
1. strlen() - Returns the length of a string
2. str_word_count() - counts the number of words in a string
3. strrev() - reverse a string
4. strpos("string", "text") - search for a text within a string and returns a boolean
5. str_replace("word to replace", "word that will replace", "string") - replace text within a string

### Numbers' Methods
1. PHP_INT_MAX - largest integer supported
2. PHP_INT_MIN - smallest integer supported
3. PHP_INT_SIZE - size of an integer in bytes
4. is_int() or is_integer() or is_long
5. is_float() or is_double()
6. is_finite() and is_infinite() - A numeric value that is larger than PHP_FLOAT_MAX is considered infinite
7. NaN is a Not a Number and this shows up when we use impossible mathematical operations. is_nan() function is used to check if a value is not a number. 
8. is_numberic()- this checks if a value is number or a string
9. (int)$varible_name or (integer)$variable or intval() - this casts a numerical value into an integer
