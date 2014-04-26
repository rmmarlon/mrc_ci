            <section class="novo">
                <article class="col-mg-6">
                    <div class="portlet-body form">
                        <header class="page-breadcrumb breadcrumb" align="center">
                            Nova Venda
                        </header>
                        <br>
                        <form class="form-horizontal" method="post"> 
                            <input type="hidden" name="idVenda">
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Descrição da Venda: 
                                </label>
                                <div class="col-md-5">
                                    <input type="text" value="" name="descricaoVenda" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Quantidade vendida: 
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="" name="quantidadeVenda" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Preço: 
                                </label>
                                <div class="col-md-5">
                                    <input type="text" value="" name="valorVenda" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Tipo: 
                                </label>
                                <div class="col-md-4">
                                    <select name="inTipo" class="form-control">
                                        <?
                                            $tipo = array('Liquido','Alimento','Limpeza');
                                            foreach($tipo as $tp){
                                                echo "<option value='{$tp}'>{$tp}</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Tipo: 
                                </label>
                                <div class="col-md-4">
                                    <?
                                    	$sit = array('Pago','a pagar');
                                    	echo form_dropdown('inSituacao',$sit,'','class="form-control"');
                                    ?>
                                </div>
                            </div>
                            <div class="page-breadcrumb breadcrumb">
                                <div class="pull-right">
                                    <input type="button" class="btn btn-default" id="btn-cancelar" value="Cancelar">
                                    <input type="button" id="" class="btn btn-primary" value="Cadastrar">
                                </div>
                                <div class="clear"></div>
                            </div>
                        </form>
                    </div>
                </article>
            </section>