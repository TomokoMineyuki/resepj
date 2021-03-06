<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Area;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '東京都',
        ];
        $area  = new Area;
        $area->fill($param)->save();
        
        $param = [
            'name' => '大阪府',
        ];
        $area  = new Area;
        $area->fill($param)->save();
        
        $param = [
            'name' => '福岡県',
        ];
        $area  = new Area;
        $area->fill($param)->save();
    }
}
