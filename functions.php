<?php

// Edit as required
function tnatheme_globals() {
    global $pre_path;
    global $pre_crumbs;
    if (substr($_SERVER['REMOTE_ADDR'], 0, 3) === '10.') {
        $pre_path = '';
        $pre_crumbs = array(
            'Commercial opportunities' => '/'
        );
    } else {
        $pre_crumbs = array(
            'About us' => '/about/',
            'Commercial opportunities' => '/about/commercial-opportunities/'
        );
        $pre_path = '/about/commercial-opportunities';
    }
}
// For live environment
// tnatheme_globals();

function dequeue_parent_style() {
    wp_dequeue_style('tna-styles');
    wp_deregister_style('tna-styles');
}
add_action( 'wp_enqueue_scripts', 'dequeue_parent_style', 9999 );
add_action( 'wp_head', 'dequeue_parent_style', 9999 );

// Enqueue styles
function tna_child_styles() {
    wp_register_style( 'tna-parent-styles', get_template_directory_uri() . '/css/base-sass.css.min', array(), EDD_VERSION, 'all' );
    wp_register_style( 'tna-child-styles', get_stylesheet_directory_uri() . '/style.css', array(), '0.1', 'all' );
    wp_enqueue_style( 'tna-parent-styles' );
    wp_enqueue_style( 'tna-child-styles' );
}
add_action( 'wp_enqueue_scripts', 'tna_child_styles' );

function tna_child_scripts() {
        wp_register_script( 'equal-heights', get_template_directory_uri() . '/js/jQuery.equalHeights.js', array(),
            EDD_VERSION, true );
        wp_register_script( 'equal-heights-var', get_template_directory_uri() . '/js/equalHeights.js', array(),
            EDD_VERSION, true );
        wp_enqueue_script( 'equal-heights' );
        wp_enqueue_script( 'equal-heights-var' );
}
add_action( 'wp_enqueue_scripts', 'tna_child_scripts' );


// Dynamic content via RSS feeds
function fww_rss( $rssUrl, $id ) {
    // Do we have this information in our transients already?
    $transient = get_transient( 'tna_rss_blog_transient' . $id );
    // Yep!  Just return it and we're done.
    if( ! empty( $transient ) ) {
        echo $transient ;
        // Nope!  We gotta make a call.
    } else {
        // Get feed source.
        $content = file_get_contents( $rssUrl );
        if ( $content !== false ) {
            $x = new SimpleXmlElement( $content );
            $n = 0;
            // Loop through each feed item and display each item as a hyperlink
            foreach ( $x->channel->item as $item ) :
                if ( $n == 1 ) {
                    break;
                }
                global $html;
                $enclosure  = $item->enclosure['url'];
                $namespaces = $item->getNameSpaces( true );
                $dc         = $item->children( $namespaces['dc'] );
                $pubDate    = $item->pubDate;
                $pubDate    = date( "l d M Y", strtotime( $pubDate ) );
                $html .= '<div class="col-md-6"><div class="fww-box clearfix">';
                if ( $enclosure ) {
                    $html .= '<div class="thumb-img"><a href="' . $item->link . '" title="' . $item->title . '"">';
                    $html .= '<img src="' . $enclosure . '" class="img-responsive" alt="' . $item->title . '">';
                    $html .= '</a></div>';
                }
                $html .= '<div class="entry-fww"><small>Blog</small><h2><a href="' . $item->link . '">';
                $html .= $item->title;
                $html .= '</a></h2>';
                $html .= '<small>' . $dc->creator . ' | ' . $pubDate . '</small>';
                $html .= '<p>' . $item->description . '</p></div>';
                $html .= '</div></div>';
                $n ++;
            endforeach;
            set_transient( 'tna_rss_blog_transient' . $id, $html, HOUR_IN_SECONDS );
            echo $html;
        }
        else {
            echo '<p>No content</p>';
        }
    }
}


