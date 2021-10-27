<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class Controller extends BaseController
{
    public static $images = array("https://storage.googleapis.com/taller2-images/image1.png",
        "https://storage.googleapis.com/taller2-images/image2.png",
        "https://storage.googleapis.com/taller2-images/image3.png",
        "https://storage.googleapis.com/taller2-images/image4.png",
        "https://storage.googleapis.com/taller2-images/image5.png",
        "https://storage.googleapis.com/taller2-images/image6.png",
        "https://storage.googleapis.com/taller2-images/image7.png",
        "https://storage.googleapis.com/taller2-images/image8.png",
        "https://storage.googleapis.com/taller2-images/image9.png",
        "https://storage.googleapis.com/taller2-images/image10.png",
        "https://storage.googleapis.com/taller2-images/image11.png",
        "https://storage.googleapis.com/taller2-images/image12.png",
        "https://storage.googleapis.com/taller2-images/image13.png",
        "https://storage.googleapis.com/taller2-images/image14.png",
        "https://storage.googleapis.com/taller2-images/image15.png",
    );

    public function index()
    {
        $numberOfImages = 15;
        $randomNumber = (rand(0, ($numberOfImages-1)));
        $randomImage = Controller::$images[$randomNumber];
        return response("<img src=\"".$randomImage."\"> server_ip = ".gethostbyname((gethostname()))) ;
    }
}
