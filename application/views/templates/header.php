<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	

  <title>ZIQIANG YUAN MANAGEMENT APP</title>
  <link rel="icon" type="image/x-icon" href="/pictures/logo-sq.jpg">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="/node_modules/jquery/dist/jquery.min.js"></script>
  <!-- include bootstrap using CDN-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


	
</head>
<body>
<style>
  body{
        margin:0;
    }
</style>
<!-- <style>
    
    /* Create a top navigation bar with a black background color  */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create a right-aligned (split) link inside the navigation bar */
.topnav a.split {
  float: right;
  background-color: #04AA6D;
  color: white;
}



/* drop down */
.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style> -->

<!-- 
<div class="topnav">
  <div class="dropdown">
    <button class="dropbtn">Flashcard 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <?php echo anchor("flashcard/oneCardView","Flashcard Study"); ?>
      <?php echo anchor("flashcard/displayAllList","List Flashcards"); ?>
      <?php echo anchor("flashcard/insertView","Insert One"); ?>
      <?php echo anchor("flashcard/displayMultiInsert","Insert Multi"); ?>
      <?php echo anchor("flashcate/list","Show My Categories"); ?>
      <?php echo anchor("flashcate/insert","Insert Category"); ?>
      <?php echo anchor("flashcard/searchByCate","Search By Category"); ?>
    </div>
  </div> 



  <div class="dropdown">
    <button class="dropbtn">Quick Note 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <?php echo anchor("quicknote/insert","Insert a Note"); ?>
  <?php echo anchor("quicknote/list","Show My Notes"); ?>
    </div>
  </div> 


  <div class="dropdown">
    <button class="dropbtn">Playlist
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <?php echo anchor("Readinglist/insert","Insert a Play"); ?>
  <?php echo anchor("Readinglist/list","Show my Playlist"); ?>
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">Recipe
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <?php echo anchor("Recipelist/insert","Insert a Recipe"); ?>
  <?php echo anchor("Recipelist/list","Show My Recipes List"); ?>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Blog
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <?php echo anchor("blog/insert","Insert a Blog"); ?>
  <?php echo anchor("blog/list","Show My Blogs"); ?>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Todo
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <?php echo anchor("todo/insert","Insert a Todo"); ?>
  <?php echo anchor("todo/list","Show My Todos"); ?>
    </div>
  </div>


  <?php if(isset($_SESSION["user_id"])){
    echo anchor("user/profile",$_SESSION["username"],array('class' => 'split'));
  }else{
    echo anchor("user/register","register",array('class' => 'split'));
    echo anchor("user/login","login",array('class' => 'split'));
  }
  ?>
  
</div> -->






<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="/">
      <img src="/pictures/yelloman.jpg" alt="yelloman" width="30" height="30">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Flashcard
          </a>
          <ul class="dropdown-menu">
<li><?php echo anchor("flashcard/oneCardView","Flashcard Study",array("class"=>"dropdown-item")); ?></li>
<li><?php echo anchor("flashcard/displayAllList","List Flashcards",array("class"=>"dropdown-item")); ?></li>
<li><?php echo anchor("flashcard/insertView","Insert One",array("class"=>"dropdown-item")); ?></li>
<li><?php echo anchor("flashcard/displayMultiInsert","Insert Multi",array("class"=>"dropdown-item")); ?></li>
<li><?php echo anchor("flashcate/list","Show My Categories",array("class"=>"dropdown-item")); ?></li>
<li><?php echo anchor("flashcate/insert","Insert Category",array("class"=>"dropdown-item")); ?></li>
<li><?php echo anchor("flashcard/searchByCate","Search By Category",array("class"=>"dropdown-item")); ?></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Notes
          </a>
          <ul class="dropdown-menu">
<li><?php echo anchor("quicknote/insert","Insert a Note",array("class"=>"dropdown-item")); ?></li>
<li><?php echo anchor("quicknote/list","List Notes",array("class"=>"dropdown-item")); ?></li>
          </ul>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Play
          </a>
          <ul class="dropdown-menu">
<li><?php echo anchor("Readinglist/insert","Insert",array("class"=>"dropdown-item")); ?></li>
<li><?php echo anchor("Readinglist/list","List Playist",array("class"=>"dropdown-item")); ?></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Recipe
          </a>
          <ul class="dropdown-menu">
<li><?php echo anchor("Recipelist/insert","Insert",array("class"=>"dropdown-item")); ?></li>
<li><?php echo anchor("Recipelist/list","List Recipe",array("class"=>"dropdown-item")); ?></li>
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Blog
          </a>
          <ul class="dropdown-menu">
<li><?php echo anchor("blog/insert","Insert",array("class"=>"dropdown-item")); ?></li>
<li><?php echo anchor("blog/list","List Blogs",array("class"=>"dropdown-item")); ?></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Todo
          </a>
          <ul class="dropdown-menu">
<li><?php echo anchor("todo/insert","Insert",array("class"=>"dropdown-item")); ?></li>
<li><?php echo anchor("todo/list","List Todos",array("class"=>"dropdown-item")); ?></li>
          </ul>
        </li>

      </ul>
      <form class="d-flex">
      
        <?php if(isset($_SESSION["user_id"])){
    echo anchor("user/profile",$_SESSION["username"],array('class' => 'btn btn-outline-dark'));

  }else{
    echo anchor("user/register","register",array('class' => 'btn btn-outline-dark me-2'));
    echo anchor("user/login","login",array('class' => 'btn btn-outline-dark'));

  }
  ?>
      </form>
    </div>
  </div>
</nav>
