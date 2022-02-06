<?php


class User{
    
    protected static $classname='三年级一班';
    protected $name;
    
    public function say()
    {
        return User::$classname.'的'.$this->getName();
    }
    public function setName(String $name)
    {
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }
    public static function getClassName(){
        return self::getClassName();
    }

             
 
}









$obj=new User;
$obj->setName('后盾人');
echo $obj->say();
echo '<hr>';
echo $obj->getName();
















































?>