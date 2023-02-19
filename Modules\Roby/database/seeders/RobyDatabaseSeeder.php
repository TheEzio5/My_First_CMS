<?php

namespace Modules\Roby\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Roby;

class RobyDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * Robies Seed
         * ------------------
         */

        // DB::table('robies')->truncate();
        // echo "Truncate: robies \n";

        Roby::factory()->count(20)->create();
        $rows = Roby::all();
        echo " Insert: robies \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
