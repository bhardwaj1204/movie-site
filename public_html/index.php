<?php
 session_start();
if(!isset($_SESSION['watc'])) // If session is not set then redirect to Login Page
       {
           header("Location:usersignin.php");  
       }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AnimeEdgar</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon1.svg" type="image/svg+xml">

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

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="./index.php" class="logo">
        <h1 style="color:white;">Brotherhood</h1> <h2 style="color:yellow;">Movies</h2>
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
            <h1 style="color:white;">Brotherhood Movies/Series</h1>
          </a>

          <button class="menu-close-btn" data-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li>
            <a href="#hm" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#mv" class="navbar-link">Movie</a>
          </li>

          <li>
            <a href="#wb" class="navbar-link">Web Series</a>
          </li>

          <li>
            <a href="#sr" class="navbar-link">Search</a>
          </li>

		  <li>
            <a href="#al" class="navbar-link">ALL</a>
          </li>
        </ul>

       

      </nav>

    </div>
  </header>





  <main>
  <div class="scr" style="overflow: auto;">
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="hm">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">BrotherHood Movies</p>

            <h1 class="h1 hero-title">
              Unlimited <strong>Movies/Series </strong>Download
            </h1>

            <div class="meta-wrapper">

              <div class="badge-wrapper">
                <div class="badge badge-fill">PG 18</div>

                <div class="badge badge-outline">HD</div>
              </div>

              <div class="ganre-wrapper">
                <a href="#mv">Action,</a>

                <a href="#sr">Drama</a>
              </div>

              <div class="date-time">

                <div>
                  <ion-icon name="calendar-outline"></ion-icon>

                  <time datetime="2022">2022-2023</time>
                </div>

                

              </div>

            </div>

            <a href="https://t.me/animeedgar"><button class="btn btn-primary">
             
              <span>watch now</span>
            </button></a>

          </div>

        </div>
      </section>





      <!-- 
        - #UPCOMING
      -->

      <section class="upcoming" id="mv">
        <div class="container">

          <div class="flex-wrapper">

            <div class="title-wrapper">
              <p class="section-subtitle">Download</p>

              <h2 class="h2 section-title"> Movies</h2>
            </div>

         

          </div>

          <ul class="movies-list  has-scrollbar">

           
					<!-- -->
					<?php
include 'dbh.php';


  $im = "SELECT * FROM movies" ;
  $records = mysqli_query($conn,$im);
  $count = mysqli_num_rows($records);
	

  
  $newim = "SELECT * FROM movies where sr='movie' " ;
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





      <!-- 
        - #SERVICE
      -->

      





      <!-- 
        - #TOP RATED
      -->

      





      <!-- 
        - #TV SERIES
      -->

     





      <!-- 
        - #CTA
      -->

      <section class="cta"  id="sr">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="cta-title">Search Movies/Series</h2>

            <p class="cta-text">
              Fast Download Services
            </p>
          </div>

          
        </div>
		
		<div class="container " >
        
        <input type="text" class="" name="live_search" id="live_search" autocomplete="off"
            placeholder="Search ...">
			
        
    </div>
<div id="search_result"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#live_search").keyup(function () {
                var query = $(this).val();
                if (query != "") {
                    $.ajax({
                        url: 'ajax-live-search.php',
                        method: 'POST',
                        data: {
                            query: query
                        },
                        success: function (data) {
                            $('#search_result').html(data);
                            $('#search_result').css('display', 'block');
                            /*$("#live_search").focusout(function () {
                                $('#search_result').css('display', 'none');
                            });
                            $("#live_search").focusin(function () {
                                $('#search_result').css('display', 'block');
                            });*/
                        }
                    });
                } else {
                    $('#search_result').css('display', 'none');
                }
            });
			$("#lnkdata").click(function()
			{
				alert(this.prop("href"));
			});
        });
    </script>

		
		
      
      </section>

    </article>
	
	
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
	
	
	
<!--
tagsss


-->
<div class="cta" id="al">
<div class="container">
<?PHP
		$cnt=0;
		 $newim = "SELECT * FROM movies " ;
  $newrecords = mysqli_query($conn,$newim);
  
    while($fetchr = mysqli_fetch_assoc($newrecords)){ 
		$id =$fetchr['mid'];
		if($cnt==6)
		{			
			
				$cnt=0;
				echo '</div><div class="container">';
		}
			
	?>

		
<a href="./movie-details.php?id=<?php echo $id; ?>"><button class="btn btn-primary">
             
              <span><?php echo $fetchr['name'];  ?></span>
            </button></a>
			
			
		
			
	<?PHP
	
	
		
		$cnt++;
	}
	?>


</div>
</div>
 
	
  </main>



  
  
  


  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand-wrapper">

          <a href="./index.html" class="logo">
            <h1 style="color:white;">BrotherHood Movies</h1>
          </a>

          <ul class="footer-list">

            <li>
              <a href="#hm" class="footer-link">Home</a>
            </li>

            <li>
              <a href="#mv" class="footer-link">Movie</a>
            </li>

            <li>
              <a href="#sr" class="footer-link">Search</a>
            </li>

            <li>
              <a href="#wb" class="footer-link">Web Series</a>
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