<?php
    if(session_status() !== PHP_SESSION_ACTIVE)
        session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="short icon" type="imagex/pngp" href="img/logo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/chat.js"></script>
    <link rel="stylesheet" href="./css/chat.css">
    <title>Chat interativo</title>
</head>

<body>

    <div class="container content">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        	<div class="card">
        		<div class="card-header">Chat</div>
        		<div class="card-body height3">
        			<ul class="chat-list">
        				<li class="in">
                            <div class="chat-img">
        						<img alt="Avtar" src="img/avatar_chat.png" draggable="false">
        					</div>
        					<div class="chat-body">
        						<div class="chat-message">
        							<p id="mensagens1"></p>
        						</div>
        					</div>
        				</li>
                        <li class="in">
                            <div class="chat-img">
        						<img alt="Avtar" src="img/avatar_chat.png" draggable="false">
        					</div>
        					<div class="chat-body">
        						<div class="chat-message">
        							<p id="mensagens2"></p>
        						</div>
        					</div>
        				</li>
                        <li class="in">
                            <div class="chat-img">
        						<img alt="Avtar" src="img/avatar_chat.png"draggable="false" >
        					</div>
        					<div class="chat-body">
        						<div class="chat-message">
        							<p id="mensagens3"></p>
        						</div>
        					</div>
        				</li>
                        <li class="in">
                            <div class="chat-img">
        						<img alt="Avtar" src="img/avatar_chat.png" draggable="false">
        					</div>
        					<div class="chat-body">
        						<div class="chat-message">
        							<p id="mensagens4"></p>
        						</div>
        					</div>
        				</li>
                        <li class="in">
                            <div class="chat-img">
        						<img alt="Avtar" src="img/avatar_chat.png" draggable="false">
        					</div>
        					<div class="chat-body">
        						<div class="chat-message">
        							<p id="mensagens5"></p>
        						</div>
        					</div>
        				</li>
        			</ul>

					<div id="controles">

						<form id="form" method="POST">
							<textarea name="caixa_texto" id="caixa_texto" placeholder="Digite sua mensagem aqui..."></textarea>
							<br>
							<input type="button" id="enviar_mensagem" value="Enviar!">
						</form>

					</div>

        		</div>
        	</div>
        </div>
    </div>
</div>

</body>
</html>