<?php

namespace App\Controller; 

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
      public function login()
      {
          return new Response("Coucou");
      }
      public function register()
      {
      }
      
      public function postlogin()
      {
          $tab = array("toto" => 22, "tata" => 11);
        return new Response(json_encode($tab));
      }
    
      public function postregister()
      {
      }
}