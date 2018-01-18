<?php

if (!isset($_GET['categoria'])|| ($_GET['categoria']=='Todos')){
    $sql = 'select * from cad_noticia ORDER BY 1 DESC LIMIT 3';
    $grade = new geraGrade($sql);
}else{
    $sql = "select * from cad_noticia where categoria = '".$_GET['categoria']."'ORDER BY 1 DESC LIMIT 3";
    $grade = new geraGrade($sql);
}

class geraGrade {

    private $categoria;

    public function geraGrade($cat) {

        $this->categoria = $cat;
        
        try {

            include('../conexaoDB/conexao.php');
            $pdo = $conexao;

            $comando = $pdo->query($this->categoria);

            $listar = $comando->fetchAll(PDO::FETCH_ASSOC);

            if ($listar == NULL) {
                echo "<tr align=center>
                 <td ALIGN=CENTER COLSPAN=2><p> Não foi encontrado nenhum registro! </p></td>
                     </tr>";
            }
            foreach ($listar as $list):
                echo "<table>       
            <thead align=center>
            </thead>
    <tbody>
    <tr align=center>
    <a href=telaExibeNoticia.php?id=" . $list['id'] . " target=_blank> 
        <div class= tr>
                 
                 <div class=titulo>". $list['titulo'] ." </div>
                 
                 <div class= imagem>
                 <img src= ../imagensNoticias/" . $list['imagem'] . " width=100 height=120 alt=sort_both/>
                 </div>
                     
                 <div class= noticia>" . $list['texto'] . "</div>
    
            </div> 
          </a>
          </tr>
    </tbody>
    </table>";
            endforeach;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

}
