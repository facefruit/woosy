<?php
function the_metadata_tags() {
    echo get_metadata_tags();
}
add_action('the_metadata_tags', the_metadata_tags);

function get_metadata_tags() {
?>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="keyworks" content="" />
        <meta name="description" content="" />
<?php
}
add_filter('get_metadata_tags', get_metadata_tags);