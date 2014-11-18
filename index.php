<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>


    
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
    
  </head>
  <body>
  
  	<div class="page-header">
  		<h1>Password <small>generatr</small></h1>
  	</div>
    
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-xs-6">
    			<div class="panel panel-default">
    			
    				<div class="panel-heading">
    					<h3 class="panel-title">Dados</h3>
    				</div>
    				
    				<div class="panel-body">
					    <form role="form">
					    	<div class="form-group">
					    		<label for="exampleInputEmail1">Email</label>
					    		<input type="text" class="form-control" id="txtValor" placeholder="Digite o email / cpf / telefone">
					    	</div>
					    	
					    	<div class="form-group">
					    		<label for="exampleInputPassword1">Senha</label>
					    		<input type="text" class="form-control" id="txtSenha" placeholder="Password">
					    	</div>
					    	
					    	<button type="button" id="btnGerar" class="btn btn-default">Gerar</button>
					    </form>
    				</div>
    			</div>
    		</div>
    		<div class="col-xs-6">
    			
    			<div class="panel panel-default">
    				<div class="panel-heading">
    					<h3 class="panel-title">Resultado</h3>
    				</div>
    				
    				<div class="panel-body" id="divResultado">
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	
	
	<script type="text/javascript">
	$(document).ready(function(){
		$("#btnGerar").click(function(){
			var senha = $("#txtSenha").val();
			var valor = $("#txtValor").val();
			var data = "password=" + senha + "&valor=" + valor;

			$.ajax({
				url: "crypt.php",
				data: data,
				type: "POST",
				dataType: "html",
				success: function(response) {
					$("#divResultado").html(response);
				}
			});
		});
	});

    </script>
  </body>
</html>