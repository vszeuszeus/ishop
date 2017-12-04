<?php

use Illuminate\Database\Seeder;
use App\ProductStatus;
use App\ProductType;

class ProductSeederClass extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['Неактивен', 'Активен', 'Зарезервирован', 'Продан'];
        foreach ($array as $ar):
            ProductStatus::create([
                'name' => $ar
            ]);
        endforeach;

        $array = ['Черновик', 'На проверке', 'Одобрен', 'Неодобрен'];
        foreach ($array as $ar):
            ProductType::create([
                'name' => $ar
            ]);
        endforeach;
    }
}
