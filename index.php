<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>João da Silva - Desenvolvedor Web</title>
    <link rel="shortcut icon" href="favicon.png">
   
    <?php 
		include('./src/script/head.php');
	?>
     <link rel="stylesheet" href="./public/assets/CSS/index.css">
    
<body>
    <header class="titulo-principal">
        <img class="foto-home" src="./public/assets/images/eu.jpg" alt="Foto de João da Silva">
        <h1>João da Silva</h1>
        <p class="subtitulo-principal">Desenvolvedor web</p>
        <ul class="palavras-home">
            <li class="palavra-home eficiencia">Eficiência</li>
            <li class="palavra-home boas-praticas">Boas práticas</li>
            <li class="palavra-home codigo-limpo">Código limpo</li>
            <li class="palavra-home css3">CSS3</li>
            <li class="palavra-home html5">HTML5</li>
            <li class="palavra-home javascript">JavaScript</li>
            <li class="palavra-home acessibilidade">Acessibilidade</li>
            <li class="palavra-home responsivo">Responsivo</li>
            <li class="palavra-home otimizacoes">Otimizações</li>
            <li class="palavra-home agilidade">Agilidade</li>
            <li class="palavra-home design">Design</li>
        </ul>
        <a class="banner-twitter" href="http://twitter.com/joaodasilva">Siga-me no Twitter</a>
    </header>
    <main>
        <section class="secao-inicio saudacao">
            <p class="saudacao"><span class="saudacao-inicio">Olá,</span> meu nome é <strong>João da Silva</strong> <span class="saudacao-ultima-linha">e eu construo <em>sites maravilhosos</em></span></p>
            <a class="botao-index" href="bio.php">Conheça mais um pouco sobre mim</a>
        </section>
        <section class="secao-inicio trabalhos">
            <h2>Trabalhos</h2>
            <ul>
                <li><img src="./public/assets/images/bmw.png" alt="Site da BMW"></li>
                <li><img src="./public/assets/images/ibm.png" alt="Site da IBM"></li>
                <li><img src="./public/assets/images/uol.png" alt="Site da UOL"></li>
               <!--  <li><img src="./public/assets/images/terra.png" alt="Site da UOL"></li> -->
            </ul>
            <a class="botao-index" href="portfolio.php">Veja mais</a>
        </section>
        <section class="secao-inicio blog">
            <h2>Blog</h2>
            <small>Últimos posts</small>
            <ol>
                <li class="mais-recente">
                    <a href="blog.php">O essencial de design responsivo</a>
                    <p class="inicio-post">
                        Design responsivo tem ganho cada vez mais atenção como técnica de desenvolvimento de páginas web para dispositivos móveis. Mas como começar?
                    </p>
                </li>
                <li>
                    <a href="blog.php">Por que fazer páginas acessíveis?</a>
                </li>
                <li>
                    <a href="blog.php">JavaScript não obstrusivo</a>
                </li>
            </ol>
            <a class="botao-index" href="blog.php">Veja mais</a>
        </section>
    </main>
    <footer>
        <h2>Vamos conversar?</h2>
        <p>Você pode entrar em contato comigo <a href="contato.php">por e-mail</a> ou pelo telefone <a href="tel:+551234567890">(12) 3456-7890</a></p>
    </footer>
</body>
</html>
