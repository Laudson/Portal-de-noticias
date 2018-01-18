function confirmacao(id) {
    
                var resposta = confirm("Deseja remover esse registro?");
                
                if (resposta == true) {
                    window.location.href = "execRemoveNoticia.php?id=" + id;
                }
            }
