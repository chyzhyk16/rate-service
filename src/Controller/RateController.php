<?php

namespace App\Controller;

use App\Service\RateAdapters\KunaAdapter;
use App\Service\RateService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RateController extends AbstractController
{
    /**
     * @Route("/btcRate", name="btcRate")
     */
    public function btcRate(KunaAdapter $adapter): Response
    {
        return $this->json([
            'btcRate' => $adapter->getRate('btc', 'uah'),
        ]);
    }
}
