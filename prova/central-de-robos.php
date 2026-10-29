<?php

    session_start();

    class robo {
        public $nome;
        public $modelo;
        public $energia;
        public $potencia;
        public $funcao;
        public $operador;
        public $id;
        public $contador;

        public function __construct($nome, $modelo, $operador, $energia = null, $id = null){
            $configuracoes = [
                "explorador" => [
                    "energia" => 100,
                    "potencia" => 20
                ],
                "engenheiro" => [
                    "energia" => 120,
                    "potencia" => 15
                ],
                "defensor" => [
                    "energia" => 150,
                    "potencia" => 30
                ]
            ];

            if(!isset($configuracoes[$modelo])){
                throw new InvalidArgumentException("modelo invalido.");
            }

            $this->nome = $nome;
            $this->modelo = $operador;

            $this->energia = $energia ?? $configuracoes[$modelo]["energia"];
            $this->potencia = $configuracoes[$modelo]["potencia"];
        }

    public function exibirStatus() {
        return "Nome: " . $this->nome .
            " | Modelo: " . $this->modelo .
            " | Energia: " . $this->energia .
            " | Potência: " . $this->potencia;
            }

            public function recarregar() {
        $this->energia = min(200, $this->energia + 10);
    }

    public function paraArray() {
        return [
            "id" => $this->id,
            "nome" => $this->nome,
            "modelo" => $this->modelo,
            "energia" => $this->energia,
            "potencia" => $this->potencia,
            "operador" => $this->operador
        ];
    }
}






    class explorador {
    function operar() {
        echo "Planeta Investigado!";
        }
        public function exibirStatus() {
            return $modelo; $energia; $potencia;
        }
        public function recarregar() {
            $this->energia += 10;
            $this->contador += 1;
            return $energia;
        }
    }






    class engenheiro {
        function operar() {
            echo "Equipamento Reparado!";
        }
        public function exibirStatus() {
            return $modelo; $energia; $potencia;
        }
        public function recarregar() {
            $this->energia += 10;
            $this->contador += 1;
            return $energia;
        }
    }





    class defensor {
        function operar() {
            echo "Defesas erguidas!";
        }
        public function exibirStatus() {
            return $modelo; $energia; $potencia;
        }
        public function recarregar() {
            $this->energia += 10;
            $this->contador += 1;
            return $energia;
        }
    }

    $robo = new explorador (100,20);
    $robo = new engenheiro (120,15);
    $robo = new defensor (150,30);
    htmlspecialchars (

    );


    if($_SERVER ['REQUEST_METHOD'] === $_POST){
        if ($nome = "" ??, ||
        $potencia >= 15, ||
        $energia >= 100) {
            if ($robo = class explorador){
                operar()
            } elseif ($robo class engenheiro){
                operar()
            } elseif ($robo = class defensor){
                operar()
            }
        }
        else{
            echo "Preencha corretamente"
        }
    }
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>