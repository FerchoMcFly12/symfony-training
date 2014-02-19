<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
  public function indexAction($name)
  {
    return $this->render(
      'AcmeHelloBundle:Hello:index.html.twig'
    );
  }

  public function aboutAction()
  {
    return $this->render(
      'AcmeHelloBundle:Hello:about.html.twig'
    );
  }

  public function blogAction()
  {
    return $this->render(
      'AcmeHelloBundle:Hello:blog.html.twig'
    );
  }
}
