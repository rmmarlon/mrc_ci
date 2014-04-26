		<div style="width:50%; margin:auto">
            <h2>
				Codeigniter tutorial news
            </h2>
			<?=anchor('news/create', 'New','class="btn btn-default" title="news"');?>
            <table class="table table-bordered table-condensed table-hover">
                <thead>
                    <tr>
                        <th>
                            Titulo
                        </th>
                        <th>
                            Texto
                        </th>
                        <th>
                            View this article
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <? foreach($news as $news_item): ?>
                        <tr>
                            <td>
                                <?=$news_item['titulo']?>
                            </td>
                            <td id="main">
                                <? if(strlen($news_item['texto']) >20){ ?>
                                    <span title="<?=substr($news_item['texto'],0);?>"><?=substr($news_item['texto'], 0, 20).'...';?></span>
                                <? } else{
                                        echo $news_item['texto'];
                                   }
                                ?>
                            </td>
                            <td>
                                <a href="news/<?php echo $news_item['slug'] ?>" target="_blank">View article</a>
                            </td>
                        </tr>
                    <?	endforeach; ?>
                </tbody>
            </table>
        </div>