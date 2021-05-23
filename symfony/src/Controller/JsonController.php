<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class JsonController extends AbstractController
{
    /**
     * @Route("/api/get", methods={"GET"})
     * @return JsonResponse
     */
    public function getJson(): JsonResponse
    {
        $data = [
            'id' => '1',
            'name' => 'name',
            'method' => 'cash',
            'status' => 'paid',
            'time' => '2021-05-13 17:34:21'
        ];

        return $this->json($data);
    }

}