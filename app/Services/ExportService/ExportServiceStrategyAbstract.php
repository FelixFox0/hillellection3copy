<?php

namespace App\Services\ExportService;

use stdClass;

/**
 * Class ExportServiceStrategyAbstract
 * @package App\Services\ExportService
 */
abstract class ExportServiceStrategyAbstract implements ExportServiceStrategyInterface
{
    /**
     * @var array
     */
    protected $collection = [];

    /**
     * @param $name
     * @param $value
     * @return string
     */
    abstract protected function formatObjectToString($name, $value): string;

    /**
     * @param stdClass $object
     */
    public function setCollectionItem(stdClass $object): void
    {
        $this->collection[] = $object;
    }

    /**
     * @return array
     */
    public function execute(): array
    {
        $text = '';
        foreach ($this->collection as $object) {
            foreach ($object as $name => $value) {
                $text .= $this->formatObjectToString($name, $value) . "\r\n";
            }
            $text .= '_______' . "\r\n";
        }

        return [
            'name' => last(explode('\\', get_class($this))) . '_' . date("d-m-Y") . '.txt',
            'text' => $text,
        ];
    }

}