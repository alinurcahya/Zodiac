<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZodiacTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zodiacs = [
            ['start_date' => '21-Mar', 'end_date' => '19-Apr', 'zodiac_name' => 'Aries'],
            ['start_date' => '20-Apr', 'end_date' => '20-May', 'zodiac_name' => 'Taurus'],
            ['start_date' => '21-May', 'end_date' => '20-Jun', 'zodiac_name' => 'Gemini'],
            ['start_date' => '21-Jun', 'end_date' => '22-Jul', 'zodiac_name' => 'Cancer'],
            ['start_date' => '23-Jul', 'end_date' => '22-Aug', 'zodiac_name' => 'Leo'],
            ['start_date' => '23-Aug', 'end_date' => '22-Sep', 'zodiac_name' => 'Virgo'],
            ['start_date' => '23-Sep', 'end_date' => '22-Oct', 'zodiac_name' => 'Libra'],
            ['start_date' => '23-Oct', 'end_date' => '21-Nov', 'zodiac_name' => 'Scorpio'],
            ['start_date' => '22-Nov', 'end_date' => '21-Dec', 'zodiac_name' => 'Sagittarius'],
            ['start_date' => '22-Dec', 'end_date' => '19-Jan', 'zodiac_name' => 'Capricorn'],
            ['start_date' => '20-Jan', 'end_date' => '18-Feb', 'zodiac_name' => 'Aquarius'],
            ['start_date' => '19-Feb', 'end_date' => '20-Mar', 'zodiac_name' => 'Pisces'],
        ];

        DB::table('zodiac')->insert($zodiacs);
    }
}
