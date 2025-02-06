<?php

echo '----->(start) Liskov Substitution Principle <------'.'</br></br>';

class Bird
{
    function fly()
    {

    }
}

class PenguinNotLSP extends Bird
{
    function fly(){
        return "no fly";
    }
}



echo '----->Not Follow Liskov Substitution Principle <------' . '</br>';
echo (new PenguinNotLSP())->fly();
echo '</br>'.'-----------------------------------------------------';
echo '</br>';


//----------------------------------------------------------------------------------\\

class BirdNotFly
{
    public function swim()
    {

    }
}

class BirdFly
{
    public function fly()
    {

    }
}

class PenguinLSP extends BirdNotFly
{
    function swim(){
        return "penguin swimming";
    }
}


echo '----->Follow Liskov Substitution Principle <------' . '</br>';
echo (new PenguinLSP())->swim();
echo '</br>'.'-----------------------------------------------------';
echo '</br>';



echo '</br></br>'.'----->(end) Liskov Substitution Principle <------';

