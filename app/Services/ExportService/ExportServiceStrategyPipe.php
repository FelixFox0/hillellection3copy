<?php

namespace App\Services\ExportService;

class ExportServiceStrategyPipe extends ExportServiceStrategyAbstract
{
    /**
     * @param $name
     * @param $value
     * @return string
     */
    protected function formatObjectToString($name, $value): string
    {
        return '|' . $this->prepareName($name) . '|' . $value . '|';
    }

    /**
     * @param string $name
     * @return string
     */
    private function prepareName(string $name): string
    {
        return mb_strtolower(implode(' ', preg_split('/(?<=[a-z])(?=[A-Z])/u', $name)));
    }
}