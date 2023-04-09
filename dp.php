<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dynamic Programming</title>
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
              <a href="dp.php">Dynamic Programming</a>
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
$myfile = fopen("dp.txt", "w") or die("Unable to open file!");
$txt = "Dynamic programming is both a mathematical optimization method and a computer programming method. ... Likewise, in computer science, if a problem can be solved optimally by breaking it into sub-problems and then recursively finding the optimal solutions to the sub-problems, then it is said to have optimal substructure
Dynamic Programming is mainly an optimization over plain recursion. Wherever we see a recursive solution that has repeated calls for same inputs, we can optimize it using Dynamic Programming. The idea is to simply store the results of subproblems, so that we do not have to re-compute them when needed later. This simple optimization reduces time complexities from exponential to polynomial. For example, if we write simple recursive solution for Fibonacci Numbers, we get exponential time complexity and if we optimize it by storing solutions of subproblems, time complexity reduces to linear.";
fwrite($myfile, $txt);
fclose($myfile);
 ?>
 <?php
$myfile = fopen("dp.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("dp.txt"));

fclose($myfile);
?>

           
 <ul>
      
      <img src="dp1.png" alt="" class="center">
    
     <h2 style="color:red;">Dynamic Programming problems:</h2> 
<ul>

<li>Knapsack 0/1. Problem Statement. ....</li>
<li>Knapsack Unbounded. Problem Statement. ....</li>
<li>Longest Common Subsequence. Problem Statement. ....</li>
<li>Egg Dropping Problem. Problem Statement. ....</li>
<li>DP with Grid — Unique Paths. Problem Statement.</li>
</ul>

<h3>uses in real life</h3>
  <p>Dynamic programming is heavily used in computer networks, routing, graph problems, computer vision, artificial intelligence, machine learning etc. Where is it used in real life? In order to introduce the dynamic-programming approach to solving real life problems, let's consider a traffic based problem.</p>   
<p>To practice online coding here is the link.</p>

<h3>Program for Fibonacci numbers</h3>
<ul>
//Fibonacci Series using Recursion <br>
#include< bits/stdc++.h >  <br>
using namespace std; <br>

int fib(int n) <br>
{ <br>
	if (n <= 1) <br>
		return n; <br>
	return fib(n-1) + fib(n-2); <br>
} <br>

int main () <br>
{ <br>
	int n = 9; <br>
	cout << fib(n); <br>
	getchar(); <br>
	return 0; <br>
} <br>
</ul>

<h3>Bell Numbers (Number of ways to Partition a Set)</h3>

<ul>
// A C++ program to find n'th Bell number <br>
#include< iostream > <br>
using namespace std;<br>

int bellNumber(int n)<br>
{<br>
int bell[n+1][n+1];<br>
bell[0][0] = 1;<br>
for (int i=1; i<=n; i++)<br>
{<br>
	// Explicitly fill for j = 0<br>
	bell[i][0] = bell[i-1][i-1];<br>

	// Fill for remaining values of j<br>
	for (int j=1; j<=i; j++)<br>
		bell[i][j] = bell[i-1][j-1] + bell[i][j-1];<br>
}<br>
return bell[n][0];<br>
}<br>

// Driver program<br>
int main()<br>
{<br>
for (int n=0; n<=5; n++)<br>
	cout << "Bell Number " << n << " is "<br>
		<< bellNumber(n) << endl;<br>
return 0;<br>
}<br>

</ul>
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