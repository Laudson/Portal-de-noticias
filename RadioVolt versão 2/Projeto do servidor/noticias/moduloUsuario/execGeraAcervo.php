<?php

class geraAcervo {

    private $expreSQL;
    private $offset;


    public function geraAcervo($_expreSQL,$_offset) {

        $this->expreSQL = $_expreSQL;
        $this->offset = $_offset;
        
        try {
            
            include('../conexaoDB/conexao.php');
            $pdo = $conexao;

            $comando = $pdo->query('SELECT * FROM cad_noticia where 1 = 1 '.$this->expreSQL.' LIMIT 9 OFFSET '.$this->offset);

            $listar = $comando->fetchAll(PDO::FETCH_ASSOC);

            if ($listar == NULL) {
                
                echo "<script language=javascript>alert('Não foi encontrado nehum registro com esse filtro!'); window.location= '../moduloUsuario/telaAcervoNoticia.php';</script>";;
            }

            foreach ($listar as $list):

                echo '<a href="../moduloUsuario/telaExibeNoticia.php?id=' . $list['id'] . '"> <div class="divConteudoNoticia">
                <div class="divTit">'
                . $list['titulo'] .
                '</div>
                <div class="divImg">
                    <img src="../imagensNoticias/' . $list['imagem'] . '" width="149" height="139" alt="1442007428"/>
                </div>
                <div class="divNoti">'
                . $list['texto'] .
                '</div>
            </div> </a>';

            endforeach;

        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

}
