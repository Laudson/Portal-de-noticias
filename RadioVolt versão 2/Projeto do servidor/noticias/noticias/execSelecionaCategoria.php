<?php

if (isset($_GET['categoria'])) {
    $droD = new DropDown($_GET['categoria']);
} else {
    $droD = new DropDown('');
}

class DropDown {

    private $primeiroElemento;

    public function DropDown($_primeiroElemento) {
        $this->primeiroElemento = $_primeiroElemento;
        $this->geraDropdown($this->primeiroElemento);
    }

    private function geraDropdown($Elemento) {

        include('../conexaoDB/conexao.php');
        $pdo = $conexao;
        $comando = $pdo->query("SELECT * FROM cad_categoria order by 2");
        $listar = $comando->fetchAll(PDO::FETCH_ASSOC);

        if ($listar == NULL) {
            echo "<option>Favor cadastrar categoria</option>";
            
        } else {

            if ($Elemento != '') {

                echo "<option value= " . $Elemento . ">$Elemento</option>";
                foreach ($listar as $list):
                    echo "<option value= " . $list['Nome'] . ">" . $list['Nome'] . "</option>";
                endforeach;
            }else {
                foreach ($listar as $list):
                    echo "<option value= " . $list['Nome'] . ">" . $list['Nome'] . "</option>";
                endforeach;
            }
        }
    }
}
