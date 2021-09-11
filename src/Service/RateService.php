<?php

namespace App\Service;

use App\Service\RateAdapters\KunaAdapter;
use Exception;

class RateService
{

    /**
     * @param string $from
     * @param string $to
     * @return string
     */
    public function getRate(KunaAdapter $adapter, string $from, string $to): string
    {
        return $adapter->getRate($from, $to);
    }
}