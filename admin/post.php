<?php
include "includes/header.php";
include "includes/nav.php";
?>
<div class="row main">
	<div class="col s12 m12 l12">
 <ul class="collection with-header">
  <li class="collection-header teal">
    <h5>Posts</h5>
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
</div>
<script>
  const del=document.querySelectorAll(".delete");
  del.forEach(function(item,index)
  {
    item.addEventListner("click",deleteNow)
  })
  function deleteNow(e)
  {
    e.preventDefault();
    if (confirm("Do you really Want to delete")) 
    {
     const xhr=new XMLHttpRequest();
     xhr.open("GET","delete.php",true) 
    }
  }
  
</script>