<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 1, 'confirmation_code'=>md5(uniqid(mt_rand(), true)),'confirmed' =>true,'first_name'=>'Admin', 'last_name' => 'Tibi', 'email' => 'admin@admin.com', 'password' => '$2y$10$l4MghrLnKXTRUDlR07XQeesKHRIaAe7WzDf90g751BEf70AwnJ5m.', 'remember_token' => '',],
//            ['id' => 2,'first_name'=>'Teacher', 'last_name' => 'tt', 'email' => 'teacher@admin.com', 'password' => '$2y$10$l4MghrLnKXTRUDlR07XQeesKHRIaAe7WzDf90g751BEf70AwnJ5m.', 'remember_token' => '',],
//            ['id' => 3,'first_name'=>'Student', 'last_name' => 'ss', 'email' => 'student@admin.com', 'password' => '$2y$10$l4MghrLnKXTRUDlR07XQeesKHRIaAe7WzDf90g751BEf70AwnJ5m.', 'remember_token' => '',],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
