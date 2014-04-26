            <section class="novo">
                <article class="col-mg-6">
                    <div class="portlet-fody form">
                        <header class="page-breadcrumb breadcrumb" align="center">
                            Novo
                        </header>
                        <br>
                        <?=form_open('class="form-horizontal"','cadastro/save');?> 
                            <input type="hidden" id="idCadastro" name="idCadastro" value="">
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Pessoa: 
                                </label>
                                <div class="col-md-4">
                                    <select name="inTipo" class="form-control">
                                        <option value=''></option>
                                        <option value='0'>
                                            Fisica
                                        </option>
                                        <option value='1'>
                                            Juridica
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Nome: 
                                </label>
                                <div class="col-md-5">
                                    <input type="text" value="" name="nome" class="form-control" required>
                                    <span id="erro">
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    CPF: 
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="" name="cpf" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    CNPJ: 
                                </label>
                                <div class="col-md-5">
                                    <input type="text" value="" name="cnpj" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">
                                    Telefone: 
                                </label>
                                <div class="col-md-4">
                                    <input type="text" value="" name="telefone" class="form-control">
                                </div>
                            </div>
                            <div class="page-breadcrumb breadcrumb">
                                <div class="pull-right">
                                    <input type="button" name="cadastro/lista" class="btn btn-default" id="btn-cancelar" value="Cancelar">
                                    <input type="submit" id="btn-cadastrar" class="btn btn-primary" value="Cadastrar">
                                </div>
                                <div class="clear"></div>
                            </div>
                        </form>
                    </div>
                </article>
            </section>