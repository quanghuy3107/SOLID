<?php

echo '----->(start) Dependency Inversion Principle <------'.'</br></br>';

class EmailService {
    public function sendEmail()
    {
        return "Sending Email";
    }
}

class NotificationNotDIP
{
    private $emailService;
    public function __construct(
        EmailService $emailService
    )
    {
        $this->emailService = $emailService;
    }

    public function send(){
        return $this->emailService->sendEmail();
    }
}

echo '----->Not Follow Dependency Inversion Principle <------' . '</br>';
$emailService = new EmailService;
$notificationNotDip = new NotificationNotDIP($emailService);
echo $notificationNotDip->send();
echo '</br>'.'-----------------------------------------------------';
echo '</br>';


//----------------------------------------------------------------------------------\\


class EmailSend {
    public function send(){
        return "Sending Email";
    }
}

class SmsSend {
    public function send(){
        return "Sending SMS";
    }
}

class NotificationDIP
{
    private $serviceSend;
    public function __construct(
        $serviceSend
    )
    {
        $this->serviceSend = $serviceSend;
    }

    public function send(){
        return $this->serviceSend->send();
    }
}

echo '----->Follow Follow Dependency Inversion Principle <------' . '</br>';

$emailService = new EmailSend();
$notificationDIP = new NotificationDIP($emailService);
echo $notificationDIP->send() . '</br>';

$smsSend = new SmsSend();
$notificationDIP = new NotificationDIP($smsSend);
echo $notificationDIP->send();

echo '</br>'.'-----------------------------------------------------';
echo '</br>';



echo '</br></br>'.'----->(end) Liskov Substitution Principle <------';

