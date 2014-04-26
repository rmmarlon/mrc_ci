		<section>
			<article id="view_cadaster">
<?
				if($this->session->flashdata('msg')){
					echo $this->session->flashdata('msg');
				}

				echo validation_errors();
				echo form_open('news/create');
					echo form_fieldset('Create a new news');
						echo '<p>';
							echo form_label('title: ');
							echo form_input('titulo',NULL,'class="input"');
						echo '</p>';
						echo '<div class="clear"></div>';
						echo '<p>';
							echo form_label('text: ');
							echo form_textarea('texto');
						echo '</p>';
						echo '<div class="clear"></div>';
						echo '<div class="floatRight">';
							echo anchor('news', 'Back', 'class="btn btn-default"');
							echo form_submit('submit','new news','class="btn btn-primary"');
						echo '</div>';
					echo form_fieldset_close();
				echo form_close();
?>
			</article>
		</section>