<?php

namespace App\Http\Controllers;

use App\Services\ExportService\ExportServiceContext;
use App\Services\ExportService\ExportServiceStrategyDash;
use App\Services\ExportService\ExportServiceStrategyPipe;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $arrayData = [
            (object)array(
                'brandName' => 'Ford',
                'model' => 'Mustang',
                'modelDetails' => 'GT rest 2',
                'modelYear' => '2014',
                'productionYear' => '2013',
                'color' => 'Oxford White',
            ),
            (object)array(
                'brandName' => 'BMW',
                'model' => '520i',
                'modelDetails' => 'rest',
                'modelYear' => '2001',
                'productionYear' => '2001',
                'color' => 'Green',
            ),
            (object)array(
                'brandName' => 'KIA',
                'model' => 'Sportage',
                'modelDetails' => 'QL',
                'modelYear' => '2015',
                'productionYear' => '2019',
                'color' => 'White',
            ),
            (object)array(
                'brandName' => 'Hyundai',
                'model' => 'Tucson',
                'modelDetails' => '3 gen',
                'modelYear' => '2014',
                'productionYear' => '2020',
                'color' => 'Red',
            )
        ];

        $strategyFirst = new ExportServiceStrategyDash();
        $contextFirst = new ExportServiceContext($strategyFirst, $arrayData);
        var_dump($contextFirst->execute());

        $strategySecond = new ExportServiceStrategyPipe();
        $contextSecond = new ExportServiceContext($strategySecond, $arrayData);
        var_dump($contextSecond->execute());
    }
}
