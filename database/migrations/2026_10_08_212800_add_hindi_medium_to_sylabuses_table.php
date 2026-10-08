<?php

use App\Models\Sylabus;
use Illuminate\Database\Migrations\Migration;

class AddHindiMediumToSylabusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $standards = [
            'NURSERY',
            'JR.KG',
            'SR.KG',
            'STD: 1',
            'STD: 2',
            'STD: 3',
            'STD: 4',
            'STD: 5',
            'STD: 6',
            'STD: 7',
            'STD: 8',
            'STD: 9',
            'STD: 10',
            'STD: 11',
            'STD: 12',
        ];

        foreach ($standards as $std) {
            Sylabus::firstOrCreate(
                ['medium' => 'hindi', 'std' => $std],
                ['file' => null]
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Sylabus::where('medium', 'hindi')->delete();
    }
}
