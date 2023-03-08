<?php

namespace App\Controller;

namespace App\Controller;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarCharts;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use App\Entity\Don;
use App\Entity\Event;
use App\Form\DonType;
use App\Repository\DonRepository;
use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class StatController extends AbstractController
{
    #[Route('/stat', name: 'stat')]
    public function chartAction()
    {
        $dons = $this->getDoctrine()->getRepository(Don::class)->findAll();

        $data = array();

        foreach ($dons as $blog) {
            $type = $blog->getNom();


            if (!isset($data[$type])) {
                $data[$type] = array(
                    'count' => 0,
                    'ids' => array()
                );
            }


            $data[$type]['count']++;
            $data[$type]['id'][] = $blog->getId();
        }


        return $this->render('don/stat.html.twig', array(
            'data' => $data, 'dons' => $dons
        ));
    }
}
