<?php require('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>The DaiChronicles - Welcome To My Life</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=yes">
    <meta name="description" content="A place of positivity. A simple blog about the life of a young black woman trying to find her way in the world.">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
          <h1>The DaiChronicles <small>A place of positivity.</small></h1>
        </div>
      </div>
      <div class="row">
        <?php
            try {

                $stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
                while($row = $stmt->fetch()){

                    echo '<div class="col-xs-12 col-sm-12 col-md-12">';
                        echo '<h1><a href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
                        echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
                        echo '<p>'.$row['postDesc'].'</p>';
                        echo '<p><a href="viewpost.php?id='.$row['postID'].'">Read More</a></p>';
                    echo '</div>';

                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        ?>
      </div>
    </div>

  </body>
</html>
