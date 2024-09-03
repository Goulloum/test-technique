<?php

namespace App\Controller;

use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TaskController extends AbstractController
{
    #[Route('/', name: 'app_task')]
    public function index(TaskRepository $taskRepository): Response
    {
        $tasks = $taskRepository->findAll();


        return $this->render('task/index.html.twig', [
            "tasks" => $tasks
        ]);
    }
}
