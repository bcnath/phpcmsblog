<!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
      <style type="text/css">
        header,footer,.main{
          padding-left: 301px;
        }
        @media(max-width: 992px){
          header,footer,.main{
          padding-left: 10px;
        }
      }
        
      </style>

      <ul class="side-nav fixed" id="slide-out">
        <li><div class="user-view">
            <div class="background">
            <img src="../images/contactpic.jpg" class="responsive-img"></div>
            <a href="#user"><img src="../images/yuna.jpg" alt="" class="circle"></a>
            <a href="#name"><span class="white-text name"><?php echo $_SESSION['username'];?></span></a>
            <a href="#email"><span class="white-text email">
              <?php
              $user=$_SESSION['username'];
              $sql="select email from users where username='$user'";
              $res=mysqli_query($conn,$sql);
              $row=mysqli_fetch_assoc($res);
              echo $row['email'];
              ?>
            </span></a>
            </div>
            </div>
            <li><a href="dashboard.php" class="waves-effect"><i class="material-icons">dashboard</i>Dashboard</a></li>
            <li><a href="post.php" class="waves-effect"><i class="material-icons">edit</i>Posts</a></li>
            <li><a href="#" class="waves-effect"><i class="material-icons">images</i>Images</a></li>
            <li><a href="#" class="waves-effect"><i class="material-icons">comments</i>Comments</a></li>
            <li><a href="#" class="waves-effect"><i class="material-icons">settings</i>Settings</a></li>
            <li><a href="http://localhost/materalizecss/index.php" class="waves-effect"><i class="material-icons">Live</i>Live preview</a></li>
            <div class="divider"></div>
            <li><a href="#" class="waves-effect"><i class="material-icons">logout</i>Logout</a></li>
        </li>
      </ul>
      <a href="" class="btn" data-activates="slide-out"><i class="material-icons">menu</i></a>