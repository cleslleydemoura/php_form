<?php
    require_once("includes/conectarBD.php");
    include_once 'includes/cabecalho.php';
    echo "Data/Hora Atual: ";
    require 'includes/data.inc';
?>
    <table width="60%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
            <td height="60"><div align="center"><font face="Arial" size="4"><b>Cadastro de Bolsas</b></font></div></td>
        </tr>
    </table><br/>
    <?php
        $modeloBol = $_POST["bolModelo"];
        $fabricanteBol = $_POST["bolFabricante"];
        $sql = mysqli_query($conexao,"INSERT INTO bolsa (bolModelo, bolFabricante) VALUES ('$modeloBol', '$fabricanteBol')") or die("Erro no comando SQL!!!<br/> <b><a href='formIncluirBolsas.php'><b>Voltar Para a Inclusão de Bolsas</a><br/>".mysqli_error($conexao));
        echo "<div align=center>Os dados da Bolsa $modeloBol foram cadastrados com sucesso!!! Veja abaixo os dados cadastrados.<br/><br/>";
        echo "<table class='striped'>";
        echo "<tr>";
        echo "<th><div>Modelo</div></th>";
        echo "<th><div>Fabricante</div></th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>$modeloBol</font></td>";
        echo "<td>$fabricanteBol</font></td>";
        echo "</tr>";
        echo "</table><br/>";
        echo "<div align='center'><font face='Arial' size='2'>";
        echo "<b><a href='formIncluirBolsas.php'><b>Voltar para a Inclusão de Bolsas</a><br/>";
        echo "<b><a href='formAlterarBolsas.php'><b>Voltar para a Alteração de Bolsas</a><br/>";
        echo "<b><a href='formExcluirBolsas.php'><b>Voltar para a Exclusão de Bolsas</a><br/>";
        echo "<b><a href='menuPesquisarBolsas.php'><b>Voltar para a Pesquisa de Bolsas</a><br/>";
        echo "<b><a href='index.php'><b>Voltar para o menu de Opções Gerenciamento de Bolsas</a><br/>";
    ?>
<?php
    include_once 'includes/rodape.php';
?>
