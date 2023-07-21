 <link rel="stylesheet" href="./assets/css/style.css">

        <div class="container">
		<ul class="movies-list  has-scrollbar">
<?php
  require_once "dbh.php";
  //require_once "bj.css";
 
  if (isset($_POST['query'])) {
      $query = "SELECT * FROM movies WHERE name LIKE '{$_POST['query']}%' LIMIT 100";
      $result = mysqli_query($conn, $query);
	  $output="";
    if (mysqli_num_rows($result) > 0) {
		
        while ($res = mysqli_fetch_array($result)) {
			$id =$res['mid'];
			$nm=$res['name'];
			$ph=$res['imgpath'];
		//	$output.="<div class='movie-card'><img src='uploads/".$ph."'/>";
			//$output.='<a href="./movie-details.php?id='.$id.'" id="lnkdata" >'.$nm.' </a><br/></div>';
			$output.='
			 
			<li>
              <div class="movie-card">
			  
                <a href="./movie-details.php?id='.$id.'">
                  <figure class="card-banner">
				  
                   <img src="uploads/'.$ph.'"/>
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="./movie-details.html">
                    <h3 class="card-title">'.$nm.'</h3>
                  </a>

                  
                </div>
			</div>
			  </li>
	
        
 
         

       
      
			
			';
			
      }
	  ?>
	  
	  </ul>
           
	  <?php
    } else {
      $output.= "
      <div class='alert alert-danger mt-3 text-center' role='alert'>
           not found
      </div>
      ";
    }
	echo $output;
  }
?>