<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 28/03/2017
 * Time: 12:08
 */

namespace AppBundle\Controller;

use AppBundle\Entity\StudentRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @Route("/admins/list")
     */
    public function listAction(Request $request)
    {
        $adminRepository = new AdminRepository();
        $admins = $adminRepository->getAll();

        $argsArray = [
            'admins' => $admins
        ];

        $templateName = 'admins/list';
        return $this->render($templateName . '.html.twig', $argsArray);
    }
}