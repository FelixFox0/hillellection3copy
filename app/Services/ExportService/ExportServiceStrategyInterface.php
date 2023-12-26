<?php

namespace App\Services\ExportService;

use stdClass;

/**
 * Interface ExportServiceStrategyInterface
 * @package App\Services\ExportService
 */
interface ExportServiceStrategyInterface
{
    /**
     * @param stdClass $object
     */
    public function setCollectionItem(stdClass $object): void;

    /**
     * @return array
     */
    public function execute(): array;
}