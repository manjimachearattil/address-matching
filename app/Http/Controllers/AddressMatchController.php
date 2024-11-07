<?php

namespace App\Http\Controllers;

use App\Services\AddressComparisonService;
use App\Services\CsvExportService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AddressMatchController extends Controller
{
    protected $comparisonService;
    protected $exportService;

    public function __construct(AddressComparisonService $comparisonService, CsvExportService $exportService)
    {
        $this->comparisonService = $comparisonService;
        $this->exportService = $exportService;
    }

    /**
     * Compare addresses and export results to a CSV.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function compareAndExport()
    {
        $results = $this->comparisonService->compareAddresses();

        $filePath = $this->exportService->exportToCsv($results, 'results.csv');

        return Response::download($filePath);
    }
}
