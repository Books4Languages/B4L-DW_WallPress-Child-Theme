<?php

// THERE'S AN ISSUE CREATING A POST. MORE THAN A LINE IS CREATED (LIKE 2 OR 3 AND ONE CAN BE NULL)... BUT THE UPDATE THEN WORKS GOOD!
// IF YOU DELETE USELESS DATA THEN THE FUNCTIONALITY WORKS GOOD --> NEED TO SOLVE THIS ISSUE
/**
 *  This function creates the metabox field
**/
function url_add_custom_box()
{
    $screens = ['post', 'url_cpt'];
    foreach ($screens as $screen) {
        add_meta_box(
            'url_box_id',           // Unique ID
            'Post URL metabox',       // Box title
            'url_custom_box_html',  // Content callback, must be of type callable
            $screen                   // Post type
        );
    }
}
add_action('add_meta_boxes', 'url_add_custom_box');

/**
 *  This function talks with database and it saves data in it
**/
function url_save_postdata($post_id) {
  //Always call global wpdb
  global $wpdb;
  //Name of database
  $table = $wpdb->prefix.'postmeta';
  //Input text of metabox
  $text = trim($_POST['url_field']);
  //Data to put in the database
  $data = array('post_id' => $post_id, 'meta_key' => 'url_field', 'meta_value' => $text);
  //Where clause to update data
  $where = array('post_id' => $post_id, 'meta_key' => 'url_field');
  //Format of data
  $format = array('%d','%s','%s');
  $format2 = array('%d','%s');
  /**
    * In if condition is called the update function: it runs and return an integer that is the number of lines modified
    * If the update function return '0' no lines are modified and so we need to insert a new one (given by insert function),
    * otherwise the line is modified directly in the if condition
  **/
  if ($wpdb->update($table,$data,$where,$format,$format2) == 0){
    $wpdb->insert($table,$data,$format);
  }
}
add_action('save_post', 'url_save_postdata');

/**
 * Metabox function --> called in the first function (metabox field)
 * It creates the metabox
 * Once that the url is choosen it remains in the metabox also if you close/reopen the page or if you refresh it
 * All comments inside the function are test to print values of parameters used
**/
function url_custom_box_html($post) {
  global $wpdb;
  $post_id = get_the_ID();
  // echo "<br>" . $post_id . "<br>";
  $query = "SELECT meta_value FROM " . $wpdb->prefix . "postmeta WHERE post_id = " . $post_id . " AND meta_key = 'url_field'";
  // echo $query;
  // echo '<br>';
  $value = $wpdb->get_var($query);
  // var_dump($value);
  // echo '<br>';
  ?>
  <label for="url_field">Post URL:</label>
  <textarea id="url_field" name="url_field" rows="1" cols="50"><?php echo $value; ?>
  </textarea>
  <?php
  // echo "<br>This is the content: " . $value;
}

/**
 * Function that show the URL after the post content
 * It prints the value from the database as a link (<a>)
**/
add_filter( 'the_content', function( $content ) {
  global $wpdb;
  $post_id = get_the_ID();
  $query = "SELECT meta_value FROM " . $wpdb->prefix . "postmeta WHERE post_id = " . $post_id . " AND meta_key = 'url_field'";
  $value = $wpdb->get_var($query);
  return $content . '<br><a href=' . $value . '>' . $value . '</a>';
}, 1);
