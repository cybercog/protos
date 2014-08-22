<?php

function getTemplate() {
    $template = "form";
    
    if ( isset( $_GET['a'] ) && $_GET['a'] != "" ) {
        $action = $_GET['a'];
        if ( file_exists( "template/" . $action . ".html" ) ) {
            $template = $action;
        }
    }
    
    return $template;
}

$post = "";
if ( ! empty( $_POST ) ) {
    foreach ( $_POST as $key => $value ) {
        if ( is_array( $value ) ) {
            $value = "[" . key( $value ) . "] => " . $value[0];
        }
        $post .= "<li>[" . $key . "] => " . $value . "</li>";
    }
    $post = "<ul>" . $post . "</ul>";
}

$template = getTemplate();

$path = "scheme.html";
$scheme = file_get_contents( "template/" . $path );

if ( $template == "grid-960" ) {
    $scheme = str_replace( "grid.css", "grid-960.css", $scheme );
}

$content = file_get_contents( "template/" .$template . ".html" );
$replace = array( $content, $post );
$search  = array( "{content}", "{post}" );
$output  = str_replace( $search, $replace, $scheme );

if ( $template == "typo" ) {
    $typo_progress = "";
    require_once( "dynamic/typo_progress.php" );
    $output = str_replace( "{typo_progress}", $typo_progress, $output );
    
    $definition_list = file_get_contents( "dynamic/definition_list" );
    $output = str_replace( "{definition_list}", $definition_list, $output );
}

echo $output;
