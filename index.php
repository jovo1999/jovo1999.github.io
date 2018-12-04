<!DOCTYPE html>
<html>
	<?php 
			require_once("blocks/head.php");
	?>
<body>
	<?php 
			require_once("blocks/header.php");
	?>
<div class="content">
	<section class="top">
		<img src="img/logo.png" title="logo"/>
		<div class="search">
			<form  method="GET" action="seatch.php?q=">
				<input type="text" id="input_search" name="q" placeholder=" Поиск товаров" />
				<input type="submit" id="button_search" name="button_search" value="Поиск" />
				<span></span>
			</form>
		</div>
			<div class="cart">
				<img src="img/shopping-cart.png" title="cart"/>
			</div>
		</ul>
	</section>
	<section class="content_nav">
		<ul>
			<li><a href="#">Главная</a></li>
			<li><a href="#">Новинки</a></li>
			<li><a href="#">Лидеры продаж</a></li>
			<li><a href="#">Распродажа</a></li>
		</ul>
	</section>
	<section class="main">
		<?php 
			require_once("blocks/block_categories.php");                                //      	block_categories !!!
		?>
		<?php 
			require_once("blocks/face.php");                                //			section face !!!
		?>
	</section>
</div>
	<?php 
		require_once("blocks/footer.php");                                //      	footer !!!
	?>
</body>
</html>