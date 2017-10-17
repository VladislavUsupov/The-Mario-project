<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title> Star Wars </title>
  <link rel="stylesheet" href="css/styles.css"/>
 </head>
 
 <body>
     <nav class="navigation">
         <ul class="navigation__menu">
             <li class="navigation__menu-item">
                 <a class="navigation__menu-item-link">
                     <p class="navigation__menu-item-link-logo">
                         GameName
                     </p>
                 </a>
             </li>
             
    <?php
             require('page.php');
             echo Page::renderMenu($_GET['page']);
    ?>
             
    <?php
        echo Page::getPage($_GET['page']);
    ?> 
             
    </body>
</html>