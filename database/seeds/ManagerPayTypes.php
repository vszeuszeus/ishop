<?php

use Illuminate\Database\Seeder;
use App\ManagerPayType;

class ManagerPayTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(['фиксированный', 'процентный'] as $type){
            ManagerPayType::create([
                'name' => $type
            ]);
        }
    }
}
