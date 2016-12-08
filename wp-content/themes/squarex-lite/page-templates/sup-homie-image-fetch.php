<?php
/**
 * Template Name: Sup Homie Image Fetch
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<?php
    echo "My API <br>";
    $response = wp_remote_get("http://localhost:3000/mostRecent");
    if( is_array($response) ) {
        $header = $response['headers']; // array of http header lines
        $body = $response['body']; // use the content
        echo $body;
        echo "<img src=" . $body . ">";
    } else {
        echo "error!!!";
    }

    echo "<br><br>Github API<br>";
    $stuff2 = wp_remote_get("https://api.github.com/users/tbenyon");
    if( is_array($stuff2) ) {
        $header = $stuff2['headers']; // array of http header lines
        $body = $stuff2['body']; // use the content
        echo $body;
        echo "<br><br>";
        $json_array = json_decode($body, true);
        echo $json_array["login"];
    } else {
        echo "error!!!";
    }
?>


<?php get_footer(); ?>
