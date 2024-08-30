<?php
use PHPUnit\Framework\TestCase;

use src\Item;
class ItemTest extends TestCase
{
    public function testEstaddoInicialItem()
    {
        $item = new Item();

        //asserções do PHPUnit
        $this->assertEquals($item->getdescricao(), '');
        $this->assertEquals($item->getvalor(), 0);
    }

    public function testGetDescricao()
    {
        $descricao = "Cadeira de plástico";

        $item = new Item();
        $item->setdescricao($descricao);

        $this->assertEquals($item->getdescricao(), $descricao);
    }

    /**
     * @dataProvider dataValores
     */
    public function testGetSetValor($valor)
    {
        //$valor = 35.42;

        $item = new Item();
        $item->setvalor($valor);

        $this->assertEquals($item->getvalor(), $valor);
    }


    public function testItemValido()
    {
        $item = new Item();
        //Submeter um item válido para o teste e retornar true
        $item->setvalor(55);
        $item->setdescricao("Cadeira de plastico");
        $this->assertTrue($item->itemValido(), false);

        //Submeter um item válido para o teste e retornar false
        $item->setvalor(0);
        $item->setdescricao("Cadeira de plastico");
        $this->assertFalse($item->itemValido(), false);

        //

        $item->setvalor(0);
        $item->setdescricao("");
        $this->assertFalse($item->itemValido(), false);
    }


    //Provedor de dados para testes

    public function dataValores()
    {

        return [
            [55],
            [0],
            [0],
            [5]
        ];
    }



}//Fim da classe