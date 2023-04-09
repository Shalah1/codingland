<!DOCTYPE html>
<html lang="en">
<head>
  <title>C++</title>
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
              <a href="cplusplus.php">C++</a>
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
$myfile = fopen("cplusplus.txt", "w") or die("Unable to open file!");
$txt = "C++ is a middle-level language rendering it the advantage of programming low-level (drivers, kernels) and even higher-level applications (games, GUI, desktop apps etc.). The basic syntax and code structure of both C and C++ are the same..";
fwrite($myfile, $txt);
fclose($myfile);
 ?>
 <?php
$myfile = fopen("cplusplus.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("cplusplus.txt"));

fclose($myfile);
?>

           
 <ul>
      <h2 style="color:red;">Some of the features & key-points to note about the programming language are as follows:.</h2>

  <li><u><b>Simple:</b></u> It is a simple language in the sense that programs can be broken down into logical units and parts, has a rich library support and a variety of data-types.</li><br>
  <li><u><b>Machine Independent but Platform Dependent:</b></u> A C++ executable is not platform-independent (compiled programs on Linux won’t run on Windows), however they are machine independent.</li><br>
  <li><u><b>Mid-level language:</b></u> It is a mid-level language as we can do both systems-programming (drivers, kernels, networking etc.) and build large-scale user applications (Media Players, Photoshop, Game Engines etc.)</li><br>
  <li><u><b>Rich library support:</b></u> Has a rich library support (Both standard ~ built-in data structures, algorithms etc.) as well 3rd party libraries (e.g. Boost libraries) for fast and rapid development.</li><br>
  <li><u><b>Speed of execution:</b></u> C++ programs excel in execution speed. Since, it is a compiled language, and also hugely procedural. Newer languages have extra in-built default features such as garbage-collection, dynamic typing etc. <br>which slow the execution of the program overall. Since there is no additional processing overhead like this in C++, it is blazing fast.</li><br>
  <li><u><b>Pointer and direct Memory-Access:</b></u> C++ provides pointer support which aids users to directly manipulate storage address.<br> This helps in doing low-level programming (where one might need to have explicit control on the storage of variables).</li><br>
</ul>  

<ul>
<h2 style="color:red;">Applications of C++</h2>
<li>Operating Systems & Systems Programming. e.g. Linux-based OS (Ubuntu etc.) </li><br>
<li>Browsers (Chrome & Firefox)</li><br>
<li>Graphics & Game engines (Photoshop, Blender, Unreal-Engine) </li><br>
<li>Database Engines (MySQL, MongoDB, Redis etc.)</li><br>
<li>Cloud/Distributed Systems</li><br>

</ul>
  <ul style="color:red; text-align:left;"><b>BASIC PROGRAMS</bs></ul>
    <p style="text-align:center;">#include < iostream ><br>
using namespace std;<br>

int main() {<br>
    int n, sum = 0;<br>

    cout << "Enter a positive integer: ";<br> 
    cin >> n;<br>

    for (int i = 1; i <= n; ++i) { <br>
        sum += i;<br>
    }<br>

    cout << "Sum = " << sum;<br>
    return 0;<br>
}</p>
<h3 sty>Another code</h3>
<p style="text-align : center ;">
// C++ program to find maximum <br>
// in arr[] of size n<br>
#include < bits/stdc++.h > <br>
using namespace std;<br>

int largest(int arr[], int n)<br>
{
	int i;<br>
	
	// Initialize maximum element<br>
	int max = arr[0];<br>

	// Traverse array elements<br>
	// from second and compare<br>
	// every element with current max<br>
	for (i = 1; i < n; i++)<br>
		if (arr[i] > max)<br>
			max = arr[i];<br>

	return max;<br>
}<br>

// Driver Code<br>
int main() <br>
{<br>
	int arr[] = {10, 324, 45, 90, 9808};<br>
	int n = sizeof(arr) / sizeof(arr[0]);<br>
	cout << "Largest in given array is "<br>
		<< largest(arr, n);<br>
	return 0;<br>
}<br>

</p>
      <ul style="color:red;"><u>OOPS CONCEPT</u></ul>
     <p>
      Object-oriented programming has four basic concepts: encapsulation, abstraction, inheritance and polymorphism. Even if these concepts seem incredibly complex, understanding the general framework of how they work will help you understand the basics of a computer program. Here are the four basic theories and what they entail:
      </p><ul>
        <li>Encapsulation</li>
        <li>Inheritance</li>
        <li>Polymorphism</li>
        <li>Abstraction</li>
      </ul>
</ul>
<h2 style="color:red;">Descriptions</h2>
<p>
<ul><u><b>Encapsulation :</b></u></ul>
The different objects inside of each program will try to communicate with each other automatically. If a programmer wants to stop objects from interacting with each other, they need to be encapsulated in individual classes. Through the process of encapsulation, classes cannot change or interact with the specific variables and functions of an object.<br><br>
<ul><u><b>Abstraction :</b></u></ul>
Abstraction is like an extension of encapsulation because it hides certain properties and methods from the outside code to make the interface of the objects simpler. Programmers use abstraction for several beneficial reasons. Overall, abstraction helps isolate the impact of changes made to the code so that if something goes wrong, the change will only affect the variables shown and not the outside code.<br><br>
<ul><u><b>Inheritance :</b></u></ul>
Using this concept, programmers can extend the functionality of the code's existing classes to eliminate repetitive code. For instance, elements of HTML code that include a text box, select field and checkbox have certain properties in common with specific methods.
Instead of redefining the properties and methods for every type of HTML element, you can define them once in a generic object. Naming that object something like "HTMLElement" will cause other objects to inherit its properties and methods so you can reduce unnecessary code.
The main object is the superclass and all objects that follow it are subclasses. Subclasses can have separate elements while adding what they need from the superclass.<br><br>
<ul><u><b>Polymorphism :</b></u></ul>
This technique meaning "many forms or shapes" allows programmers to render multiple HTML elements depending on the type of object. This concept allows programmers to redefine the way something works by changing how it is done or by changing the parts in which it is done. Terms of polymorphism are called overriding and overloading.<br><br>

 
<ul style="color:red;"><u>C++ Projets idea</u></ul>

<ul>
        <li>Login and Registration System.</li>
        <li>Car Rental System.</li>
        <li>Student Report Management System.</li>
        <li>Casino Number Guessing Game.</li>
        <li>Credit Card Validator</li>
      </ul>
</p>

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