<?php

namespace App\Service\RateAdapters;

interface RateAdapter
{
    /**
     * @param string $from
     * @param string $to
     * @return string
     */
    public function getRate(string $from, string $to): string;
}