<?php require('includes/config.php');

$stmt = $db->prepare('SELECT postID, postTitle, postCont, postDate FROM blog_posts WHERE postID = :postID');
$stmt->execute(array(':postID' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
    header('Location: ./');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog - <?php echo $row['postTitle'];?></title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <h1>Blog</h1>
          <hr />
          <p><a href="./">Blog Index</a></p>


          <?php
              echo '<div class="col-xs-12 col-sm-12 col-md-12">';
                  echo '<h1>'.$row['postTitle'].'</h1>';
                  echo '<p>Posted on '.date('jS M Y', strtotime($row['postDate'])).'</p>';
                  echo '<p>'.$row['postCont'].'</p>';
                  echo '</div>';
          ?>
        </div>
      </div>
    </div>


</body>
</html>
