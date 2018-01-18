<?php

$gera = new geraNoticia($_GET['id']);

class geraNoticia {

    private $codigo;

    public function geraNoticia($codigoNot) {

        $this->codigo = $codigoNot;

        try {

            include('../conexaoDB/conexao.php');
            $pdo = $conexao;

            $comando = $pdo->query('SELECT * FROM cad_noticia where id = ' . $codigoNot);

            $listar = $comando->fetchAll(PDO::FETCH_ASSOC);

            if ($listar == NULL) {
                echo "<tr align=center>
                 <td ALIGN=CENTER COLSPAN=2><p> Não foi encontrado nenhum registro! </p></td>
                     </tr>";
            }
            foreach ($listar as $list):
                echo "<div class= tituloNoticia>" . $list['titulo'] . "</div>
                     <div class= exibeNoticia>
                     <div class=imagemNoticia> <img src= ../imagensNoticias/" . $list['imagem'] . " width=100 height=80 alt=sort_both/></div>
                     <div class= textoNoticia>" . $list['texto'] . "</div>
                </div>";
            endforeach;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

}
