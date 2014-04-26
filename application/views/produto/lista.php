		        <div class="clear"></div>
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<tr>
							<th>
								Código
							</th>
							<th>
								Descrição
							</th>
							<th>
								Quantidade
							</th>
							<th>
								Valor
							</th>
							<th>
								Tipo de Produto
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
									<?=$item->idProduto;?>
								</td>
								<td>
									<?=$item->descricao;?>
								</td>
								<td>
									<?=$item->quantidade;?>
								</td>
								<td>
									<?=$item->valor;?>
								</td>
								<td>
									<?
										switch($item->inTipoProduto){
											case 0:
												echo "Liquido";
											break;
											case 1:
												echo "Alimento";
											break;
											case 1:
												echo "Produto de Limpeza";
											break;
										}
									?>
								</td>
								<td>
									<?=$item->dataCadastro;?>
								</td>
								<td align="center">
									&equiv;
								</td>
							</tr>
						<? } ?>
					</tbody>
				</table>