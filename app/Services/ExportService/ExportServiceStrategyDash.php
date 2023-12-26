<?php

namespace App\Services\ExportService;

/**
 * Class ExportServiceStrategyDash
 * @package App\Services\ExportService
 */
class ExportServiceStrategyDash extends ExportServiceStrategyAbstract
{
    /**
     * @param $name
     * @param $value
     * @return string
     */
    protected function formatObjectToString($name, $value): string
    {
        return $name . ' - ' . $value;
    }
}