<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserRolesSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(ManagerPayTypes::class);
        $this->call(OrderSeederClass::class);
        $this->call(ProductSeederClass::class);
        $this->call(TicketOrderClass::class);
    }
}
