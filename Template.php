<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css"/>
    </head>
    <body>
       <div id="wrapper">
           <div id="banner">
           </div>
           
           <nav id="navigation">
               <ul id="nav">
                   <li><a href="index.php">Home</a>
                   <li><a href="#">Coffeee</a>
                   <li><a href="#">Shop</a>
                   <li><a href="#">About</a>
                   </ul>
           </nav>
           <div id="content_area">
               <?php echo $content; ?>
           </div>
           <div id="sidebar">
           </div>
           <footer>
               <p>All rights reserved.</p>
           </footer>
           
      </div>     
    </body>
</html>
