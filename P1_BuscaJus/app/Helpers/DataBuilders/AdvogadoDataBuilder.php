<?php 
namespace App\Helpers\DataBuilders;

class AdvogadoDataBuilder {

    private $v = [
        ['nome' => 'Mario Santana', 'email' => 'mariosantana@mail.com', 'telefone' => '981718449', 'ramo' => 'Advogado ambientalista', 'linkImagem' => 'https://www.cgvadvogados.com.br/_2021/wp-content/uploads/2021/04/Thiago-Junqueira_site-CGV2020-400x400.jpeg']
    ];
    
    public function getData() {
        return $this->v;
    }
    
    public function getRow() {
        $v = ['nome' => 'Mario Santana', 
                'email' => 'mariosantana@mail.com', 
                'telefone' => '981718449', 
                'ramo' => 'Advogado ambientalista', 
                'linkImagem' => 'https://www.cgvadvogados.com.br/_2021/wp-content/uploads/2021/04/Thiago-Junqueira_site-CGV2020-400x400.jpeg'];
        return $v;
    }
}