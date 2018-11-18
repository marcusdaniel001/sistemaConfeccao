<?php    
    include_once("header.php");
?>

        
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Faccionista</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="text-align: right;">
                <a href="cadastrarFaccionista.php"><button class="btn btn-success" >Cadastrar Faccionista</button></a>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-Mail</th>
                            <th>Formação</th>
                            <th style="text-align: center">Contato</th>
                            <th style="text-align: center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeC">
                            <td>Tasman</td>
                            <td>Internet Explorer 5.2</td>
                            <td>Mac OS 8-X</td>
                            <td class="center">1</td>
                            <td class="center" style="text-align: center">
                                <a href="cadastrarFaccionista.php"><button class="btn btn-info" >Alterar</button></a>
                                <a href="cadastrarFaccionista.php"><button class="btn btn-danger" >Deletar</button></a>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Misc</td>
                            <td>NetFront 3.1</td>
                            <td>Embedded devices</td>
                            <td class="center">-</td>
                            <td class="center" style="text-align: center">
                                <a href="cadastrarFaccionista.php"><button class="btn btn-info" >Alterar</button></a>
                                <a href="cadastrarFaccionista.php"><button class="btn btn-danger" >Deletar</button></a>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Misc</td>
                            <td>NetFront 3.4</td>
                            <td>Embedded devices</td>
                            <td class="center">-</td>
                            <td class="center" style="text-align: center">
                                <a href="cadastrarFaccionista.php"><button class="btn btn-info" >Alterar</button></a>
                                <a href="cadastrarFaccionista.php"><button class="btn btn-danger" >Deletar</button></a>
                            </td>
                        </tr>
                        <tr class="gradeX">
                            <td>Misc</td>
                            <td>Dillo 0.8</td>
                            <td>Embedded devices</td>
                            <td class="center">-</td>
                            <td class="center" style="text-align: center">
                                <a href="cadastrarFaccionista.php"><button class="btn btn-info" >Alterar</button></a>
                                <a href="cadastrarFaccionista.php"><button class="btn btn-danger" >Deletar</button></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

        <!-- /#page-wrapper -->
<?php    
    include_once("footer.php");
?>
   