<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController
{
  /**
   * @Route("/")
   */
  public function rescueAction()
  {
    $rando = rand(10,99);

    return new JsonResponse('{[something: '.$rando.']}');
  }
}