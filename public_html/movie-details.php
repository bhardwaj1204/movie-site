<?php
	include 'dbh.php';
	$id=$_GET['id'];
	
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Free Guy 2021</title>




  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="#top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="./index.php" class="logo">
        <h1 style="color:white;">AnimeEdgar</h1>
      </a>

      <div class="header-actions">

					<?php 
						
					?>

        <div class="lang-wrapper">
          <label for="language">
            <ion-icon name="globe-outline"></ion-icon>
          </label>

          
        </div>

       <a href="logout2.php"> <button class="btn btn-primary">logout</button></a>

      </div>

      <button class="menu-open-btn" data-menu-open-btn>
        <ion-icon name="reorder-two"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="./index.html" class="logo">
            <h1 style="color:white;">AnimeEdgar</h1>
          </a>

          <button class="menu-close-btn" data-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li>
            <a href="index.php#hm" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="index.php#mv" class="navbar-link">Movie</a>
          </li>

          <li>
            <a href="index.php#wb" class="navbar-link">Web Series</a>
          </li>

          <li>
            <a href="index.php#sr" class="navbar-link">Search</a>
          </li>

		  <li>
            <a href="index.php#al" class="navbar-link">ALL</a>
          </li>
        </ul>

       

      </nav>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #MOVIE DETAIL
      -->

      <section class="movie-detail">
        <div class="container">
			
			<?php 
			$newim = "SELECT * FROM movies WHERE `mid`='$id'" ;
			$newrecords = mysqli_query($conn,$newim);
			while($fetchr = mysqli_fetch_assoc($newrecords)){
			
			?>
          <figure class="movie-detail-banner">

            <img src='uploads/<?php echo $fetchr['imgpath'];?>'/>

            

          </figure>

          <div class="movie-detail-content">

            <!--<p class="detail-subtitle">New Episodes</p>-->

            <h1 class="h1 detail-title">
              <strong><?php echo $fetchr['name'];?></strong>
            </h1>

            <div class="meta-wrapper">

              <div class="badge-wrapper">
                <!--<div class="badge badge-fill">PG 13</div>-->

                <div class="badge badge-outline">HD</div>
              </div>

              <div class="ganre-wrapper">
                <a href="index.php"><?php echo $fetchr['type'];?></a>

               
              </div>

              <div class="date-time">

                <div>
                  <ion-icon name="calendar-outline"></ion-icon>

                  <time datetime="2021"><?php echo $fetchr['rdate'];?></time>
                </div>

                <div>
                  <ion-icon name="time-outline"></ion-icon>

                  <time datetime="PT115M"><?php echo $fetchr['runtime'];?></time>
                </div>

              </div>

            </div>

            <p class="storyline">
             <?php echo $fetchr['embd'];?><br>
             <?php echo $fetchr['decription'];?>
            </p>

            <div class="details-actions">

              

              <div class="title-wrapper">
                <p class="title">Telegram</p>

                <p class="text">for BackUp</p>
              </div>

              <button class="btn btn-primary">
                
<a href="https://t.me/animeedgar">
                <span>Join Now</span></a>
              </button>

            </div>
		
            <a href="<?php echo $fetchr['link'];?>" target="_blank" class="download-btn">
              <span>Download</span>
				
              <ion-icon name="download-outline"></ion-icon>
            </a>

          </div>
		 
        </div>
			
	
            
		  
		  
		  
			<?php } ?>
      </section>





      <!-- 
        - #TV SERIES
      -->

      <section class="upcoming" id="wb">
        <div class="container">

          <div class="flex-wrapper">

            <div class="title-wrapper">
              <p class="section-subtitle">Download</p>

              <h2 class="h2 section-title"> Series</h2>
            </div>

         

          </div>

          <ul class="movies-list  has-scrollbar">

           
					<!-- -->
					<?php
include 'dbh.php';


  $im = "SELECT * FROM movies" ;
  $records = mysqli_query($conn,$im);
  $count = mysqli_num_rows($records);
	

  
  $newim = "SELECT * FROM movies where sr='series' " ;
  $newrecords = mysqli_query($conn,$newim);
  
    while($fetchr = mysqli_fetch_assoc($newrecords)){ 
	$id =$fetchr['mid'];
	?>
					 <li>
              <div class="movie-card">
			  
                <a href="./movie-details.php?id=<?php echo $id; ?>">
                  <figure class="card-banner">
				  
                   <img src='uploads/<?php echo $fetchr['imgpath'];?>'/>
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="./movie-details.html">
                    <h3 class="card-title"><?php echo $fetchr['name'];  ?></h3>
                  </a>

                  <time datetime="2022"><?php echo $fetchr['rdate'];  ?></time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">HD</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT137M"><?php echo $fetchr['runtime'];  ?></time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data><?php echo $fetchr['genre'];  ?></data>
                  </div>
                </div>
			<?php } ?>	
				<!-- -->
              </div>
            </li>
	
            

            

            

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand-wrapper">

          <a href="./index.html" class="logo">
            <h1 style="color:white;">AnimeEdgar</h1>
          </a>

          <ul class="footer-list">

            <li>
              <a href="index.php#hm" class="footer-link">Home</a>
            </li>

            <li>
              <a href="index.php#mv" class="footer-link">Movie</a>
            </li>

            <li>
              <a href="index.php#sr" class="footer-link">Search</a>
            </li>

            <li>
              <a href="index.php#wb" class="footer-link">Web Series</a>
            </li>

          
          </ul>

        </div>

        <div class="divider"></div>

        <div class="quicklink-wrapper">

          <ul class="quicklink-list">

          

            <li>
              <a href="contact.php" class="quicklink-link">Contact</a>
            </li>

            <li>
              <a href="privacy.php" class="quicklink-link">Privacy</a>
            </li>

          </ul>
<!--
          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>-->

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 <a href="privacy.php">AnimeEdgar</a>. All Rights Reserved
        </p>

                   

      </div>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>