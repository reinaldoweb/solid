<?php

namespace src;

class Arquivo
{

    private $dados = array();

    public function setDados(string $nome, string $cpf, string $email): void
    {
        array_push(
            $this->dados,
            [
                'nome' => iconv('ISO-8859-1', 'UTF-8', $nome),
                'cpf' => $cpf,
                'email' => $email
             ]

             );

    }

    public function getDados(): array
    {
        return $this->dados;
    }


    public function lerArquivoCSV(string $caminho):void
    {
        $handle = fopen($caminho, "r");
        while (($linha = fgetcsv($handle, 10000, ";")) !== false) {
            $this->setDados($linha[0], $linha[1], $linha[2]);
        }

    }

}
