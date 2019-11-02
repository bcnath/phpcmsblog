<?php
include "includes/header.php"; 
include "includes/nav.php";
if(isset($_SESSION['username']))
{
?>
      <div class="main">
        <div class="row">
          <div class="col l6 m6 s12">
            <ul class="collection with-header">
              <li class="collection-header teal">
                <h5>Recent Posts</h5>
              </li>
              <?php
              $sql="select * from post order by id desc";
              $res=mysqli_query($conn,$sql);
              if(mysqli_num_rows($res)>0){
                while ($row=mysqli_fetch_assoc($res))
                {
              ?>
              <li class="collection-item">
                <a href=""><?php echo $row['title']?></a>
                <br>
                <span><a href="edit.php?id=<?php echo $row['id'];?>"><i class="material-icons tiny">edit</i>Edit</a> | <a href="delete.php?id=<?php echo $row['id'];?>" class="delete"><i class="material-icons tiny red-text">delete</i>Delete</a> | <a href=""><i class="material-icons tiny">share</i>Share</a> | <a href="http://localhost/materalizecss/postcontent.php?id=<?php echo $row['id'];?>" class="preview"><i class="material-icons tiny text">public</i>Preview</a></span>
              </li>
              <?php 
            }
            }
            ?>
            </ul>
          </div>
          <div class="col l6 m6 s12">
            <ul class="collection with-header">
              <li class="collection-header teal">
                <h5>Recent Comments</h5>
              </li>
              <li class="collection-item">
                <a href="">Lorem ipsum dolor sit amet conster adispicting elit.</a>
                <br>
                <span><a href=""><i class="material-icons tiny green-text">done</i>Approve</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Remove</a></span>
              </li>
              <li class="collection-item">
                <a href="">Lorem ipsum dolor sit amet conster adispicting elit.</a>
                <br>
                <span><a href=""><i class="material-icons tiny green-text">done</i>Approve</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Remove</a></span>
              </li>
              <li class="collection-item">
                <a href="">Lorem ipsum dolor sit amet conster adispicting elit.</a>
                <br>
                <span><a href=""><i class="material-icons tiny green-text">done</i>Approve</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Remove</a></span>
              </li>
              <li class="collection-item">
                <a href="">Lorem ipsum dolor sit amet conster adispicting elit.</a>
                <br>
                <span><a href=""><i class="material-icons tiny green-text">done</i>Approve</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Remove</a></span>
              </li>
              <li class="collection-item">
                <a href="">Lorem ipsum dolor sit amet conster adispicting elit.</a>
                <br>
                <span><a href=""><i class="material-icons tiny green-text">done</i>Approve</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Remove</a></span>
              </li>
              <li class="collection-item">
                <a href="">Lorem ipsum dolor sit amet conster adispicting elit.</a>
                <br>
                <span><a href=""><i class="material-icons tiny green-text">done</i>Approve</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Remove</a></span>
              </li>
              <li class="collection-item">
                <a href="">Lorem ipsum dolor sit amet conster adispicting elit.</a>
                <br>
                <span><a href=""><i class="material-icons tiny green-text">done</i>Approve</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Remove</a></span>
              </li>
              <li class="collection-item">
                <a href="">Lorem ipsum dolor sit amet conster adispicting elit.</a>
                <br>
                <span><a href=""><i class="material-icons tiny green-text">done</i>Approve</a> | <a href=""><i class="material-icons tiny red-text">clear</i>Remove</a></span>
              </li>
            </ul>
            
          </div>
        </div>
      </div>
      <div class="fixed-action-btn">
        <a href="write.php" class="btn-floating btn-large white-text waves-effect waves-light"><i class="material-icons">edit</i></a>
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
  
<script src="http://code.jquery.com/jquery-latest.min.js"></script> 
<!-- Compiled and minified JavaScript --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script> 
<script>
 $(document).ready(function(){
    $('.btn').sideNav();
    $('.fixed-action-btn').floatingActionButton();
  });
</body>
</html>