<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28/03/2017
 * Time: 12:08
 */

namespace AppBundle\Controller;

use AppBundle\Entity\LecturerRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LecturerController extends Controller
{
    /**
     * @Route("/lecturers/list")
     */
    public function listAction(Request $request)
    {
        $lecturerRepository = new LecturerRepository();
        $lecturers = $lecturerRepository->getAll();

        $argsArray = [
            'lecturers' => $lecturers
        ];

        $templateName = 'lecturers/list';
        return $this->render($templateName . '.html.twig', $argsArray);
    }
}