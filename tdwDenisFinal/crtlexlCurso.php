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
	<title>Excluindo...</title>
</head>
<body>
 				<?php 

                    $codigo = isset($_POST["tCodigo"])?$_POST["tCodigo"]:"[não informado]";
                   
                    $edcurso = " DELETE FROM  cursos  WHERE codigo = '$codigo'";
                    $query = $mysqli -> query($edcurso);

                    if($query){
                       echo "<script>alert(\"Curso excluído com sucesso !\")</script>";
                       echo "<script>window.location = \"excluirCurso.php\"</script>";
					}else{/*seu ouve algum erro...*/
						echo "<script>alert(\"Edição NÃO realizada !\")</script>";
						echo "<script>window.location = \"excluirCurso.php\"</script>";
					}

                ?>
	
</body>
</html>