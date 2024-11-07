<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class CsvExportService
{
    /**
     * Export data to a CSV file.
     *
     * @param array $data
     * @param string $filename
     * @return string
     */
    public function exportToCsv(array $data): string
    {
        $fileName = 'result.csv';
        $filePath = storage_path('app/public/' . $fileName);
        $handle = fopen($filePath, 'w');
        
        if (!$handle) {
            return response()->json(['error' => 'Failed to create the CSV file.'], 500);
        }
        
        fputcsv($handle, [
            'Listing Address', 'Client Address', 'Exact Match', 'Levenshtein Distance',
            'Similarity Percentage', 'Jaro-Winkler Score', 'Soundex Match', 'Composite Score', 'Match'
        ]);
        
        foreach ($data as $row) {
            fputcsv($handle, $row);
        }
        
        fclose($handle);

        if (!file_exists($filePath)) {
            return response()->json(['error' => 'File was not generated.'], 500);
        }

        return $filePath;
    }
}
