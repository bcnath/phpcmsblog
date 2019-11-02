<?php
include "includes/header.php"; 
include "includes/nav.php";
if(isset($_SESSION['username']))
{
?>
<?php

$title =$feature_image = $content =$author = "";
$titleErr =$feature_imageErr = $contentErr =$authorErr = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(empty($_POST["title"])){
    $titleErr="Title is required";
  }
  else{
  $title= $_POST["title"];
  }
  if(empty($_POST["feature_image"])){
    $feature_imageErr="Image is required";
  }
  else{
  $feature_image= $_FILES["feature_image"];
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
  $sql="INSERT INTO POST(title,feature_image,content,author) VALUES('$title','$feature_image','$content','$author')";
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

<div class="row" style="padding-left: 300px;">
  <form class="col s12" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
      <div class="row">
        <div class="input-field col s12">
          <textarea id="title" class="materialize-textarea" name="title"></textarea>
          <span class="error"><?php echo $titleErr;?></span>
          <label for="title">Post Title</label>
          </div>

        <div class="input-field col s12">
          <div class="file-path-wrapper">
            <h6 for="title">Post Image</h6>
            <span class="Fieldinfo">Select Image:</span>
            <input type="file" placeholder="Upload Image" name="feature_image">
            <span class="error"><?php echo $feature_imageErr;?></span>
          </div>
        </div>

        <div class="input-field col s12">
          <textarea id="content" class="materialize-textarea" name="content"></textarea>
          <label for="content">Post Content</label>
          <span class="error"><?php echo $contentErr;?></span>
        </div>

        <div class="input-field col s12">
          <textarea id="author" class="materialize-textarea" name="author"></textarea>
          <label for="author">Post Author</label>
          <span class="error"><?php echo $authorErr;?></span>
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