<?php
class User
{
    public $type;
}

class Admin
{
    public function greet()
    {
        return "hola glu glug lgu glu";
    }
}
$user = new User;
$user->type = new Admin;
echo $user->type->greet();