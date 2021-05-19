<?php
if (isset($_POST["create_user"])) {
  //$user_id = $_POST['user_id'];
  $user_firstname = $_POST['user_firstname'];
  $user_lastname = $_POST['user_lastname'];
  $user_role = $_POST['user_role'];
  // $post_image = $_FILES['image']['name'];
  // $post_image_temp = $_FILES['image']['tmp_name'];
  $username = $_POST['username'];
  $user_email = $_POST['user_email'];
  $user_password = $_POST['user_password'];

  //$post_comment_count = 4;
  // move_uploaded_file($post_image_temp, "../images/$post_image");
  $query =
  "INSERT INTO users(user_firstname,
   user_lastname,user_role,username,user_email,
   user_password) ";
  $query .= "VALUES('{$user_firstname}','{$user_lastname}',
   '{$user_role}','{$username}','{$user_email}','{$user_password}') ";
  $create_user_query = mysqli_query($connection, $query);
  confirmQuery($create_user_query);
  echo "user created successfully" . " " . "<a href='users.php'>View Users</a>";
}


?>



<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="firstname">Firstname</label>
    <input type="text" class="form-control" name="user_firstname" />
  </div>

  <div class="form-group">
    <label for="lastname">Lastname</label>
    <input type="text" class="form-control" name="user_lastname" />
  </div>


  <div class="form-group">
    <select name="user_role" id="">
      <option value="subscriber">Select option</option>
      <option value="admin">Admin</option>
      <option value="subscriber">Subscriber</option>
    </select>
  </div>

  <!-- <div class="form-group">
    <label for="image">Post Image</label>
    <input type="file" class="form-control" name="image" />
  </div> -->
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" />
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="user_email" />
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="user_password" />
  </div>
  <div>
    <input class='btn btn-primary' type="submit" name="create_user" value="Add User" />
  </div>


</form>