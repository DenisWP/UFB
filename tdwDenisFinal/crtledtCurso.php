<?php require_once('conexao.php'); ?>

<?php 
    session_start();
    if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"])){
        header("Location: administrator.php");
        exit;
    }else{
        echo "Bem vindo ! Você já está logado !";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editando...</title>
</head>
<body>
 				<?php 

                    $codigo = isset($_POST["tCodigo"])?$_POST["tCodigo"]:"[não informado]";
                    $ednomedocurso = isset($_POST["tnomeC"])?$_POST["tnomeC"]:"[não informado]";
                    $edduracao = isset($_POST["tduracao"])?$_POST["tduracao"]:"[não informado]";
                    //$edturno = isset($_POST["sturnoC"])?$_POST["sturnoC"]:"[não informado]";
                    $edmensalidade = isset($_POST["tmensalidade"])?$_POST["tmensalidade"]:"[não informado]";
                    $eddescritivo = isset($_POST["tdescritivo"])?$_POST["tdescritivo"]:"[não informado]";
                                                                                              
                    $edcurso = "UPDATE cursos SET nomedocurso = '$ednomedocurso', duracao = '$edduracao', mensalidades = '$edmensalidade', descritivo = '$eddescritivo' WHERE codigo = '$codigo'";

                    $query = $mysqli -> query($edcurso);

                    if($query){
                       echo "<script>alert(\"Edição realizado com sucesso !\")</script>";
                       echo "<script>window.location = \"editarCurso.php\"</script>";
					}else{/*seu ouve algum erro...*/
						echo "<script>alert(\"Edição NÃO realizada !\")</script>";
						echo "<script>window.location = \"editarCurso.php\"</script>";
					}

                ?>
	
</body>
</html>