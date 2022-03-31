<?php
    if(isset($_POST['submit']))
    {
        include_once('backend/config.php');
        
        $nome =$_POST['nome'];
        $email =$_POST['email'];
        $telefone =$_POST['telefone'];
        $rua =$_POST['rua'];
        $estado =$_POST['estado'];
        
       $result = mysqli_query($conexao, "INSERT INTO landing.pessoas(nome,email,telefone,rua,estado) 
       VALUES ('$nome','$email','$telefone','$rua','$estado')");
    
    if ($conexao->query($sql)===TRUE){
        echo "new record create sucessfuly";
    }else{
        echo"error:" .$sql ."<br>".$conn->error;
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulário de cadastro</title>
    <link href="styleFormulario.css" rel="stylesheet">
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>formulário dos clientes</b></legend>
                <br>
                <div class="inputBox">
                    <label for="name" class="labelinput">nome</label>
                    <input type="text" name="nome" id="nome" class="inputUser"required>
                </div>
                <br>
                <div class="inputBox">
                    <label for="name"class="labelinput">E-mail</label>
                    <input type="email" name="email" id="email" class="inputUser"required>
                </div>
                <br>
                <div class="inputBox">
                    <label for="telefone"class="labelinput">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" class="inputUser"required>
                </div>
                <br>
                <div class="inputBox">
                    <label for="rua"class="labelinput">Rua</label>
                    <input type="text" name="rua" id="rua" class="inputUser"required>
                </div>
                <br>
                <div class="inputBox">
                    <label for="numero"class="labelinput">Número </label>
                    <input type="text" name="numero" id="numero" class="inputUser"required>
                </div>
                <br>
                <div class="inputBox">
                    <label for="estado"class="labelinput">Estado</label>
                    <input type="text" name="estado" id="estado" class="inputUser"required>
                </div>
                <br>
                Níveis de Acesso: 
				<select name="select_niveis_acesso">
					<option>Selecione</option>
					<?php
						$result_niveis_acessos = "SELECT * FROM niveis_acessos";
						$resultado_niveis_acesso = mysqli_query($conn, $result_niveis_acessos);
						while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
							<option value="<?php echo $row_niveis_acessos['id']; ?>"><?php echo $row_niveis_acessos['nome']; ?></option> <?php
						}
					?>
				</select><br><br>
			    <input type="submit" value="Cadastrar">
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>