<?php
// include
include "greet.php";
echo greet("sebas", "chupapimuñaño");

// require
require "greet.php";
echo greet("sebas", "chupapimuñaño");

//include_once o require_once // nos permite llamar a el atributo 1 sola vez aunque este se encuentre repetido en el codigo
require_once "greet.php";
echo greet("sebas", "chupapimuñaño");
include_once "greet.php";
echo greet("sebas", "chupapimuñaño");