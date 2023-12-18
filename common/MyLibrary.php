<?php

namespace Common\Library;

//class in namespace
class MyLibrary
{

    public function __construct()
    {
    }
    public function show()
    {
        return "Called show ";
    }
}

//function in namespace
function someFunction()
{
    return "Called someFunction ";
}

//constant in namespace
const SOME_CONSTANT = 50;
