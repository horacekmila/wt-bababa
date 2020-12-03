<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class pageController
 * @package App\Controller
 */
class pageController extends AbstractController
{
    /**
     * @return Response
     * @throws \Exception
     * @Route("/poslipole", name="pole")
     */
    public function pole(): Response
    {
        $array = [
             1 => "petr",
             2 => "karel",
             3 => "franta",
             4 => "adam",
        ];

        return $this->render('array.html.twig', [
            'array' => $array
        ]);
    }
    /**
     * @return Response
     * @throws \Exception
     * @Route("/poslipolevpoli", name="polevpoli")
     */
    public function polevpoli(): Response
    {
        $userArray =[
            1 =>array(
                "firstname" => "petr",
                "surname" => "novak",
            ),
            2 =>array(
                "firstname" => "karel",
                "surname" => "stary",
            ),
            3 =>array(
                "firstname" => "adam",
                "surname" => "pluhacek",
            )
        ];

        return $this->render('arrayInArray.html.twig', [
            'userArray' => $userArray
        ]);
    }
}