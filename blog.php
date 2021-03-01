<?php 

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Blog - João da Silva</title>
		<link rel="stylesheet" href="./public/assets/CSS/blog.css">
		<?php 
			include('./src/script/head.php');
		?>
	<body>
		<main>
			<h1 class="titulo-principal">Blog</h1>

			<div class="texto">
				<article class="artigo">
					<h2 class="subtitulo-texto">O essencial de design responsivo</h2>
					<time datetime="2014-07-01">01 de julho de 2014</time>

					<p>Design responsivo tem ganho cada vez mais atenção como técnica de desenvolvimento de páginas web para dispositivos móveis. Mas como começar?</p>

					<a class="leia-mais" href="#">Leia mais</a>
					<footer>Tags: <a href="#">design responsivo</a>, <a href="#">mobile</a>, <a href="#">css</a></footer>
				</article>

				<article class="artigo">
					<h2 class="subtitulo-texto">Por que fazer páginas acessíveis?</h2>
					<time datetime="2014-06-15">15 de junho de 2014</time>

					<p>Tem se falado cada vez sobre acessibilidade na web. Há diversas técnicas e diretivas a serem seguidas, inclusive da própria W3C. Mas vale a pena investir nisso?</p>

					<a class="leia-mais" href="#">Leia mais</a>
					<footer>Tags: <a href="#">acessibilidade</a>, <a href="#">boas práticas</a></footer>
				</article>

				<article class="artigo">
					<h2 class="subtitulo-texto">JavaScript não obstrusivo</h2>
					<time datetime="2014-05-28">28 de maio de 2014</time>

					<p>JavaScript é uma linguagem essencial hoje em dia para criar páginas ricas, interativas e dinâmicas. Porém, há alguns cuidados que devem ser tomados ao colocarmos código JavaScript em nossas páginas.</p>
					
					<a class="leia-mais" href="#">Leia mais</a>
					<footer>Tags: <a href="#">javascript</a>, <a href="#">boas práticas</a></footer>
				</article>
			</div>
		</main>
		<?php 
			include('./src/script/nav-bar.php');
		?>
<?php 
	include('./src/script/footer.php');
?>