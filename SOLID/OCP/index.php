<?php

echo '----->(start) Open Close Responsibility Principle <------'.'</br></br>';

class CalculateAreaNotFollowOCP {
    public function handle($type, $size)
    {
        if ($type == "circle"){
            return $size * $size * 3.14;
        }elseif ($type == "square"){
            return  $size * $size;
        }
    }
}


echo '----->Not Follow Open Close Responsibility Principle <------' . '</br>';
echo (new CalculateAreaNotFollowOCP)->handle("circle", 2);
echo '</br>'.'-----------------------------------------------------';
echo '</br>';


//----------------------------------------------------------------------------------\\

interface Shape
{
    public function area();
}

class Circle implements Shape
{
   private $size;
    public function __construct($size)
    {
        $this->size = $size;
    }

    public function area(){
        return $this->size * $this->size * 3.14;
    }
}

class Square implements Shape
{
    private $size;
    public function __construct($size)
    {
        $this->size = $size;
    }

    public function area(){
        return $this->size * $this->size;
    }
}


class CalculateAreaOCP
{
    public function __construct()
    {
    }

    public function handle(Shape $shape){
        return $shape->area();
    }
}


echo '----->Follow Open Close Responsibility Principle <------' . '</br>';
$circle = new Circle(2);
$calculate = new CalculateAreaOCP();
echo $calculate->handle($circle);
echo '</br>'.'-----------------------------------------------------';
echo '</br>';



echo '</br></br>'.'----->(end) Open Close Responsibility Principle <------';

