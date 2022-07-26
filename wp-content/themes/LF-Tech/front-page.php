<?php get_header(); ?>
<div class="container">

	<div class="acesso-rapido">

		<div class="texts">

			<h1 class="title">Acesso Rápido</h1>
			<span class="description"> Informações, preços, e serviços, navegue com facilidade em busca do que deseja</span>

		</div>
		<div class="cards">

			<?php

			wp_nav_menu(
				array('theme_location' => 'extra-menu',
				      'container' => 'container',
				));
			?>

		</div>

	</div>

</div>

<?php get_footer(); ?>
