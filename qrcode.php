<?php

    header('Content-Type: image/png');
    require_once "vendor/autoload.php";

    $qr = new Endroid\QrCode\QrCode();

    
        $dogrulama = (string)$_GET['text'];
        $qr->setText($dogrulama);
        $qr->setSize(200);
        $qr->setPadding(10);
        $qr->render();