<?php

use Illuminate\Database\Seeder;
use App\TicketStatus;


class TicketOrderClass extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['Закрыт', 'Получен ответ поддержки', 'Ожидается ответ поддержки'];
        foreach ($array as $ar):
            TicketStatus::create([
                'name' => $ar
            ]);
        endforeach;
    }
}
