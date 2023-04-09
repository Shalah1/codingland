<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dropdown Menu Responsive</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" type="text/css" href="css/pages.css">
</head>
<body>

  <!-- header start -->
  <header class="header">
     <div class="container">
        <div class="header-main">
           <div class="logo">
              <a href="search.php">Search</a>
           </div>
           <div class="open-nav-menu">
              <span></span>
           </div>
           <div class="menu-overlay">
           </div>
           <!-- navigation menu start -->
           <nav class="nav-menu">
             <div class="close-nav-menu">
                <img src="img/close.svg" alt="close">
             </div>
             <ul class="menu">
                <li class="menu-item menu-item-has-children">
                   <a href="#" data-toggle="sub-menu">Language<i class="plus"></i></a>
                   <ul class="sub-menu">
                       <li class="menu-item"><a href="java.php">Java</a></li>
                       <li class="menu-item"><a href="csharp.php">C#</a></li>
                       <li class="menu-item"><a href="python.php">Python</a></li>
                       <li class="menu-item"><a href="cplusplus.php">C++</a></li>
                   </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                  <a href="#" data-toggle="sub-menu">Data Structure <i class="plus"></i></a>
                  <ul class="sub-menu">
                      <li class="menu-item"><a href="array.php">Array</a></li>
                      <li class="menu-item"><a href="stack.php">Stack</a></li>
                      <li class="menu-item"><a href="tree.php">Tree</a></li>
                      <li class="menu-item"><a href="graph.php">Graph</a></li>
                  </ul>
               </li>
               
                
                <li class="menu-item menu-item-has-children">
                   <a href="#" data-toggle="sub-menu">Algorithm <i class="plus"></i></a>
                   <ul class="sub-menu">
                       <li class="menu-item"><a href="greedy.php">Greedy Algorithm</a></li>
                       <li class="menu-item"><a href="sorting.php">Sorting</a></li>
                       <li class="menu-item"><a href="searching.php">Searching</a></li>
                       <li class="menu-item"><a href="dp.php">Dynamic Algorithm</a></li>
                   </ul>
                </li>

                <li class="menu-item menu-item-has-children">
                   <a href="#" data-toggle="sub-menu">Web Technologies <i class="plus"></i></a>
                   <ul class="sub-menu">
                       <li class="menu-item"><a href="html.php">Html/Css</a></li>
                       <li class="menu-item"><a href="#js.php">Java Script</a></li>
                       <li class="menu-item"><a href="php.php">Php</a></li>
                   </ul>
                </li>
             </ul>
           </nav>
           <!-- navigation menu end -->
          
        </div>
        
     </div>

  </header>
  <!-- header end -->

 <!-- home section start -->
 <br><br><br><br>
 <section class="home-section">
 <?php
$myfile = fopen("search.txt", "w") or die("Unable to open file!");
$txt = "The searching algorithms are used to search or find one or more than one element from a dataset. These type of algorithms are used to find elements from a specific data structures.

Searching may be sequential or not. If the data in the dataset are random, then we need to use sequential searching. Otherwise we can use other different techniques to reduce the complexity.";
fwrite($myfile, $txt);
fclose($myfile);
 ?>
 <?php
$myfile = fopen("search.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("search.txt"));

fclose($myfile);
?>

           
<h3>Types of searching</h3>
<ul>
<li>Binary Search</li>
<li>Exponential Search</li>
<li>Interpolation Search</li>
<li>Jump Search</li>
<li>Linear Search</li>
<li>Ternary Search</li>

<img src="bsearch.jpg" alt="" class="center">
<h3>Binary search</h3>
<h4><u>Iterative approach</u></h4>
<ul>
binarySearch(arr, size) <br>
		   loop until beg is not equal to end<br>
    midIndex = (beg + end)/2<br>
    if (item == arr[midIndex] )<br>
        return midIndex<br>
    else if (item > arr[midIndex] ) <br>
        beg = midIndex + 1<br>
    else                       <br>
        end = midIndex - 1<br>
</ul>

<h4><u>Recursive approach</u></h4>
<ul>
binarySearch(arr, item, beg, end) <br>
    if beg<=end<br>
        midIndex = (beg + end) / 2 <br>
        if item == arr[midIndex]<br>
            return midIndex<br>
        else if item < arr[midIndex]   <br>     
            return binarySearch(arr, item, midIndex + 1, end)<br>
        else                              <br>
            return binarySearch(arr, item, beg, midIndex - 1)<br>
    
    return -1<br>
</ul>
</ul>

<h3>Linear Search</h3>
<img src="linearsearch.gif" alt="" class="center">
<ul>
<p>Linear Search ( Array A, Value x)</p>

<li>Step 1: Set i to 1</li>
<li>Step 2: if i > n then go to step 7</li>
<li>Step 3: if A[i] = x then go to step 6</li>
<li>Step 4: Set i to i + 1</li>
<li>Step 5: Go to Step 2</li>
<li>Step 6: Print Element x Found at index i and go to step 8</li>
<li>Step 7: Print element not found</li>
<li>Step 8: Exit</li>
</ul>

<p>To practice online coding here is the link.</p>
<a href="https://www.onlinegdb.com/online_c_compiler">Online Compiler</a>
    </div>
    </div>

<?php

?>
<p style="color:red;">Here you can upload any kinds of file.</p>

<div class="fileuploader">
<form method="POST" enctype="multipart/form-data"action="uploads.php">
<input type="file" name="myfile"><br><br>
<input type= "submit"  name="uploads" value="Upload file">

</form>
   <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>CODING LAND </h4>
  	 			<ul>
  	 				<li><a href="about.html">About us</a></li>
  	 				<li><a href="team.html">Our Team</a></li>
  	 				<li><a href="#"> Free Online Courses </a></li>
  	 				<li><a href="contact.html">Contact Us</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Language</h4>
  	 			<ul>
  	 				<li><a href="java.php">Java</a></li>
  	 				<li><a href="cplusplus.php">C++</a></li>
  	 				<li><a href="python.php">Phython</a></li>
  	 				<li><a href="cshap.php">C#</a></li>
  	 				<!-- <li><a href="#">Many other Language</a></li> -->
  	 			</ul>
  	 		</div>
  	 		
  	 		<div class="footer-col">
  	 			<h4>Contact Us</h4>
  	 			<div class="social-links">
  	 			<h3>Phone:  01786327695</h3>
               <h4>Gmail :  marinaaf1@gmail.com</h4>
               <h3>Our Team always with you</h3>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>

 <!-- home section end -->
 
<script src="js/course.js"></script>
</body>
</html>