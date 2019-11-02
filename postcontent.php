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
<div class="container">
<div class="row">
    <?php
    $postid=$_GET["id"];
    $sql="select * from post where id='$postid'";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0)
    {
        while ($row=mysqli_fetch_assoc($res))
        {
    ?>
    <div class="col s12 m9 l10" style="padding-right: 20px;">
       <div class="card z-depth-0" style="margin-top: 80px;">
       <h3 class="center-align"><?php echo $row['title']?></h3>
       <p class="grey-text center-align"><?php echo $row['dateandtime']?></p>
         <div class="center-align">
         <div class="chip">
            Html
            </div>
            <div class="chip">
            Css
            </div>
            <div class="chip">
            material design
            </div>
            <div class="chip">
            PHP
            </div>
          </div>  
        <div class="card-content" style="font-size: 18px; color: #212121;">
        <div class="sharethis-inline-share-buttons"></div>
        
        <img src="images/banner.png" class="responsive-img">
        
                <!-- put h tag in div give div an id and link # with that id to jump directly-->
                <div id="title1">
                <h4>
                <a href="#title1">#</a>
                Title of the topic</h4>
                </div>
                <!-- End of div title1-->
        <p><?php echo $row['content']?></p>
        </div>  
       </div>
      </div>

      <div class="col s12 m9 l10">
        <div class="card horizontal">
          <div class="card-image">
            <img src="images/bimal.jpg" class="responsive-img" style="width: 70px; height: 70px; padding-top: 10px; padding-left: 10px; margin-top: 30px;">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p class="grey-text">About Author</p>
              <h5><?php echo $row['author'];?></h5>
              <p>Developer, Tech. Evangalist, Loves to read and write about new tech. Madly in love with Webdevelopment. Follow him on social media.</p>
            </div>
            
            <div class="card-action">
              
              <a href="https://twitter.com/bimalchnath" class="twitter-follow-button" data-size="large" data-show-screen-name="false" data-show-count="false">Follow @bimalchnath</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

          <!-- Place this tag where you want the button to render. -->
          <a class="github-button" href="https://github.com/bcnath" data-size="large" aria-label="Follow @akarshsingh9 on GitHub">Follow @bcnath</a><script async defer src="https://buttons.github.io/buttons.js"></script>
                   
            </div>

          </div>
        </div>
      </div>
      
  </div>
      
</div>
<?php
}
}

?>

<?php 
include "includes/footer.php"
?>