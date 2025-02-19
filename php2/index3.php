<?php
class carro{
    public  $marca;
    public  $modelo;
    public  $ano;
    public  $cor;

    public function __construct($marca, $modelo, $ano, $cor,) {
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->ano=$ano;
        $this->cor=$cor;}

    public function mostrar(){
        return "  Carro: $this->marca $this->modelo, Ano: $this->ano, $this->cor";
    }


    public function alterarCor(string $novaCor) {
        $this->cor = $novaCor;
    }
}

$MeuCarro= new carro("Wolksvagen","Fusca",1945,"Branco.");

echo $MeuCarro->mostrar();

$MeuCarro->alterarCor("Preto.");


echo $MeuCarro->mostrar();
?>
