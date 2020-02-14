<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
Use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
      /**
     *@Route("/")
     */
  public function home()
  {
      $articles = ['Artcile1', 'Article 2','Article 3'];
    return  $this->render('articles/index.html.twig',['articles' => $articles]);  
  }
}

