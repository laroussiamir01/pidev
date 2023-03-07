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
    #[Route('/stat',name :'stat')]
    public function stat(DonRepository $repository): Response
    {
        $don = $repository->statisti();
        $data = [['rate', 'event']];
        foreach ($don as $nb) {
            $data[] = array($nb['montant'], $nb['rec']);
        }
        $bar = new BarChart();
        $bar->getData()->setArrayToDataTable(
            $data
        );

        $bar->getOptions()->getTitleTextStyle()->setColor('#07600');
        $bar->getOptions()->getTitleTextStyle()->setFontSize(50);
        return $this->render('don/stat.html.twig', array('barchart' => $bar, 'nbr' => $don));
    }
}
