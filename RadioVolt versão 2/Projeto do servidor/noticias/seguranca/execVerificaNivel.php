<?php

include_once '../seguranca/execAutenticacao.php';

$cessao = new autenticacao();
echo $cessao->verificaNivelUsuario();

