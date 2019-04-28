<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Eduardo Henrique Silva',
                'email' => 'eduardo.silva@imob.com.br',
                'password' => bcrypt('q1q2q3'),
                'avatar' => '364a440226e1b575411a0e324e712d17.jpg',
                'job' => 'Corretor',
                'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus nisi a nisi venenatis, sed condimentum lectus luctus. Integer felis augue, dignissim eget rhoncus nec, elementum et lorem.'
            ],
            [
                'name' => 'Guilherme de Paula',
                'email' => 'guilherme.paula@imob.com.br',
                'password' => bcrypt('u1u2u3'),
                'avatar' => 'd6ee4e61af68a10f9bb9ee130313881f.jpg',
                'job' => 'Corretor',
                'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus nisi a nisi venenatis, sed condimentum lectus luctus. Integer felis augue, dignissim eget rhoncus nec, elementum et lorem.'
            ],
            [
                'name' => 'Pedro Rodrigues Almeida',
                'email' => 'pedro.almeida@imob.com.br',
                'password' => bcrypt('g1g2g3'),
                'avatar' => '38e2b2e31c0fce9537f735dda9fdf10a.jpg',
                'job' => 'Corretor',
                'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus nisi a nisi venenatis, sed condimentum lectus luctus. Integer felis augue, dignissim eget rhoncus nec, elementum et lorem.'
            ],
            [
                'name' => 'Roberto de Souza Santos',
                'email' => 'roberto.santos@imob.com.br',
                'password' => bcrypt('m1m2m3'),
                'avatar' => '7aa99682f9d3a129f54e0eae9ccd3628.jpg',
                'job' => 'Corretor',
                'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus nisi a nisi venenatis, sed condimentum lectus luctus. Integer felis augue, dignissim eget rhoncus nec, elementum et lorem.'
            ],
            [
                'name' => 'Joao Leocadio',
                'email' => 'joao.leocadio@imob.com.br',
                'password' => bcrypt('z1x5c9'),
                'job' => 'Admin',
                'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus nisi a nisi venenatis, sed condimentum lectus luctus. Integer felis augue, dignissim eget rhoncus nec, elementum et lorem.',
                'admin' => true
            ],
            [
                'name' => 'Vanderlei Ienne',
                'email' => 'vanderlei.ienne@imob.com.br',
                'password' => bcrypt('a7s5d3'),
                'job' => 'Admin',
                'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus nisi a nisi venenatis, sed condimentum lectus luctus. Integer felis augue, dignissim eget rhoncus nec, elementum et lorem.',
                'admin' => true
            ]
        ];

        foreach ($users as $user) {
            \App\User::create($user);
        }
    }
}
