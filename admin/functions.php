<?php

function insert_catergories()
{
  global $connection;
  if (isset($_POST['submit'])) {
    $cat_title = $_POST['cat_title'];

    if ($cat_title == '' || empty($cat_title)) {
      echo "This field should not be empty";
    } else {
      $query = "INSERT INTO categories(cat_title) VALUE('{$cat_title}') ";

      $create_catregory_query = mysqli_query($connection, $query);

      if (!$create_catregory_query) {
        die('Query Failed' . mysqli_error($connection));
      }
    }
  }
}