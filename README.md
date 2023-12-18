# PHP Namespace:
In PHP, namespaces are a way to encapsulate items, such as classes, functions, and constants, to avoid naming conflicts between different parts of your code or between different libraries. Namespaces were introduced in PHP 5.3. Here's a basic guide on how to create and use namespaces in PHP:

# Defining a Namespace:
Developed a library called "MyLibrary" within the namespace "Common\Library."

# Utilizing Namespaces:

## Using the Fully Qualified Namespace:

    - $obj =  new \Common\Library\MyLibrary();
    - echo $obj->show();
    - echo \Common\Library\someFunction();
    - echo \Common\Library\SOME_CONSTANT;

## Using the use Statement:

    - use \Common\Library\MyLibrary;
    - use function \Common\Library\someFunction;
    - use const \Common\Library\SOME_CONSTANT;

    - $obj = new MyLibrary();
    - echo $obj->show();
    - echo someFunction();
    - echo SOME_CONSTANT;

## Using Aliases:
    - use \Common\Library\MyLibrary as MyLib;
    - use function \Common\Library\someFunction as myFunction;
    - use const \Common\Library\SOME_CONSTANT as MY_CONSTANT;

    - $obj = new MyLib();
    - echo $obj->show();

    - echo myFunction();
    - echo MY_CONSTANT;