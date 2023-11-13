<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to wordmemo app</title>

	
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
</style>


<div class="topnav">
  <?php echo anchor("flashcard/oneCardView","Flashcard Study"); ?>
  <?php echo anchor("flashcard/displayAllList","List Flashcards"); ?>
  <?php echo anchor("flashcard/insertView","Insert Flashcard"); ?>
  <?php echo anchor("flashcate/list","Show My Categories"); ?>
  <?php echo anchor("flashcate/insert","Insert Category"); ?>
  <?php echo anchor("flashcard/searchByCate","Search By Category"); ?>

  <?php if(isset($_SESSION["user_id"])){
    echo anchor("user/profile",$_SESSION["username"],array('class' => 'split'));
  }else{
    echo anchor("user/register","register",array('class' => 'split'));
    echo anchor("user/login","login",array('class' => 'split'));
  }
  ?>
  
</div>
