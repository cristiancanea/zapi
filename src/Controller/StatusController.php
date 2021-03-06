<?php

namespace App\Controller;


use App\Entity\Status;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StatusController
{

    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager) {

        $this->entityManager = $entityManager;
    }
    /**
     * @Route(
     *     name="api-status",
     *     path="/api/status",
     *     methods={"GET"}
     * )
     */
    public function __invoke()
    {
        $status = $this->entityManager->getConnection() ? 'up' : 'down';
        return new Response($status);
    }
}