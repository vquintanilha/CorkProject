<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Cork - Coffe & Space Rentals</title>
    <link rel="stylesheet" href="../css/estilo.css"/>
    <link rel="sortcut icon" href="../imagens/icon.ico" type="image/x-icon" />;
    <style>
        img.botao {
            display: block;
            margin: 15px auto 15px auto;
            box-shadow: 0px 0px 10px rgba(0,0,0,.5);
        }
    </style>
    <?php
        include_once('conexao_bd.php');

        $nome = $_POST['tNome'];
        $email = $_POST['tMail'];
        $assunto = $_POST['tAssunto'];
        $mensagem = $_POST['tMsg'];

        $result_msg_contato = "INSERT INTO mensagens(nome, email, assunto, mensagem, created) VALUES ('$nome', '$email', '$assunto', '$mensagem', NOW())";

        $resultado_msg_contato = mysqli_query($conn, $result_msg_contato)
    ?>
</head>
<body>
<div id="interface">

    <!-- Logo da cafeteria -->
    <header id="cabecalho">
        <header id="nome">
            <h1>Cork</h1>
            <h2>Coffe & Space Rentals</h2>
        </header>

        <img id="logo" src="../imagens/logo.png"/>

        <!-- Menu de navegação entre páginas do site -->
        <nav id="menu">
            <h1>Menu Principal</h1>
            <ul>
                <li><a href="../index.html">Início</a></li>
                <li><a href="../sobre.html">Sobre Nós</a></li>
                <li><a href="../galeria.html">Galeria</a></li>
                <li><a href="../cardapio.html">Cardápio</a></li>
                <li><a href="../contato.html">Contato</a></li>
            </ul>
        </nav>
    </header>

    <!-- Section onde vai ser inserido o texto de mensagem enviada -->
    <section id="corpo-inteiro">
        <article id="conteudo">

            <h1>MENSAGEM ENVIADA COM SUCESSO!</h1>

            <img src="../imagens/voltar.jpg" onclick="history.go(-1)" class="botao"/>

        </article>
    </section>

    <!-- Rodapé da página com autor do site, facebook e instagram da cafeteria -->
    <footer id="rodape">
        <p>Copyright &copy; 2019 - by Victor Quintanilha<br/>
            <a href="http://facebook.com/cork.coffe" target="_blank"><img src="../imagens/facebook.png"/></a>
            <a href="http://instagram.com/cork-99" target="_blank"><img src="../imagens/instagram.png"/></a>
        </p>
    </footer>

</div>
</body>
</html>