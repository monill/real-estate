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
                'job' => 'Corretor',
                'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus nisi a nisi venenatis, sed condimentum lectus luctus. Integer felis augue, dignissim eget rhoncus nec, elementum et lorem.'
            ],
            [
                'name' => 'Guilherme de Paula',
                'email' => 'guilherme.paula@imob.com.br',
                'password' => bcrypt('u1u2u3'),
                'job' => 'Corretor',
                'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus nisi a nisi venenatis, sed condimentum lectus luctus. Integer felis augue, dignissim eget rhoncus nec, elementum et lorem.'
            ],
            [
                'name' => 'Pedro Rodrigues Almeida',
                'email' => 'pedro.almeida@imob.com.br',
                'password' => bcrypt('g1g2g3'),
                'job' => 'Corretor',
                'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus nisi a nisi venenatis, sed condimentum lectus luctus. Integer felis augue, dignissim eget rhoncus nec, elementum et lorem.'
            ],
            [
                'name' => 'Joao Leocadio',
                'email' => 'joao.leocadio@imob.com.br',
                'password' => bcrypt('z1x5c9'),
                'job' => 'Corretor',
                'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus nisi a nisi venenatis, sed condimentum lectus luctus. Integer felis augue, dignissim eget rhoncus nec, elementum et lorem.',
                'admin' => true
            ],
            [
                'name' => 'Vanderlei Ienne',
                'email' => 'vanderlei.ienne@imob.com.br',
                'password' => bcrypt('a7s5d3'),
                'job' => 'Corretor',
                'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus nisi a nisi venenatis, sed condimentum lectus luctus. Integer felis augue, dignissim eget rhoncus nec, elementum et lorem.',
                'admin' => true
            ]
        ];

        foreach ($users as $user) {
            \App\User::create($user);
        }
    }
}
