<?php

namespace Database\Seeders;

use App\Models\Rows;
use App\Models\Seats;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RowsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ["VVIP", 'A', "B", "C", 'D', "E", "F", 'G', "H", "I"];
        $data = [];

        foreach ($names as $name) {
            if ($name === "VVIP") {
                for ($i = 1; $i <= 8; $i++) {
                    $data[] = [
                        'name' => $name,
                        'seat' => $name . ' ' . $i
                    ];
                }
            } else {
                for ($i = 1; $i <= 14; $i++) {
                    $data[] = [
                        'name' => $name,
                        'seat' => $name . $i
                    ];
                }
            }
        }

        DB::table('rows')->insert($data);
    }
}
