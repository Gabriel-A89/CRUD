<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Helpers\DataBuilders\AdvogadoDataBuilder;
use App\Models\Advogado;

class AdvogadoTest extends TestCase
{
    //execução inicial
    public function setUp(): void
    {
        //código de configuração
        parent::setUp();
        //Advogado::truncate();

        $adb = new AdvogadoDataBuilder();
        $v = $adb->getData();

        Advogado::insert($v);
    }

    public function test_le_um_advogado()
    {
        //arrange
        $advogado01 = Advogado::find(0);
        //act
        $nome = $advogado01['nome'];
        //assert
        $this->assertEquals('Mario Santana', $nome);
    }

    public function test_le_todos_advogados()
    {   
        $v = Advogado::all();
        $this->assertEquals(1, sizeof($v));  
    }

    public function test_le_todos_advogados_corretamente()
    {
        $lista = Advogado::all();

        $this->assertEquals('mariosantana@mail.com', $lista[0]['email']);
        $this->assertEquals('981718449', $lista[0]['telefone']);
        $this->assertEquals('Advogado ambientalista', $lista[0]['ramo']);
    }

    public function test_atualiza_advogado()
    {
        $mario = Advogado::find(0);
        $this->assertEquals('Mario Santana', $mario['nome']);
        $mario['nome'] = 'Mario Santina';
        $mario->save();
        $ma = Advogado::find(0);
        $this->assertEquals('Mario Santina', $mario['nome']);
    }

    public function test_remove_advogado()
    {
        $mario = Advogado::find(0);
        $mario->delete();
        $mario = Advogado::find(0);
        $this->assertNull($mario);
    }

    public function test_cadastro_advogado()
    {
        $adb = new AdvogadoDataBuilder();
        $row = $adb->getRow();
        Advogado::create($row);
        $v = Advogado::all();
        $num = sizeof($v);
        this->assertEquals(1, $num);
        $vol = $v[$num - 1];
        this->assertEquals('mariosantana@mail.com', $vol['email']);
    }


}
