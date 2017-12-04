<?php

use Illuminate\Database\Seeder;
use App\Order;
use App\OrderStatus;


class OrderSeederClass extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['Не оплачен', 'Оплачен не полностью', 'Проблемный', 'Доставлен'];
        foreach ($array as $ar):
            OrderStatus::create([
                'name' => $ar
            ]);
        endforeach;
    }
}
