<?php include "includes/admin_header.php" ?>

<div id="wrapper">

  <!-- Navigation -->
  <?php include "includes/admin_navigation.php"   ?>
  <div id="page-wrapper">

    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
            Welcome to the Admin panel
            <small>Author</small>
          </h1>
          <?php
             if(isset($_GET['source'])){
               $source=$_GET['source'];

             }else{
              $source='';
             }
             switch ($source) {
                case 'add_post':
                 include "includes/add_post.php";
                 break;
                case '100':
                  echo 'Nice 100';
                  break;
                case '300':
                  echo 'Nice 300';
                  break;
               
               default:
                 include "includes/view_all_posts.php";
                 break;
             }
          ?>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /#page-wrapper -->
</div>
<?php include "includes/admin_footer.php" ?>