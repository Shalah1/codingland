<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stack</title>
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
              <a href="stack.php">Stack</a>
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
$myfile = fopen("stack.txt", "w") or die("Unable to open file!");
$txt = "A stack is a linear data structure in which all the insertion and deletion of data or you can say its values are done at one end only, rather than in the middle. Stacks can be implemented by using arrays of type linear.
The stack is mostly used in converting and evaluating expressions in Polish notations, i.e.:<br><br>
1-Infix 2-Prefix 3-Postfix<br><br>
In case of arrays and linked lists, these two allows programmers to insert and delete elements from any place within the list, i.e., from the beginning or the end or even from the middle also. 
But in computer programming and development, there may arise some situations where insertion and deletion require only at one end wither at the beginning or end of the list.
The stack is a linear data structure, and all the insertion and deletion of its values are done in the same end which is called the top of the stack. Let us suppose take the real-life example of a stack of plates or a pile of books etc.
As the item in this form of data structure can be removed or added from the top only which means the last item to be added to the stack is the first item to be removed. So you can say that the stack follows the Last In First Out (LIFO) structure.";
fwrite($myfile, $txt);
fclose($myfile);
 ?>
 <?php
$myfile = fopen("stack.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("stack.txt"));

fclose($myfile);
?>

           
 <ul>
      <h2 style="color:red;">Stack as Abstract Data Type:</h2>
      <p>He stacks of elements of any particular type is a finite sequence of elements of that type together with the following operations:</p>

  <li>Initialize the stack to be empty</li><br>
  <li>Determine whether the stack is empty or not</li><br>
  <li>Check whether the stack is full or not</li><br>
  <li>If the stack is not full, add or insert a new node at the top of the stack. This operation is termed as Push Operation</li><br>
  <li>If the stack is not empty, then retrieve the node at its top</li><br>
  <li>If the stack is not empty, the delete the node at its top. This operation is called as Pop operation</li><br>
      
      <img src="Data-Structures-Algorithms-Stack.png" alt="" class="center">
     <h2 style="color:red;">Lifo:</h2> 
  <p>LIFO is an abbreviation for Last in, first out is same as fist in, last out (FILO).
   It is a method for handling data structures where the last element is processed first and the first element is processed last</p>
  <img src="LIFO.jpg" alt="" class="center">
  <ul style="color:red; text-align:left;"><b>Representation of Stack as Array</bs></ul>
  <p>The stack can be represented in memory with the use of arrays.<br> To do this job, you need to maintain a linear array STACK, a pointer variable top which contains the top element</p>
    

</p>
<h2 style="color:red;">Basic Operations</h2>

<p>Stack operations may involve initializing the stack, using it and then de-initializing it. Apart from these basic stuffs, a stack is used for the following two primary operations −
<br><br>
push() − Pushing (storing) an element on the stack.
<br>
pop() − Removing (accessing) an element from the stack.

When data is PUSHed onto stack.

To use a stack efficiently, we need to check the status of stack as well. 
For the same purpose, the following functionality is added to stacks −
<br>
<br>

peek() − get the top data element of the stack, without removing it. <br>

isFull() − check if stack is full. <br>
isEmpty() − check if stack is empty. <br>
At all times, we maintain a pointer to the last PUSHed data on the stack. <br>
 As this pointer always represents the top of the stack, hence named top.  <br>
 The top pointer provides top value of the stack without actually removing it. <br>
</p>
<p>Example" <br>
    #include < iostream > <br>
#include<stdlib.h> <br>
using namespace std; <br>

class stack {<br>
    int stk[5];<br>
    int top;<br>

public:<br>
    stack()<br>
    {<br>
        top = -1;<br>
    }<br>
    void push(int x)<br>
    {<br>
        if (top >= 4) {<br>
            cout << "stack overflow";<br>
            return;<br>
        }<br>
        stk[++top] = x;<br>
        cout << "inserted " << x;<br>
    }<br>
    void pop()<br>
    {<br>
        if (top < 0) {<br>
            cout << "stack underflow";<br>
            return;<br>
        }<br>
        cout << "deleted " << stk[top--];<br>
    }<br>
    void display()<br>
    {<br>
        if (top < 0) {<br>
            cout << " stack empty"; return; } for (int i = top; i >= 0; i--)<br>
            cout << stk[i] << " ";<br>
    }<br>
};<br>

<br><br>
int main()<br>
{<br>
    int ch;<br>
    stack st;<br>
    while (1) {<br>
        cout << "\n1.push 2.pop 3.display 4.exit\nEnter ur choice: "; cin >> ch;<br>
        switch (ch) {<br>
        case 1:<br>
            cout << "enter the element: "; cin >> ch;<br>
            st.push(ch);<br>
            break;<br>
        case 2:<br>
            st.pop();<br>
            break;<br>
        case 3:<br>
            st.display();<br>
            break;<br>
        case 4:<br>
            exit(0);<br>
        }<br>
    }<br>
}<br>
<img src="output.jpg" alt="">

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