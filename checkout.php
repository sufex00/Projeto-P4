<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Checkout Mirror Fashion</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <meta name="viewport" content="width=device-width">
</head>
<body>

<div class="jumbotron">
  <div class="container">

  <h1>Ótima escolha!</h1>
  <p>Obrigado por comprar na Mirror Fashion! 
  Preencha seus dados para efetivar a compra.</p>

  </div>
</div>
<div class="container">

  <!-- ... panel aqui ... -->

<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Sua compra</h2>
  </div>
  <div class="panel-body">

    <!-- ... aqui vai o <dl> que já temos hoje ... -->
	<img src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" 
   class="img-thumbnail img-responsive">
   <dl>
    <dt>Produto</dt>
    <dd>Fuzzy Cardigan</dd>

    <dt>Cor</dt>
    <dd>verde</dd>

    <dt>Tamanho</dt>
    <dd>40</dd>

    <dt>Preço</dt>
    <dd>R$ 129,00</dd>
  </dl>

  </div>
</div>

</div>
</body>
</html>
