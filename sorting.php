<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sorting</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" type="text/css" href="css/pages.css">


  <style>
   button {
        display: inline-block; background-color: Tomato;
        border-radius: 30px;
        border: 1px double #cccccc;
        color: black;
        text-align: center;
        font-size: 15px;
        padding: 10px;
        width: 200px;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }
.logout{
   text-align: center;  
}
  </style>
</head>
<body>

  <!-- header start -->
  <header class="header">
     <div class="container">
        <div class="header-main">
           <div class="logo">
              <a href="sorting.php">Sorting</a>
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
                       <li class="menu-item"><a href="js.php">Java Script</a></li>
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
$myfile = fopen("sort.txt", "w") or die("Unable to open file!");
$txt = "A Sorting Algorithm is used to rearrange a given array or list elements according to a comparison operator on the elements. 
The comparison operator is used to decide the new order of element in the respective data structure.
Sorting refers to arranging data in a particular format. Sorting algorithm specifies the way to arrange data in a particular order. Most common orders are in numerical or lexicographical order.

The importance of sorting lies in the fact that data searching can be optimized to a very high level, if data is stored in a sorted manner.
 Sorting is also used to represent data in more readable formats.";
fwrite($myfile, $txt);
fclose($myfile);
 ?>
 <?php
$myfile = fopen("sort.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("sort.txt"));

fclose($myfile);
?>

 <ul> 
 <br><br>
      <img src="sort.jpg" alt="" class="center">
     <h3>Types of Sorting Algorithms:</h3>
   <ul>
 <li>Bubble Sort.</li>
 <li>Merge Sort.</li>
 <li>Insertion Sort.</li>
 <li>Selection Sort.</li>
 <li>Heap Sort.</li>
 <li>Radix Sort.</li>
 <li>Bucket Sort.</li>
   </ul>

   <h3>Bubble sort psudocode</h3>
 
  <li> We are given with an input array which is supposed to be sorted in ascending order.</li>
   <li>We start with the first element and i=0 index and check if the element present at i+1 is greater then we swap the elements at index i and i+1.</li>
<li>If above is not the case, then no swapping will take place.</li>
   
   <h3>Marg sort psudocode</h3>
   <img src="m.png" alt="" class="center">
   <ul>
   <li>Declare left and right var which will mark the extreme indices of the array.</li>
   <li>Left will be assigned to 0 and right will be assigned to n-1.</li>
   <li>Find mid = (left+right)/2.</li>
   <li>Call mergeSort on (left,mid) and (mid+1,rear)</li>
   <li>Above will continue till left right.</li>
   <li>Then we will call merge on the 2 subproble </li>
   </ul>
     </ul>
</p>
<h3>Marg sort code</h3>
<br><br>
#include< stdlib.h > <br>
#include< stdio.h ><br>
// Merge Function<br>
void merge(int arr[], int l, int m, int r)<br>
{<br>
int i, j, k;<br>
int n1 = m - l + 1;<br>
int n2 = r - m;<br>
int L[n1], R[n2];<br>
for (i = 0; i < n1; i++)<br>
L[i] = arr[l + i];<br>
for (j = 0; j < n2; j++)<br>
R[j] = arr[m + 1+ j];<br>
i = 0;<br>
j = 0;<br>
k = l;<br>
while (i < n1 && j < n2)<br>
{<br>
if (L[i] <= R[j])<br>
{<br>
arr[k] = L[i];<br>
i++;<br>
}<br>
else<br>
{<br>
arr[k] = R[j];<br>
j++;<br>
}<br>
k++;<br>
}<br>
while (i < n1)<br>
{<br>
arr[k] = L[i];<br>
i++;<br>
k++;<br>
}<br>
while (j < n2)<br>
{<br>
arr[k] = R[j];<br>
j++;<br>
k++;<br>
}<br>
}<br>

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
 </section>
 
 <div class="logout">
<button onclick="window.location.href='logout.php';">
      Click Here To Logout .
    </button>


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
</div>
 <!-- home section end -->
 
<script src="js/course.js"></script>
</body>
</html>