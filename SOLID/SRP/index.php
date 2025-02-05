<?php

echo '----->(start) Single Responsibility Principle <------'.'</br></br>';



class SendProductToUserNotFollowSRP
{
    public function getUser()
    {
        return "A";
    }

    public function getProduct()
    {
        return "B";
    }
    public function handle()
    {
        $user    = $this->getUser();
        $product = $this->getProduct();
        return $user . " wants to product " . $product;
    }
}

echo '----->Not Follow Single Responsibility Principle <------' . '</br>';
echo (new SendProductToUserNotFollowSRP())->handle();
echo '</br>'.'-----------------------------------------------------';
echo '</br>';


//----------------------------------------------------------------------------------\\

class GetUser
{
    public function handle()
    {
        return "A";
    }
}

class GetProduct
{
    public function handle()
    {
        return "B";
    }
}

class SendProductToUserFollowSRP
{
    public function handle()
    {
        $user    = (new GetUser())->handle();
        $product = (new GetProduct())->handle();
        return $user . " wants to product " . $product;
    }
}

echo '----->Follow Single Responsibility Principle <------' . '</br>';
echo (new SendProductToUserFollowSRP())->handle();
echo '</br>'.'-----------------------------------------------------';
echo '</br>';


//-------------------------------------------------------------//


echo '</br></br>'.'----->(end) Single Responsibility Principle <------';

