<?php
$nomecliente = [0];
$qtd = [0];
$valorunit = [0];
$valortotal = [0];

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Energéticos Accelerator</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<header>
    <div class="container">
        <a href="./index.php"><img src="./img/energetico.png" alt="logo"></a>
        
    <h1>Energéticos Accelerator</h1>
    </div>
</header> 

<!-- INÍCIO CONTEÚDO DO SITE -->
<section>
    <h2>Relatório de Sistema</h2>

    <div class="container-left">
<form id="data">
    Cliente: <input type="text" id="nome" name="nome" placeholder="Digite o nome do cliente"><br>
    Quantidade:  <input type="text" id="qtd" name="quantidade">  Valor Unitário R$ <input type="text" id="valor-unit" name="valor-unitario" value="4,50" readonly=“true”>
    <button type="submit" id="btn-calc">Calcular</button>
    <hr>
    Valor Total: <input type="text" id="valor-total" name="valor-total" placeholder="R$ "  readonly=“true”>
    <hr>
    <button type="submit" id="btn-detail">Gerar Relatório Detalhado</button>
</form>
</div>

<div class="container-right">
<form id="relatory">

</form>

</div>

</section>

<!-- FIM CONTEÚDO DO SITE -->
<footer>Desenvolvido por <a href="https://www.linkedin.com/in/arthur-svensson">Arthur Svensson</a></footer>
</body>
</html>


