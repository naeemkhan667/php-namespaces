<?php
require_once('common\MyLibrary.php');

//Using the Fully Qualified Namespace:
    $obj =  new \Common\Library\MyLibrary();
    echo $obj->show();
    echo \Common\Library\someFunction();
    echo \Common\Library\SOME_CONSTANT;

//Using the use Statement:
    use \Common\Library\MyLibrary;
    use function \Common\Library\someFunction;
    use const \Common\Library\SOME_CONSTANT;

    $obj = new MyLibrary();
    echo $obj->show();
    echo someFunction();
    echo SOME_CONSTANT;


//Using Aliases:
    use \Common\Library\MyLibrary as MyLib;
    use function \Common\Library\someFunction as myFunction;
    use const \Common\Library\SOME_CONSTANT as MY_CONSTANT;

    $obj = new MyLib();
    echo $obj->show();

    echo myFunction();
    echo MY_CONSTANT;
?>