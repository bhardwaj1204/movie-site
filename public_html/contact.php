<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Privacy Policy - Brotherhoosmovies.fun</title>
	<style>
	h1 {
  color: #ffff00;
  font-size: 24px;
  margin-bottom: 20px;
}

h2 {
  color: #ccff66;
  font-size: 18px;
  margin-bottom: 10px;
}

/* Style the paragraphs */
p {
  color: #ffffff;
  font-size: 16px;
  line-height: 1.5;
  margin-bottom: 20px;
}

/* Style the ordered list */
ol {
  color: #ffffff;
  font-size: 16px;
  line-height: 1.5;
  margin-bottom: 20px;
  margin-left: 30px;
}

/* Style the links */
a {
  color: #ccff66;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

/* Add some spacing */
body {
  padding: 20px;
  font-family: Arial, sans-serif;
  background:  #000000;
  color: #ffffff;

}

header {
  background: linear-gradient(to bottom, #000000, #ccff33);
  color: #ffffff;
  padding: 10px;
}

.logo {
  font-size: 30px;
  font-weight: bold;
  
}
.logo a{
	color: #ffffff;
}

.menu {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: flex-end;
  align-items: center;
}

.menu li {
  margin-left: 20px;
}

.menu li:first-child {
  margin-left: 0;
}

.menu a {
  color: #ffffff;
  text-decoration: none;
  font-size: 30px;
}

.toggle {
  display: none;
  cursor: pointer;
}

.bar {
  width: 25px;
  height: 3px;
  background-color: #ffffff;
  
}

@media (max-width: 768px) {
  .logo {
    font-size: 30px;
  }
  
  .menu {
    display: none;
  }
  
  .toggle {
    display: block;
  }
}
	
	</style>
	<script>
	// Show or hide the content when a heading is clicked
document.addEventListener("DOMContentLoaded", function() {
  var headings = document.querySelectorAll("h2");
  
  headings.forEach(function(heading) {
    heading.addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.display === "block") {
        content.style.display = "none";
      } else {
        content.style.display = "block";
      }
    });
  });
});
document.addEventListener("DOMContentLoaded", function() {
  var toggle = document.querySelector(".toggle");
  var menu = document.querySelector(".menu");
  
  toggle.addEventListener("click", function() {
    menu.classList.toggle("active");
  });
});
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>


<header>
  <nav>
    <div class="logo"><a href="index.php">Brotherhood Movies</a>
    <ul class="menu">
      <li><a href="index.php#hm">Home</a></li>
      <li><a href="index.php#mv">Movie</a></li>
      <li><a href="index.php#wb">Web-Series</a></li>
      <li><a href="index.php#al">All</a></li>
    </ul>
    <div class="toggle">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div></div>
  </nav>
</header>












    <h1>Mail</h1>
    <p>Brotherhoodmovies7@gmail.com</p>
    
	
	<h1>Note:</h1>
    <p>This Website is made for educational purpose by college student. If You Have any query then mail.</p>
	
   
    <a href="index.php"> Go Back !</a>
    
</body>
</html>