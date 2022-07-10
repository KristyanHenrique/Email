<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post" action="{{ route('send.Email') }}">
		@csrf
		<label for="nome">Seu Nome</label>
		<input type="text" name="nome"><br>
		<br>
		<label for="email">Seu email</label>
		<input type="text" name="email"><br>
		<br>
		<label for="conteudo">Conteudo</label><br>
		<textarea name="conteudo" id="" cols="100" rows="4">Já engoli muita porra calado, já tomei muito no cu, já me fudi várias vezes, já aguentei cada caralho na vida, muita bolada nas costas, muita paulada por trás, já me machucaram muito por dentro, já meteram muito o pau em mim quando virei as costas, mas hoje continuo forte. É isso, o certo é esperar a hora certa para dar o troco, porque não tem nada melhor que dar na hora certa.</textarea>
		<br>

		<button type="Submit">Send</button>
	</form>
</body>
</html>