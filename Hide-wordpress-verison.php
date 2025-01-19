// Remove WordPress version from HTML meta tags
remove_action('wp_head', 'wp_generator');

// Remove WordPress version from RSS feeds
add_filter('the_generator', '__return_empty_string');

// Remove WordPress version from scripts and styles
function remove_version_from_assets($src) {
    if (strpos($src, 'ver=') !== false) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'remove_version_from_assets', 9999);
add_filter('script_loader_src', 'remove_version_from_assets', 9999);

// Remove WordPress version from REST API response
function remove_wp_version_rest($response) {
    if (isset($response['generator'])) {
        unset($response['generator']);
    }
    return $response;
}
add_filter('rest_index', 'remove_wp_version_rest', 10, 1);

// Remove WordPress version from response headers
function remove_wp_version_header() {
    return '';
}
add_filter('wp_version', 'remove_wp_version_header');

// Clean up additional metadata from the <head>
function clean_up_wp_head() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'wp_resource_hints', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'feed_links', 2);
}
add_action('init', 'clean_up_wp_head');

// Disable WordPress version in admin footer
function remove_version_from_admin_footer() {
    return '';
}
add_filter('update_footer', 'remove_version_from_admin_footer', 9999);

// Ensure no WordPress version appears in generator meta for oEmbed
function disable_wp_oembed_version($data) {
    if (isset($data['generator'])) {
        unset($data['generator']);
    }
    return $data;
}
add_filter('oembed_response_data', 'disable_wp_oembed_version', 10, 1);
