<?php
// Creating the widget
class footer_1 extends WP_Widget {

// The construct part
function __construct() {

	parent::__construct(

// Base ID of your widget
		'footer_1',

// Widget name will appear in UI
		__('Rodapé esquerda', 'wpb_widget_domain'),

// Widget description
		array( 'name' => __('Teste', 'wpb_widget_domain'),
                'description' => __( 'Área de rodapé a esquerda.', 'wpb_widget_domain' ), )
	);

}

// Creating widget front-end
public function widget( $args, $instance ) { ?>

        <div>
            ola
        </div>

<?php }

// Class wpb_widget ends here

}

//register and load the widget
function wpb_load_widget() {
	register_widget( 'footer_1' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
