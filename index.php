 
<?php

require_once 'config/conexao.php';


$titulo = 'Painel inicial';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Keepsake | <?php echo $titulo; ?></title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Lato:wght@300;400;500;600;700&display=swap" rel="stylesheet">

   
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

</body>
</html>

<body>

    <!-- Cabeçalho do sistema -->
    <header>
        <h1>Keepsake</h1>
    </header>

    <!-- Menu lateral -->
    <aside>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="produtos/">Produtos</a></li>
                <li><a href="categorias/">Categorias</a></li>
                <li><a href="fornecedores/">Fornecedores</a></li>
                <li><a href="movimentacoes/">Movimentações</a></li>
                <li><a href="relatorios/">Relatórios</a></li>
                <li><a href="usuarios/">Usuários</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Conteúdo principal -->
    <main>
        <h2>Painel inicial</h2>

        <p>Bem-vindo ao sistema de gestão da Keepsake.</p>
    </main>

</body>
