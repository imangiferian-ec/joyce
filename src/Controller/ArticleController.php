<?php
  namespace App\Controller;
  use Symfony\Component\HttpFoundation\Response;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
  use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

  class ArticleController extends AbstractController{

    /**
    * @Route("/")
    */
    public function homepage()
    {
        return new Response("Hello to this article");
    }

    /**
    * @Route("/news/{slug}")
    */
    public function show($slug)
    {
      $data['title'] = ucwords(str_replace('-', ' ', $slug));
      // return new Response(sprintf("Future Page Article: %s", $slug));
      return $this->render('articles/show.html.twig',$data);
    }
  }
