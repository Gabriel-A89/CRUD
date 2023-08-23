<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Advogado;

class AdvogadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $advogados = [
            [   'nome' => 'Maria Pereira',
                'email' => 'maria.pereira@buscajus.com.br',
                'telefone' => '(11) 98431-6544',
                'ramo' => 'Advogada Civil',
                'linkImagem' => 'https://www.cgvadvogados.com.br/_2021/wp-content/uploads/2021/04/MIRELA-SAAR-400x400.jpg'
            ],
            [   'nome' => 'Mario Santana',
                'email' => 'mario.santana@buscajus.com.br',
                'telefone' => '(11) 98431-6484',
                'ramo' => 'Advogado ambientalista',
                'linkImagem' => 'https://www.cgvadvogados.com.br/_2021/wp-content/uploads/2021/04/Thiago-Junqueira_site-CGV2020-400x400.jpeg'
            ],
            [   'nome' => 'Igor Suze',
                'email' => 'igor.suze@buscajus.com.br',
                'telefone' => '(11) 98651-6484',
                'ramo' => 'Advogado do consumidor',
                'linkImagem' => 'https://www.cgvadvogados.com.br/_2021/wp-content/uploads/2021/04/ILAN-GOLDBERG-400x400.jpg'
            ],
            [   'nome' => 'Gustavo Passos',
                'email' => 'gustavo.passos@buscajus.com.br',
                'telefone' => '(11) 98851-8184',
                'ramo' => 'Advogado criminalista',
                'linkImagem' => 'https://www.cgvadvogados.com.br/_2021/wp-content/uploads/2021/04/EDUARDO-CHALFIN-400x400.jpg'
            ],
        ];

        Advogado::insert($advogados);
    }
}
