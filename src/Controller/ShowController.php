<?php

namespace App\Controller;

use App\Entity\VinylMix;
use App\Repository\VinylMixRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShowController extends AbstractController
{
  #[Route('/mix/{id}', name: 'app_mix_show')]
  public function show(VinylMix $mix): Response
  {
    return $this->render(
      'mix/show.html.twig',
      [
        'mix' => $mix
      ]
    );
  }
}
