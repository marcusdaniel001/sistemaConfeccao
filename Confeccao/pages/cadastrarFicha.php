<?php    
    include_once("header.php");
?>
<br/>
 	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Formulario de Cadastro de Fichas Matrizes
                </div>
                <div class="panel-body">
                    <div class="row">
                    	<form role="form">
	                        <div class="col-lg-3">
	                            <div class="form-group">
	                                <label>Modelo</label>
	                                <input class="form-control" placeholder="Digite o modelo" required>
	                            </div>
	                            <div class="form-group">
	                                <label>Largura</label>
	                                <input class="form-control" placeholder="Digite o largura" required>
	                            </div>
	                            <div class="form-group">
	                                <label>Cortador</label>
	                                <input class="form-control" placeholder="Digite o nome do cortador" required>
	                            </div>
	                            <div class="form-group">
	                                <label>Faccionista</label>
	                                <select class="form-control" name="carlist" form="carform">
                                      <option value="volvo">Selecione</option>
                                      <option value="saab">Joana</option>
                                      <option value="opel">Cida</option>
                                      <option value="audi">Jubileia</option>
                                    </select>
	                            </div>
                                <div class="form-group">
                                    <label>Tecido</label>
                                    <input type="file" class="form-control" placeholder="Digite o Tecido" required>
                                </div>
	                        </div>
	                        <div class="col-lg-9">
                                <div class="form-group">
                                    <label>Referencia</label>
                                    <input class="form-control" placeholder="Digite a Referencia" required>
                                </div>
                                <div class="form-group">
                                    <label>Tipo de enfesto</label>
                                    <input type="text" class="form-control" placeholder="Digite o enfesto" required>
                                </div>
                                <div class="form-group">
                                	<div class="row">
                                		<div class="col-lg-6">
		                                    <label>Data de Saída</label>
		                                    <input type="date" class="form-control" required>
	                                	</div>
	                                	<div class="col-lg-6">
		                                    <label>Data de Retorno</label>
		                                    <input type="date" class="form-control" required>
		                                </div>
	                                </div>
                                </div>
                                <div class="form-group">
                                	<label>Foto</label>
                                    <input type="file" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label>Tamanho</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">P
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">M
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">G
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">GG
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <label>Quantidade</label>
                                            <input type="number" class="form-control" required>
                                            <input type="number" class="form-control" required>
                                            <input type="number" class="form-control" required>
                                            <input type="number" class="form-control" required>
                                        </div>
                                        <div class="col-lg-2">
                                            <label>Faccionista</label>
                                            <select class="form-control" name="carlist" form="carform">
                                              <option value="volvo">Selecione</option>
                                              <option value="saab">Joana</option>
                                              <option value="opel">Cida</option>
                                              <option value="audi">Jubileia</option>
                                            </select>
                                            <select class="form-control" name="carlist" form="carform">
                                              <option value="volvo">Selecione</option>
                                              <option value="saab">Joana</option>
                                              <option value="opel">Cida</option>
                                              <option value="audi">Jubileia</option>
                                            </select>
                                            <select class="form-control" name="carlist" form="carform">
                                              <option value="volvo">Selecione</option>
                                              <option value="saab">Joana</option>
                                              <option value="opel">Cida</option>
                                              <option value="audi">Jubileia</option>
                                            </select>
                                            <select class="form-control" name="carlist" form="carform">
                                              <option value="volvo">Selecione</option>
                                              <option value="saab">Joana</option>
                                              <option value="opel">Cida</option>
                                              <option value="audi">Jubileia</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Observação</label>
                                            <textarea class="form-control"> 
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>Materiais</label>
                                            <textarea class="form-control"> 
                                            </textarea>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Serviços</label>
                                            <textarea class="form-control"> 
                                            </textarea>
                                        </div>
                                    </div>
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
