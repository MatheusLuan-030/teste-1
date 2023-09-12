<HTML>
    <HEAD>
        <meta charset=".utf-8">
        <script type="text/javascript"></script>   
    </HEAD>
<BODY>
    <?PHP
        $nome=$_POST['nome'];
        $data_nasc=$_POST['data_nasc'];
        $endereco=$_POST['endereco'];
        $cidade=$_POST['cidade'];
        require('conexao.php');
        $sqlinsert="insert into clientes values (",'$nome', '$data_nasc', '$endereco', '$cidade')";
        mysql_query($sqlinsert)or die('não foi possível inserir');
        echo"<script>alert('cadastro inserido com sucesso')</script>;
        ?>
</BODY>
</HTML>
