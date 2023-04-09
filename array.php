<!DOCTYPE html>
<html lang="en">
<head>
  <title>Array</title>
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
              <a href="array.php">Array</a>
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
$myfile = fopen("array.txt", "w") or die("Unable to open file!");
$txt = "An array is a collection of items stored at contiguous memory locations. The idea is to store multiple items of the same type together.
 This makes it easier to calculate the position of each element by simply adding an offset to a base value, i.e., 
 the memory location of the first element of the array (generally denoted by the name of the array).";
fwrite($myfile, $txt);
fclose($myfile);
 ?>
 <?php
$myfile = fopen("array.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("array.txt"));

fclose($myfile);
?>
<img src="array.png" alt="loading" class="center">
<p>The above image can be looked as a top-level view of a staircase where you are at the base of the staircase. 
Each element can be uniquely identified by their index in the array </p>

<h2 style="color:red;">Types of Array</h2>
<ul>
<li>One Dimentioin Array</li>
<li>MultiDimentin Array</li>
</ul>

           
 <ul>
      <h2 style="color:red;">Array Memory allocation</h2>
      <img src="Arrays-in-C-Programming-2.png.png" alt="loading" class =center>

<p>Data, heap, and stack are the three segments where arrays can be allocated memory to store their elements, the same as other variables.<br>  Dynamic Arrays: Dynamic arrays are arrays, which needs memory location to be allocated at runtime.</p>
   
<img src="index.png" alt="loading" class =center>
<p>Here index refers to the location of an element in the array. Let us imagine if A[L] is the name of the array, where “A” is the variable name, and “L” is the length of the array, i.e. the number of elements present in the array.

Then A[i] represents the element at that “i+1”th position in the array, .for example:

A[6]= 72 means element at 6+1 th location of the array</p>

<h2 style="color:red; ">Array syntax</h2>
<p>Array declaration syntax is very simple. The syntax is the same as for a normal variable declaration except the variable name should be followed by subscripts to specify the size of each dimension of the array. The general form for an array declaration would be:
<br><br>
VariableType varName[dim1, dim2, ..., dimN];<br><br>
where VariableType is a Modelica type like Real or Integer, varName is the name of the varia <br><br>

<h2 style="color:red">Integer Sizes </h2>
<p>
Normally, the dimension specifications are simply integers that indicate the size of that dimension. For example:
<br><br>
Real x[5]; <br><br>
In this case, x is an array of real valued numbers with only one dimension of size 5. It is possible to use parameters or constants specify the size of an array, e.g.,
<br><br>
parameter Integer d1=5;<br>
constant Integer d2=2;<br>
Real x[d1, d2];</p>

<h2 style="color:red;">Array Generics </h2>
<p>
We may wish to use arrays as part of classes or functions that support generics. Due to the way Java handles generics, this can be difficult.

In this tutorial, we'll understand the challenges of using generics with arrays. Then, we'll create an example of a generic array.

We'll also look at where the Java API has solved a similar problem.
</p>

<h2 style="color:red;">Creating a Generic Array </h2>

<p>
For our example, let's consider a bounded stack data structure MyStack, where the capacity is fixed to a certain size. Also, as we'd like the stack to work with any type, a reasonable implementation choice would be a generic array.

First, let's create a field to store the elements of our stack, which is a generic array of type E:
<br>
private E[ ] elements;<br>
Second, let's add a constructor: <br>

public MyStack(Class<E> clazz, int capacity) {<br>
    elements = (E[ ]) Array.newInstance(clazz, capacity);<br>
} <br>
</p>
<h2 style="color: red">Using ArrayList in Place of an Array</h2>

Interestingly, ArrayList itself is implemented using generic arrays. Let's peek inside ArrayList to see how.
<br>
First, let's see the list elements field: <br>

transient Object[] elementData; <br>
Notice ArrayList uses Object as the element type. As our generic type is not known until runtime, Object is used as the superclass of any type. <br>

It's worth noting that nearly all the operations in ArrayList can use this generic array as they don't need to provide a strongly typed array to the outside world, except for one method – toArray!


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