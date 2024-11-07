<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Listing;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $addresses = [
            "201 Alfred Street, Timmins, ON, Canada, P0N1C0",
            "386 Cedar Street, Timmins, ON, Canada, P4N6J9",
            "568 Spruce Street, Timmins, ON, Canada, P4N6P2",
            "171 Fourth Avenue, Timmins, ON, Canada, P0N1C0",
            "211 Dixon Street, Timmins, ON, Canada, P0N1C0",
            "144 Shirley Street, Timmins, ON, Canada, P4R1C1",
            "99 Second Street, Kirkland Lake, ON, Canada, Lake",
            "143 Picadilly Circle, Iroquois Falls, ON, Canada, P0K1E0",
            "97 Federal Street, Kirkland Lake, ON, Canada, P2N1G1",
            "126 Carter Boulevard, Temiskaming Shores, ON, Canada, P0J1R0",
            "424 Belanger Avenue, Timmins, ON, Canada, P4N2W6",
            "1284 Park Avenue, Timmins, ON, Canada, P4R1L8",
            "285 Balsam Street, Timmins, ON, Canada, P4N2E5",
            "12 Queen Street, Kirkland Lake, ON, Canada, P2N2R1",
            "387 Oak Avenue, Timmins, ON, Canada, P4N4T6",
            "303 Poplar Avenue, Timmins, ON, Canada, P4N4S2",
            "178 Elm Street, Timmins, ON, Canada, Timmins",
            "63 Notre Dame Place, Timmins, ON, Canada, P4N8R8",
            "791 2nd Concession Road, Norfolk, Norfolk, ON, Canada, N4G4G7",
            "14 Hillcrest Drive, Kirkland Lake, ON, Canada, P2N3M4",
            "167 Montgomery Avenue, Timmins, ON, Canada, P4N3G5",
            "577 University Street, Timmins, ON, Canada, P4N5J4",
            "42 Woods Street, Kirkland Lake, ON, Canada, P2N3B8",
            "1217 Ferguson Road, Timmins, ON, Canada, P0N1K0",
            "1059 Michener Boulevard, Timmins, ON, Canada, P0N1K0",
            "36 Hazel Street, Kapuskasing, ON, Canada, P5N2Z6",
            "816 Mcclinton Drive, Timmins, ON, Canada, P4N4P8",
            "120 Brunetville Road, Kapuskasing, ON, Canada, P5N2G8",
            "216 Princess Street, Timmins, ON, Canada, P0N1C0",
            "368 Cherry Street, Timmins, ON, Canada, P4N6W7",
            "9 Bogey Drive, Timmins, ON, Canada, P4N8R7",
            "305 Ann Avenue, Timmins, ON, Canada, P4N4V1",
            "91 Fourth Avenue, Timmins, ON, Canada, P0N1G0",
            "4 Bunny Glen Drive, Niagara-on-the-lake, ON, Canada, L0S1P0",
            "427 Oak Avenue, Timmins, ON, Canada, P4N4T7",
            "133 New Circle Place, Iroquois Falls, ON, Canada, P0K1E0",
            "367 Daytona Drive, Fort Erie, ON, Canada, L2A4Y6",
            "336 Renda Street, Kingston, ON, Canada, K7M5X8",
            "5168 Third Avenue, Niagara Falls, ON, Canada, L2E4M4",
            "4446 Morrison Street, Niagara Falls, ON, Canada, L2E2B3",
            "10637 Morris Road, Niagara Falls, ON, Canada, L3B5N4",
            "922 Ruby Avenue, Fort Erie, ON, Canada, L2A5Z5",
            "38 Maple Street, St. Catharines, ON, Canada, L2R2A9",
            "10571 Lakeshore Road, Wainfleet, ON, Canada, L3K5V4",
            "50460 Phillips Road, Wainfleet, ON, Canada, L0S1V0",
            "317 Lakeshore Road, St Catharines, ON, Canada, L2M1S1",
            "63 Stefanie Crescent, Welland, ON, Canada, L3C6X8",
            "196 Timcor Crescent, Timmins, ON, Canada, P4R1C7",
            "20 King Street, Fort Erie, ON, Canada, L2A3Z3",
            "3816 Ryan Avenue, Fort Erie, ON, Canada, L0S1B0",
            "36 Alexandra Boulevard, St Catharines, ON, Canada, L2P1J9",
            "135 Concession Road, Fort Erie, ON, Canada, L2A4G8",
            "277 Elm Street, Timmins, ON, Canada, P4N6B1",
            "13167 Lakeshore Road, Wainfleet, ON, Canada, L0S1V0",
            "7353 Lakewood Crescent, Niagara Falls, ON, Canada, L2G7T1",
            "2206-701 Geneva Street, St Catharines, ON, Canada, L2N7H9",
            "215 Hellems Avenue, Welland, ON, Canada, L3B3B6",
            "5406 Ontario Avenue, Niagara Falls, ON, Canada, L2E3S5",
            "18 Boese Court, St Catharines, ON, Canada, L2N7E7",
            "205 Mitchell Street, Port Colborne, ON, Canada, L3K1Y4",
            "114 Golden Boulevard, Welland, ON, Canada, L3B1J1",
            "62 Jarrow Road, St. Catharines, ON, Canada, L2M1B7",
            "1054 Lakeshore Road, Haldimand, Haldimand, ON, Canada, N0A1P0",
            "830 Brandy Court, Kingston, ON, Canada, K7M8J7",
            "7734 Cortina Crescent, Niagara Falls, ON, Canada, L2H3B5",
            "6413 Barker Street, Niagara Falls, ON, Canada, L2G1Y6",
            "3456 Wiltshire Boulevard, Niagara Falls, ON, Canada, L2J3E6",
            "51 Borden Trail, Welland, ON, Canada, L3C0H1",
            "74 Roblin Street, Timmins, ON, Canada, P4R1N2",
            "440 Buffalo Road, Fort Erie, ON, Canada, L2A5G5",
            "279 Lakeshore Road, St. Catharines, ON, Canada, L2M1R9",
            "307-264 Oakdale Avenue, St. Catharines, ON, Canada, L2P2K4",
            "0 Colborne Street, Welland, ON, Canada, L3B3P1",
            "192 Shoreview Drive, Welland, ON, Canada, L3B0H3",
            "1 Corbett Avenue, St. Catharines, ON, Canada, L2N5M3",
            "2806-50 Ordnance Street, Niagara, Toronto, ON, Canada, M6K0C9",
            "435 Bidwell Parkway, Fort Erie, ON, Canada, L2A5M4",
            "78 Leaside Drive, St. Catharines, ON, Canada, L2M4G5",
            "40 Biscayne Street, Kingston, ON, Canada, K7K7J9",
            "397 Victory Avenue, Welland, ON, Canada, L3B4Z8",
            "281 Birch Street, Timmins, ON, Canada, P4N6E7",
            "122 Inman Road, Dunnville, Haldimand, ON, Canada, N1A3B8",
            "8697 Pawpaw Lane, Niagara Falls, ON, Canada, L2H3S5",
            "101 Mitchell Street, Port Colborne, ON, Canada, L3K1X6",
            "2059 Camp Bickell Road, Iroquois Falls, ON, Canada, P0N1A0",
            "619 Pine Street, Dunnville, Haldimand, ON, Canada, N1A2M1",
            "5383 Huron Street, Niagara Falls, ON, Canada, L2E2K5",
            "1286 Joanisse Road, CLARENCE-ROCKLAND, Clarence-rockland, ON, Canada, K0A1N0",
            "115 Borden Trail, Welland, ON, Canada, L3B5X1",
            "6931 Frederick House Lake Road, Timmins, ON, Canada, P0N1A0",
            "560 Rosehill Road, Fort Erie, ON, Canada, L2A5M4",
            "42 Andrew Lane, Thorold, ON, Canada, L2V0E4"
        ];

        foreach ($addresses as $address) {
            Listing::create(['address' => $address]);
        }
    }
}
