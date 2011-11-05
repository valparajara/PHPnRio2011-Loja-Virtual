<div class="row produtos">
		
			<?php
			foreach ($produtos AS $produto) {
				$link = array('controller' => 'produtos', 'action' => 'view', 'slug' => $produto['Produto']['slug']);
			?>
			<article class="span-one-third">
				<?php echo $this->Html->image('http://placehold.it/290x150', array('alt' => $produto['Produto']['titulo'], 'width' => 290, 'height' => 150, 'class' => 'thumbnail', 'url' => $link)) ?>
				<h2><?php echo $produto['Produto']['titulo'] ?></h2>
				<p class="price"><?php echo preg_replace('/([\d]+),/', '<span>$1</span>,', $this->Number->format($produto['Produto']['preco'], array('decimals' => ',', 'before' => 'R$ '))) ?></p>
				<?php echo $produto['Produto']['descricao'] ?>
				<?php echo $this->Html->link('Ver detalhes &raquo;', $link, array('class' => 'btn', 'escape' => false)) ?>
			</article>
			<?php } ?>
			
		</div>