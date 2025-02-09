<?php

echo '----->(start) Interface Segregation Principle <------'.'</br></br>';

interface WorkerNotISP
{
    public function eat();
    public function work();
}

class WorkerImpl implements WorkerNotISP
{
    public function eat(){

    }
    public function work(){
    }
}


echo '----->Not Follow Interface Segregation Principle <------' . '</br>';
echo '</br>'.'-----------------------------------------------------';
echo '</br>';


//----------------------------------------------------------------------------------\\

interface Workable
{
    public function work();
}

interface Eatable
{
    public function eat();
}

class WorkerImplISP implements Workable, Eatable
{
    public function eat(){

    }

    public function work(){

    }
}

echo '----->Follow Interface Segregation Principle <------' . '</br>';
echo '</br>'.'-----------------------------------------------------';
echo '</br>';



echo '</br></br>'.'----->(end) Liskov Substitution Principle <------';

