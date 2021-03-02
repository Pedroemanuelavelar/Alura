<?php 

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Portfolio - João da Silva</title>
        <link rel="stylesheet" href="./public/assets/CSS/portfolio.css">
		<?php 
			include('./src/script/head.php');
		?>
	</head>
	<body>
		<main>
			<h1 class="titulo-principal">Portfolio</h1>

            <div class="container">
                <p>Veja abaixo a lista dos meus projetos mais relevantes</p>
                <ul class="portfolio">
                    <li>
                        <a href="http://bmw.com" target="_blank">
                            <figure>
                                <img src="./public/assets/images/bmw.png" alt="Site da BMW">
                                <figcaption>BMW.com: reformulação de design e implementação de HTML, CSS e JavaScript</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="http://uol.com.br" target="_blank">
                            <figure>
                                <img src="./public/assets/images/uol.png" alt="Front-page da UOL">
                                <figcaption>UOL.com.br: reformulação de design e implementação de HTML, CSS e JavaScript</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.ibm.com.br" target="_blank">
                            <figure>
                                <img src="./public/assets/images/ibm.png" alt="Site da IBM">
                                <figcaption>IBM.com: aplicação de progressive enhancement em conjunto com aplicação back-end</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="http://g1.com.br" target="_blank">
                            <figure>
                                <img src="./public/assets/images/g1.png" alt="Front-page do portal G1">
                                <figcaption>G1.com.br: reformulação de design e implementação de HTML, CSS e JavaScript</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="http://terra.com.br" target="_blank">
                            <figure>
                                <img src="./public/assets/images/terra.png" alt="Front-page do portal Terra">
                                <figcaption>Terra.com.br: implementação de design responsivo</figcaption>
                            </figure>
                        </a>
                    </li>
                </ul>
            </div>
		</main>
		<?php 
			include('./src/script/head.php');	
		?>
		<?php 
			include('./src/script/nav-bar.php');	
        ?>
<?php 
	include('./src/script/footer.php');
?>