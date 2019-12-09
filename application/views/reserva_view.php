<html>

<head>

  <title>Ferrament@</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width = device-width, initial-scale = 1.0">

</head>

<body>

  <header>
    <div class="ui inverted secondary menu">
      <div class="ui inverted massive borderless top fixed menu">
        <div class="item">
          <a class="ui large header fitted item" href="http://localhost/Ferramenta_BD1-master/">Ferrament@</a>
        </div>
        <div class="vertically fitted right menu">
          <a class="item" href="http://localhost/Ferramenta_BD1-master/">Inicio</a>
          <a class="item" href="http://localhost/Ferramenta_BD1-master/index.php/Produto">Produtos</a>
          <a class="active item" href="http://localhost/Ferramenta_BD1-master/index.php/MainPage/navegacao">Cadastros</a>
        </div>
      </div>
    </div>

  </header>

  <main>
    </br>

    <div class="ui segment">
      <h4 class="ui header">Reserva</h4>
    </div>
	<form action="#" method="post" accept-charset="utf-8" enctype="multipart/form-data" class="ui form 1">
    <div class="ui form inverted segment">
      <div class="three fields">
        <div class="field">
          <label>Data da Retirada</label>
          <input placeholder="Data da Retirada" name="dataRet" id="dataRet" type="text" <?php if(isset($post_data)) echo 'value="'.$post_data['dataRet'].'"';?>>
        </div>
        <div class="field">
          <label>Hora da Retirada</label>
          <input placeholder="Hora da Retirada" name="hora" id="hora" type="text" <?php if(isset($post_data)) echo 'value="'.$post_data['hora'].'"';?>>
        </div>
		<div class="field">
          <label>Data da Devolução</label>
          <input placeholder="Data da Devolução" name="dataDev" id="dataDev" type="text" <?php if(isset($post_data)) echo 'value="'.$post_data['dataDev'].'"';?>>
        </div>
      </div>
	
		
	
	  <div class="three fields">
		<div class="field">
          <label>CPF/CNPJ do Cliente</label>
          <input placeholder="CPF/CNPJ do Cliente" name="cliente" id="cliente" type="text" <?php if(isset($post_data)) echo 'value="'.$post_data['cliente'].'"';?>>
        </div>
		<div class="field">
		  <label style="margin-bottom: -1.3em;">Tipo de Cliente</label>
		  <div class="ui radio inverted checkbox 1">
			<input type="radio" name="tipocliente" value="fisica" <?php if(isset($post_data)) {if($post_data['tipocliente']=='fisica') echo 'checked="checked"';} else echo 'checked="checked"'; ?>>
			<label style="margin-right: 3em;">Pessoa Física</label>
		  </div>
		  
		  <div class="ui radio inverted checkbox 2">
			<input type="radio" name="tipocliente" value="juridica" <?php if(isset($post_data)) if($post_data['tipocliente']=='juridica') echo 'checked="checked"';?>>
			<label>Pessoa Jurídica</label>
		  </div>
		</div>
		<div class="field">
		  <label>Endereço</label>
		  <?php if(!isset($enderecos)){?>
		  <input type="hidden" name="carregarEnd" value="1">
		  <input type="submit" class="ui button" value="Buscar endereços">

		  <?php } else { ?>
				  <div class="ui selection dropdown">
				  <input type="hidden" name="endereco">
				  <i class="dropdown icon"></i>
				  <div class="default text">Escolha um Endereço</div>
				  <?php
					echo '<div class="menu">';
					foreach($enderecos as $end){
						echo '<div class="item" data-value="'.$end[0].'" >'.$end[1].'</div>';
					}
					echo '</div>';
					
				  ?>
				</div>
		  <?php }?>
		  </div>
	  </div>
	  
	  <div class="two fields">
		  <div class="field">
        <label>Tipo da Máquina</label>
        <div class="ui selection dropdown">
          <input type="hidden" name="tipomaquina">
          <i class="dropdown icon"></i>
          <div class="default text">Tipo de Máquina</div>
		  <?php
			if(isset($tipomaquinas)){
				echo '<div class="menu">';
				foreach($tipomaquinas as $tm){
					echo '<div class="item" data-value="'.$tm->getIdTipo().'" >'.$tm->getDescricao().'</div>';
					//echo '<option value='.$tm->getIdTipo().'>'.$tm->getIdTipo().'</option>\n';
				}
				echo '</div>';
			}
		  ?>
        </div>
      </div>
		  <div class="field">
          <label>Quantidade</label>
          <input placeholder="Quantidade" name="qtd" id="qtd" type="text" <?php if(isset($post_data)) echo 'value="'.$post_data['qtd'].'"';?>>
        </div>
      </div>
	  
	  <div class="field">
	  <input type="submit" class="ui button" value="Confirma">
	  </div>
    </div>
	</form>

	<?php
		if(isset($erro)){
	?>
		<div class="ui negative message transition">
		  <div class="header">
			<?php echo $erro; ?>
		  </div>
		</div>
	<?php }?>
    
	
	</br>
    </br>
	</br>
  </main>

  <footer>
    <span class="ui small borderless inverted bottom fixed menu">
      <p class="ui center item">Desenvolvido pela força do ódio</p>
    </span>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.8/dist/semantic.min.css">
  <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.8/dist/semantic.min.js"></script>
  <script type="text/javascript" src="http://localhost/ferramenta_bd1-master/Ferrament@.js"></script>
</body>

</html>