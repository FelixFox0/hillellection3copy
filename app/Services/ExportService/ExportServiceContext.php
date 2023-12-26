<?php

namespace App\Services\ExportService;

/**
 * Class ExportServiceContext
 * @package App\Services\ExportService
 */
class ExportServiceContext
{
    /**
     * @var ExportServiceStrategyInterface
     */
    private $strategy;
    /**
     * @var array
     */
    private $collection;

    /**
     * ExportServiceContext constructor.
     * @param ExportServiceStrategyInterface $strategy
     * @param array $objects
     */
    public function __construct(ExportServiceStrategyInterface $strategy, array $objects)
    {
        $this->strategy = $strategy;
        $this->collection = $objects;
    }

    /**
     * @return array
     */
    public function execute(): array
    {
        foreach ($this->collection as $object){
            $this->strategy->setCollectionItem($object);
        }
        return $this->strategy->execute();
    }
}