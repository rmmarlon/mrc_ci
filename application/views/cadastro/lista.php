		        <div class="clear"></div>
		        <table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<tr>
							<th>
								Código
							</th>
							<th>
								Nome
							</th>
							<th>
								Cpf
							</th>
							<th>
								Telefone
							</th>
							<th>
								Pessoa Tipo
							</th>
							<th>
								Data Cadastro
							</th>
							<th>
								Editar
							</th>
						</tr>
					</thead>
					<tbody>
						<? foreach($itens as $item){ ?>
							<tr>
								<td>
									<?=$item->idCadastro;?>
								</td>
								<td>
									<?=$item->nome;?>
								</td>
								<td>
									<?=$item->cpf;?>
								</td>
								<td>
									<?=$item->telefone;?>
								</td>
								<td>
									<?=($item->inTipo == 0)? 'Fisica' : 'Juridica'; ?>
								</td>
								<td>
									<?=$item->dataCadastro;?>
								</td>
								<td align="center">
									<a href="#" act="upd" class="acoes" name="cadastro">&equiv;</a>
								</td>
							</tr>
						<? } ?>
					</tbody>
				</table>