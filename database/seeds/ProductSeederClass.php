<?php

use Illuminate\Database\Seeder;
use App\ProductStatus;

class ProductSeederClass extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['Не виден', 'Виден', 'Зарезервирован', 'Продан'];
        foreach ($array as $ar):
            ProductStatus::create([
                'name' => $ar
            ]);
        endforeach;
    }
}
