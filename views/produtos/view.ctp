<div class="produtos">
			<article class="produto row">
				<div class="span6">
					<img class="thumbnail" src="http://placehold.it/300" alt="Título do Produto" width="300" height="300" />
				</div>
				
				<div class="span10">
					<h1 class="span8"><?php echo $produto['Produto']['titulo'] ?></h1>
					<h2 class="span8"><?php echo $produto['Categoria']['titulo'] ?> &ndash; <?php echo $produto['Marca']['nome'] ?></h2>
					<p class="price"><?php echo preg_replace('/([\d]+),/', '<span>$1</span>,', $this->Number->format($produto['Produto']['preco'], array('decimals' => ',', 'before' => 'R$ '))) ?></p>
					<?php echo $produto['Produto']['descricao'] ?>
					
					<form target="pagseguro" method="post" action="https://pagseguro.uol.com.br/checkout/checkout.jhtml">
						<input type="hidden" name="email_cobranca" value="financeiro@assando-sites.com.br" />
						<input type="hidden" name="tipo" value="CBR" />
						<input type="hidden" name="moeda" value="BRL" />
						<input type="hidden" name="encoding" value="UTF-8" />
						  
						<input type="hidden" name="item_id" value="<?php echo $produto['Produto']['id'] ?>" />
						<input type="hidden" name="item_descr" value="<?php echo $produto['Produto']['titulo'] ?>" />
						<input type="hidden" name="item_valor" value="<?php echo $this->Number->format($produto['Produto']['preco'], array('decimals' => '', 'before' => '')) ?>" />
						  
						<input type="hidden" name="frete" value="0" />
						<input type="hidden" name="peso" value="0" />
						  
						
						<div class="input-append">
							<input type="text" class="mini" value="1" name="item_quant" id="quantidade" size="2" />
							<label for="quantidade" class="add-on">unidade(s)</label>
						</div>
						
						<input type="submit" class="btn success" value="Comprar &raquo;" />
					</form>
				</div>
			</article>			
		</div>