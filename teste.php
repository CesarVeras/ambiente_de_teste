<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Teste</title>
    </head>
    <body>
        <?php
            include_once('conectaBanco.php');

            $conexao = conectaBanco('localhost', 'root', '123', 'lpds');

            function insereImagem($query){
                $dados = $conexao->query($query);
                while ($linha = $dados->fetch_assoc()) {
                    echo '<div><img src="' . $linha['diretorio'] . '" alt="' . $linha['descricao'] . '" /></div>';
                }
            }

            echo '<h1> Olá</h1>';

            $sql1 = 'SELECT diretorio,alt FROM imagens';
            insereImagem($sql1);
         ?>
    </body>
</html>
