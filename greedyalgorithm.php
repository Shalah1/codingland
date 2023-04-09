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
              <a href="greedyalgorithm.php">Greedy Algorithm</a>
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
$myfile = fopen("greedyalgo.txt", "w") or die("Unable to open file!");
$txt = "Greedy is an algorithmic paradigm that builds up a solution piece by piece, always choosing the next piece that offers the most obvious and immediate benefit. So the problems where choosing locally optimal also leads to global solution are best fit for Greedy.
In greedy algorithm approach, decisions are made from the given solution domain. As being greedy, the closest solution that seems to provide an optimum solution is chosen.
<br>
Greedy algorithms try to find a localized optimum solution, which may eventually lead to globally optimized solutions. However, generally greedy algorithms do not provide globally optimized solutions.";
fwrite($myfile, $txt);
fclose($myfile);
 ?>
 <?php
$myfile = fopen("greedyalgo.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("greedyalgo.txt"));

fclose($myfile);
?>

           
 <ul>
      

 <h2 style="color:red;">Why are greedy algorithm called greedy ?</h2> 

<p>Such algorithms are called greedy because while the optimal solution to each smaller instance will provide an immediate output, the algorithm doesn't consider the larger problem as a whole.  Greedy algorithms work by recursively constructing a set of objects from the smallest possible constituent parts.</p>


      <img src="gd2.jpg" alt="" class="center">
      <br> <br>
      <img src="gd1.png" alt="" class="center">
 
  <h3>Examples of greedy algorithm</h3>
    
    <p>Most networking algorithms use the greedy approach. Here is a list of few of them −</p>
    <ul>
    <li>Travelling Salesman Problem</li>
    <li>Prim's Minimal Spanning Tree Algorithm</li>
    <li>Kruskal's Minimal Spanning Tree Algorithm</li>
    <li>Dijkstra's Minimal Spanning Tree Algorithm</li>
    <li>Graph - Map Coloring</li>
    <li>Graph - Vertex Cover</li>
    <li>Knapsack Problem</li>
    <li>Job Scheduling Problem</li>
    <p>There are lots of similar problems that uses the greedy approach to find an optimum solution.</p>

    <h3>Codes</h3>
    </ul>
    <br>
#include < bits/stdc++.h > <br>
using namespace std; <br>

// Prints a maximum set of activities that can be done by a single <br>
// person, one at a time. <br>
// n --> Total number of activities <br>
// s[] --> An array that contains start time of all activities <br>
// f[] --> An array that contains finish time of all activities <br>
void printMaxActivities(int s[], int f[], int n) <br>
{ <br>
	int i, j; <br>

	cout <<"Following activities are selected "<< endl; <br>

	// The first activity always gets selected <br>
	i = 0; <br>
	cout <<" "<< i; <br>

	// Consider rest of the activities <br>
	for (j = 1; j < n; j++) <br>
	{ <br>
	// If this activity has start time greater than or <br>
	// equal to the finish time of previously selected <br>
	// activity, then select it <br>
	if (s[j] >= f[i]) <br>
	{ <br>
		cout <<" " << j; <br>
		i = j; <br>
	} <br>
	} <br>
} <br>

// driver program to test above function <br>
int main() <br>
{ <br>
	int s[] = {1, 3, 0, 5, 8, 5}; <br>
	int f[] = {2, 4, 6, 7, 9, 9}; <br>
	int n = sizeof(s)/sizeof(s[0]); <br>
	printMaxActivities(s, f, n); <br>
	return 0; <br>
} <br>



   
<p>To practice online coding here is the link.</p>
<a href="https://www.onlinegdb.com/online_c_compiler">Online Compiler</a>
    </div>
    </div>

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