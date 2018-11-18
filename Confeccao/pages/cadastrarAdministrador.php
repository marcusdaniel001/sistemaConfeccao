<?php    
    include_once("header.php");
?>
<br/>
 	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Formulario de Cadastro de Administrador
                </div>
                <div class="panel-body">
                    <div class="row">
                    	<form role="form">
	                        <div class="col-lg-6">
	                            <div class="form-group">
	                                <label>Nome</label>
	                                <input class="form-control" placeholder="Digite o nome" required>
	                            </div>
	                            <div class="form-group">
	                                <label>Endereço</label>
	                                <input class="form-control" placeholder="Digite o Endereço" required>
	                            </div>
	                            <div class="form-group">
	                                <label>CPF</label>
	                                <input class="form-control" placeholder="Digite o CPF" required>
	                            </div>
	                            <div class="form-group">
	                                <label>Contato</label>
	                                <input class="form-control" placeholder="Digite o contato" required>
	                            </div>
	                        </div>
	                        <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Formação</label>
                                    <input class="form-control" placeholder="Digite a Formação" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Digite o email" required>
                                </div>
                                <div class="form-group">
                                	<div class="row">
                                		<div class="col-lg-6">
		                                    <label>Data de Nascimento</label>
		                                    <input type="date" class="form-control" required>
	                                	</div>
	                                	<div class="col-lg-6">
		                                    <label>Data de contratação</label>
		                                    <input type="date" class="form-control" required>
		                                </div>
	                                </div>
                                </div>
                                <div class="form-group">
                                	<label>Foto</label>
                                    <input type="file" class="form-control" required>
                                </div>
                                <div style="text-align: right">
	                                <button type="submit" class="btn btn-success">Salvar</button>
	                                <button class="btn btn-danger">Cancelar</button>
	                            </div>
	                        </div>
	                    </form>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
<?php    
    include_once("footer.php");
?>
