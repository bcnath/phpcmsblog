<?php
include "includes/header.php"
 ?>
<?php 
  include "includes/navbar.php" 
?>

<?php
$dbservername="localhost";
$dbuser="root";
$dbpass="";
$dbname="blog";
$conn=mysqli_connect($dbservername,$dbuser,$dbpass,$dbname);
 ?>

<div class="row">
  <div class="col l9 m9 s12">
    <?php
      $sql="select * from post order by id desc";
      $res=mysqli_query($conn,$sql);
      if(mysqli_num_rows($res)>0){
        while ($row=mysqli_fetch_assoc($res))
        {
    ?>
      <div class="col l3 m3 s12">
        <div class="card">
          <div class="card-image">
          <img src="images/sample-1.jpg">
          <?php 
        $stringtitle = $row['title'];
        if (strlen($stringtitle) > 40) {
          $trimstringtitle = substr($stringtitle, 0, 40).'<a>...</a>';
        } 
        else 
          {
            $trimstringtitle = $stringtitle;
          }
          ?>

          <span class="card-title"><?php echo $trimstringtitle?></span>
        </div>
        <?php 
        $string = $row['content'];
        if (strlen($string) > 150) {
          $trimstring = substr($string, 0, 150).'<a>...</a>';
        } 
        else 
          {
            $trimstring = $string;
          }
          ?>
        <div class="card-content">
          <p><?php echo $trimstring?></p>
        </div>
        <div class="card-action light-blue lighten-1 center">
          <a class="white-text" href="postcontent.php?id=<?php echo $row['id'];?>">Read more</a>
        </div>
      </div>
    </div>
    <?php 
            }
            }
    ?>
  </div>

      <?php 
      include "includes/sidebar.php"
       ?>
      
</div>

  <?php 
      include "includes/footer.php"
       ?>

  
