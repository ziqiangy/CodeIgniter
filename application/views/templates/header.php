<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	

  <title>ZIQIANG YUAN MANAGEMENT APP</title>
  <link rel="icon" type="image/x-icon" href="/pictures/logo-sq.jpg">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="/node_modules/jquery/dist/jquery.min.js"></script>
	
</head>
<body>

<style>
    body{
        margin:0;
    }
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
</style>


<div class="topnav">
  

  


  <div class="dropdown">
    <button class="dropbtn">Flashcard 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <?php echo anchor("flashcard/oneCardView","Flashcard Study"); ?>
  <?php echo anchor("flashcard/displayAllList","List Flashcards"); ?>
  <?php echo anchor("flashcard/insertView","Insert Flashcard"); ?>
  <?php echo anchor("flashcard/displayMultiInsert","Insert Multi"); ?>
    </div>
  </div> 


  <div class="dropdown">
    <button class="dropbtn">Flashcard Categories 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <?php echo anchor("flashcate/list","Show My Categories"); ?>
  <?php echo anchor("flashcate/insert","Insert Category"); ?>
  <?php echo anchor("flashcard/searchByCate","Search By Category"); ?>
    </div>
  </div> 


  <div class="dropdown">
    <button class="dropbtn">Quick Notes 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <?php echo anchor("quicknote/insert","Insert a Note"); ?>
  <?php echo anchor("quicknote/list","Show My Notes"); ?>
    </div>
  </div> 


  <div class="dropdown">
    <button class="dropbtn">Reading List
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <?php echo anchor("Readinglist/insert","Insert a Book"); ?>
  <?php echo anchor("Readinglist/list","Show My Books"); ?>
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">Recipe List
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



  <?php if(isset($_SESSION["user_id"])){
    echo anchor("user/profile",$_SESSION["username"],array('class' => 'split'));
  }else{
    echo anchor("user/register","register",array('class' => 'split'));
    echo anchor("user/login","login",array('class' => 'split'));
  }
  ?>
  
</div>

<script src=""></script>
