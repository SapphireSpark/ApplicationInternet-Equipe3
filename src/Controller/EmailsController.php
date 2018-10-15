<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;

class EmailsController extends AppController {

    public function index() {
        
        $email1 = 'michel.schreyer21@gmail.com';
        $email2 = 'progphp123@gmail.com';
        $email3 = 'bibliofun123@gmail.com';
        $email = new Email('default');
        $email->setTo($email1)->setSubject('Info pour milieux de stage')->send('Merci de mettre a jour les informations sur le site');
        $email->setTo($email2)->setSubject('Info pour milieux de stage')->send('Merci de mettre a jour les informations sur le site');
        $email->setTo($email3)->setSubject('Info pour milieux de stage')->send('Merci de mettre a jour les informations sur le site');
        
    }

}
?>

