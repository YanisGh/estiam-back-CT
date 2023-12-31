<?php

namespace App\Controller;
use App\Document\CT;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ODM\MongoDB\DocumentManager;
use Psr\Log\LoggerInterface;
use Doctrine\ODM\MongoDB\Connection;


class ApiController extends AbstractController
{

    private $documentManager;
    //private $serializer;

    public function __construct(DocumentManager $documentManager) {
        $this->documentManager = $documentManager;
        //$this->serializer = $serializer;
    }

    #[Route('/api', name: 'app_api')]
    public function index(): Response
    {

        // dd($this->documentManager);
        return $this->render('api/index.html.twig', [
        'controller_name' => 'ApiController',
        ]);

    }
    //Erreur car JSON trop volumineux
    #[Route('/ctall', name: 'ct_all', methods:['GET'])]
    public function ctAll(): Response
    {
        $CT = $this->documentManager->getRepository(CT::class)->findAll();
        if ($CT) {
            return $this->json($CT);
        } else {
            return $this->json(["error" => " Not found"], 404);
        }
    }
    //Fonctionne
    #[Route('/ct/{id}', name: 'ct', methods:['GET'])]
    public function getById($id): Response
    {
        //$id = '6574ceb62818e8fe4e36e189';
        $CT = $this->documentManager->getRepository(CT::class)->find($id);
        if ($CT) {
            return $this->json($CT);
        } else {
            return $this->json(["error" => " Not found"], 404);
        }
    }

    #[Route('/ct/delete/{id}', name: 'ct_delete', methods:['DELETE'])]
    public function deleteById(DocumentManager $documentManager, $id): Response
    {
        // $id = '6574ceb62818e8fe4e36e189';
        $CT = $this->documentManager->getRepository(CT::class)->find($id);
        if ($CT) {
            return $this->documentManager->remove($CT);
        } else {
            return $this->json(["error" => $id." Not found"], 404);
        }
    }
    

}

