<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\Listing;
use App\Models\Client;

class AddressComparisonService
{
    public function compareAddresses(): array
    {
        $listings = Listing::all(); 
        $clients = Client::all();  

        $results = []; 

        foreach ($listings as $listing) {
            foreach ($clients as $client) {
               
                $listingNormalized = $this->normalizeAddress($listing->address);
                $clientNormalized = $this->normalizeAddress($client->address);

                $exactMatch = ($listingNormalized === $clientNormalized);

                $levenshteinDistance = levenshtein($listingNormalized, $clientNormalized);

                $similarity = similar_text($listingNormalized, $clientNormalized, $percent);

                $jaroWinklerScore = $this->jaroWinklerSimilarity($listingNormalized, $clientNormalized);

                $soundexMatch = (soundex($listingNormalized) === soundex($clientNormalized));

                $compositeScore = ($percent * 0.4) + ($jaroWinklerScore * 0.4) + (($soundexMatch ? 1 : 0) * 0.2);

                $results[] = [
                    'listing_address' => $listing->address,
                    'client_address' => $client->address,
                    'exact_match' => $exactMatch,
                    'levenshtein_distance' => $levenshteinDistance,
                    'similarity_percentage' => round($percent, 2),
                    'jaro_winkler_score' => round($jaroWinklerScore, 2),
                    'soundex_match' => $soundexMatch,
                    'composite_score' => round($compositeScore, 2),
                    'match' => $compositeScore > 0.8 
                ];
            }
        }

        return $results;
    }
    private function normalizeAddress($address)
    {
        $patterns = ['/ Street/', '/ Avenue/', '/ Blvd/', '/ Rd/', '/ St./', '/ Dr./'];
        $normalized = preg_replace($patterns, '', $address);
        return strtolower(trim($normalized));
    }

    private function jaroWinklerSimilarity($str1, $str2)
    {
        if (function_exists('jaro_winkler')) {
            return jaro_winkler($str1, $str2);
        }

        return 0.8; 
    }
}
