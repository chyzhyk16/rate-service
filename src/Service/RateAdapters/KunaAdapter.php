<?php

namespace App\Service\RateAdapters;

class KunaAdapter implements RateAdapter
{
    /**
     * @var string
     */
    private $url = 'https://api.kuna.io/v3/tickers?symbols=';

    /**
     * @param string $from
     * @param string $to
     * @return string
     */
    public function getRate(string $from, string $to): string
    {
        try {
            $result = json_decode(file_get_contents($this->url . $from . $to))[0][1];
        } catch (\Exception $e) {
            $result = 'error';
        }
        return $result;
    }
}