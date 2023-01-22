<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController extends AbstractController
{
    protected $response = [];

    protected function setReponse(object $respnse)
    {
        $this->response = $respnse->getResponseStructure();
    }

    protected function getReponse(): JsonResponse
    {
        return $this->json($this->response);
    }
}
