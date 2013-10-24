<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package flatsome
 */
?>

<article id="post-0" class="post no-results not-found">
	<header class="entry-header">
		<h1 class="entry-title"><?php _e( 'Oooops! Nada foi encontrado.', 'flatsome' ); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Pronto para publicar o seu primeiro post? <a href="%1$s">Inicie aqui</a>.', 'flatsome' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Desculpe, mas não foi possível encontrar o termo solicictado. Por favor, tente novamente com algumas palavras-chave diferente.', 'flatsome' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'Parece que não conseguimos encontrar o que você está procurando. Talvez uma nova busca poderá ajudar.', 'flatsome' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .entry-content -->
</article><!-- #post-0 .post .no-results .not-found -->
