<?php 

?>
<!DOCTYPE html>
<html>

<head>
    <title>Biografia - João da Silva</title>
    <link rel="stylesheet" href="./public/assets/CSS/contato.css">
    <?php 
			include('./src/script/head.php');
		?>

<body>
    <main>
        <h1 class="titulo-principal">Contato</h1>

        <div class="container">
            <form class="form box-content">
                <fieldset>
                    <legend>Seus dados</legend>
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" placeholder="Digite seu nome" pattern="[A-Za-z ']{4,}" title="O nome precisa ter pelo menos 4 caracteres" autofocus required>
                    <label for="email">E-mail</label>
                    <input id="email" type="email" placeholder="Digite seu e-mail" required>
                    </fieldset>
                    <fieldset>
                        <legend>Assunto</legend>
                        <label>
                            <input type="radio" value="Blog" name="assunto">
                            Blog
                        </label>
                        <label>
                            <input type="radio" value="Serviço" name="assunto">
                            Serviço
                        </label>
                        <fieldset>
                            <input type="radio" value="Outro" id="outro" name="name-assunto">
                            <label for="outro">Outro</label>
                            <input type="text" name="outro-assunto">
							<label for="mensagem">Mensagem</label>
							<textarea name="msg" id="mensagem" cols="60" rows="10" placeholder="Digite aqui sua mensagem"></textarea>
							<button type="submit">Enviar Mensagem</button>
                        </fieldset>
                    </fieldset>
            </form>
        </div>
    </main>
    <?php 
			include('./src/script/nav-bar.php');
		?>
    <?php 
	include('./src/script/footer.php');
?>