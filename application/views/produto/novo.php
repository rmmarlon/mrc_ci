            <br><br>
            <section class="novo">
                <article class="col-mg-6">
                    <div class="portlet-body form">
                        <header class="page-breadcrumb breadcrumb" align="center">
                            Novo Produto
                        </header>
                        <br>
                        <form class="form-horizontal" method="post"> 
                            <input type="hidden" name="idProduto">
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Descrição: 
                                </label>
                                <div class="col-md-5">
                                    <input type="text" value="" name="descricao" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Quantidade: 
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="" name="quantidade" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Preço: 
                                </label>
                                <div class="col-md-5">
                                    <input type="text" value="" name="valor" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Tipo: 
                                </label>
                                <div class="col-md-4">
                                    <select name="inTipoProduto" class="form-control">
                                        <?
                                            $tipo = array('Liquido','Alimento','Limpeza');
                                            foreach($tipo as $tp){
                                                echo "<option value='{$tp}'>{$tp}</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="page-breadcrumb breadcrumb">
                                <div class="pull-right">
                                    <input type="button" class="btn btn-default" id="btn-cancelar" value="Cancelar">
                                    <input type="button" id="btn-cadastrar" class="btn btn-primary" value="Cadastrar">
                                </div>
                                <div class="clear"></div>
                            </div>
                        </form>
                    </div>
                </article>
            </section>