<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
       // return $this->render('home/index.html.twig', [
       //     'controller_name' => 'HomeController',
       //     "users" =>[
       //     "Nom" => "Bob",
       //     "Prenom" => "Patrick",
       //     "Avatar" => "https://i.skyrock.net/1701/75981701/pics/photo_75981701_1.jpg",
       //    "Image" => "assets/static/images/500.png",]
       //]);
        return $this->render('offline/signin.html.twig');
    }
}
