				<div class="clear"></div>
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<tr>
							<th>
								Código
							</th>
							<th>
								descricaoVenda
							</th>
							<th>
								quantidadeVenda
							</th>
							<th>
								valorVenda
							</th>
							<th>
								Tipo
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
									<?=$item->idVenda;?>
								</td>
								<td>
									<?=$item->descricaoVenda;?>
								</td>
								<td>
									<?=$item->quantidadeVenda;?>
								</td>
								<td>
									<?=$item->valorVenda;?>
								</td>
								<td>
									<?
										switch($item->inTipo){
											case 0:
												echo "Saída";
											break;
											case 1:
												echo "Pessoal";
											break;
											case 2:
												echo "Despesas";
											break;
										}
									?>
								</td>
								<td>
									<?=$item->dataCadastro;?>
								</td>
								<td align="center">
									<a href="#" act="upd" id="<?=$item->idVenda;?>" class="acoes" name="cadastro">&equiv;</a>
								</td>
							</tr>
						<? } ?>
					</tbody>
				</table>