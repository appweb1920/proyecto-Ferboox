<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => Str::random(10),
            'descripcion' => Str::random(20),
            'foto' => 'https://picsum.photos/200/300?random=2',
            'cantidad' => 10,
            'precio' => 892.01,
            'categoria_id' => 1,
        ]);
    }
}
