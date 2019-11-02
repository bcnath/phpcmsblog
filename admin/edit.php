<?php
include "includes/header.php";
include "includes/nav.php";
if(isset($_SESSION['username']))
{
?>
<?php

$title = $content =$author = "";
$titleErr = $contentErr =$authorErr = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(empty($_POST["title"])){
    $titleErr="Title is required";
  }
  else{
  $title= $_POST["title"];
  }
  if(empty($_POST["content"])){
    $contentErr="Content is required";
  }
  else{
  $content=$_POST["content"];
  }
  if(empty($_POST["author"])){
    $authorErr="Author is required";
  }
  else{
  $author=$_POST["author"];
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  
  $updatequery=$_GET['id'];
  $sql="update post set title='$title',content='$content',author='$author'where id='$updatequery'";
  $res=mysqli_query($conn,$sql);
  if ($res) {
    header("Location: post.php");
    $_SESSION['message']="Your blog has been sucessfully posted";
  }
  else{
    header("Location: write.php");
    $_SESSION['message']="Sorry Something Went Wrong,Please try Again";
  }
  mysqli_close($conn);
}
?>
<?php
$searchqueryparameter=$_GET['id'];
$query="select * from post where id='$searchqueryparameter'";
$executequery=mysqli_query($conn,$query);
while ($datarows=mysqli_fetch_array($executequery)) {
  $titleupdate=$datarows['title'];
  $contentupdate=$datarows['content'];
  $authorupdate=$datarows['author'];
}
?>

<div class="row" style="padding-left: 300px;">
  <form class="col s12" action="edit.php?id=<?php echo $searchqueryparameter?>" method="POST" >
      <div class="row">
        <div class="input-field col s12">
          <input value="<?php echo $titleupdate ?>" type="text" id="title" class="materialize-textarea" name="title">
          <label for="title">Edit Title</label>
        </div>

        <div class="input-field col s12">
          <input type="text" value="<?php echo $contentupdate ?>" id="content" class="materialize-textarea" name="content">
          <label for="content">Edit Content</label>
        </div>

        <div class="input-field col s12">
          <input type="text" value="<?php echo $authorupdate ?>" id="author" class="materialize-textarea" name="author">
          <label for="author">Edit Author</label>
        </div>

        <input type="submit" name="submit" value="Submit">
      </div>
    </form>
  </div>



<?php
include "includes/writefooter.php";
}
else
{
  $_SESSION['message']="<div>Log In to continue</div>";
  header("Location: login.php");
} 
?>