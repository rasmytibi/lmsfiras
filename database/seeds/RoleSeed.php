<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 1, 'title' => 'Administrator (can create other users)',],
            ['id' => 2, 'title' => 'Teacher',],
            ['id' => 3, 'title' => 'Student',],

        ];

        foreach ($items as $item) {
            \App\Models\Role::create($item);
        }
    }
}
