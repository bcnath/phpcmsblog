<?php
include "includes/header.php";
include "includes/nav.php";
if(isset($_SESSION['username']))
{
?>
<?php
$searchqueryparameter=$_GET['id'];
$query="select * from post where id='$searchqueryparameter'";
$executequery=mysqli_query($conn,$query);
while ($datarows=mysqli_fetch_array($executequery)) 
{
  $titleupdate=$datarows['title'];
  $contentupdate=$datarows['content'];
  $authorupdate=$datarows['author'];
}
?>

<?php
$qry="delete from post where id='$searchqueryparameter'";
$deletequery=mysqli_query($conn,$qry);
if (isset($_POST['submit'])) {
  header("Location: post.php");
}

?>


<div class="row" style="padding-left: 300px;">
  <form class="col s12" action="delete.php?id=<?php echo $deletequery?>" method="POST" >
      <div class="row">
        <div class="input-field col s12">
          <input value="<?php echo $titleupdate ?>" type="text" id="title" class="materialize-textarea" name="title" disabled>
          <label for="title">Title</label>
        </div>

        <div class="input-field col s12">
          <input type="text" value="<?php echo $contentupdate ?>" id="content" class="materialize-textarea" name="content" disabled>
          <label for="content">Content</label>
        </div>

        <div class="input-field col s12">
          <input type="text" value="<?php echo $authorupdate ?>" id="author" class="materialize-textarea" name="author" disabled>
          <label for="author">Author</label>
        </div>

        <input type="submit" name="submit" value="Delete">
      </div>
    </form>
  </div>
  ?>


<?php
include "includes/writefooter.php";
}
else
{
  $_SESSION['message']="<div>Log In to continue</div>";
  header("Location: login.php");
} 
?>