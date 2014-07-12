<?php
/**
 * Widget Template.
 *
 * @since     1.2.3
 */
?>

<?php if ( isset( $items ) ) : ?>
	<ul>
	<?php foreach ( (array) $items as $item ) : ?>
		<?php if ( $item['ticket'] ) { ?>
		<li><?php printf( __( '[%1$s] for %2$s' ),
			'<a href="' . esc_url( $item['link'] ) . '">' . esc_html( $item['changeset'] ) . '</a>',
			'<a href="' . esc_url( 'http://meta.trac.wordpress.org/ticket/' . $item['ticket'] ) . '">' . esc_html( '#' . $item['ticket'] ) . '</a>'
		); ?></li>
		<?php } else { ?>
		<li><?php printf( __( '[%1$s]' ),
			'<a href="' . esc_url( $item['link'] ) . '">' . esc_html( $item['changeset'] ) . '</a>'
		); ?></li>
		<?php } ?>
	<?php endforeach; ?>
	</ul>
	<p>
		<a href="<?php echo esc_url( 'https://meta.trac.wordpress.org/search?q=' . $user . '&noquickjump=1&changeset=on&max=20' ); ?>">
			<?php
				if ( $total == 2 ) {
					_e( "View both tickets on Trac.", 'wp-core-contributions-widget' );
				} else {
					printf( _n( "View the ticket on Trac.", "View all %d tickets on Trac.", $total, 'wp-core-contributions-widget' ), $total );
				}
			?>
		</a>
	</p>
<?php endif; ?>