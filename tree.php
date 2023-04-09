<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tree</title>
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
              <a href="tree.php">Tree</a>
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
$myfile = fopen("tree.txt", "w") or die("Unable to open file!");
$txt = "In computer science, a tree is a widely used abstract data type that simulates a hierarchical tree structure, with a root value and subtrees of children with a parent node, represented as a set of linked nodes.
A tree data structure can be defined recursively as a collection of nodes (starting at a root node), where each node is a data structure consisting of a value, together with a list of references to nodes  with the constraints that no reference is duplicated, and none points to the root.

Tree represents the nodes connected by edges. We will discuss binary tree or binary search tree specifically.

Binary Tree is a special datastructure used for data storage purposes. A binary tree has a special condition that each node can have a maximum of two children. A binary tree has the benefits of both an ordered array and a linked list as search is as quick as in a sorted array and insertion or deletion operation are as fast as in linked list.";
fwrite($myfile, $txt);
fclose($myfile);
 ?>
 <?php
$myfile = fopen("tree.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("tree.txt"));

fclose($myfile);
?>

           
 <ul>
      
      <img src="binary_tree.jpg" alt="" class="center">
     <h2 style="color:red;">Important Terms:</h2> 
  
    <ul>
    <li>Path − Path refers to the sequence of nodes along the edges of a tree.</li><br>
<li>Root − The node at the top of the tree is called root. There is only one root per tree and one path from the root node to any node.</li><br>

<li>Parent − Any node except the root node has one edge upward to a node called parent.</li><br>

<li>Child − The node below a given node connected by its edge downward is called its child node.</li><br>

<li>Leaf − The node which does not have any child node is called the leaf node.</li><br>

<li>Subtree − Subtree represents the descendants of a node.</li><br>

<li>Visiting − Visiting refers to checking the value of a node when control is on the node.</li><br>

<li>Traversing − Traversing means passing through nodes in a specific order.</li><br>

<li>Levels − Level of a node represents the generation of a node. If the root node is at level 0, then its next child node is at level 1, its grandchild is at level 2, and so on.</li><br>

<li>keys − Key represents a value of a node based on which a search operation is to be carried out for a node.</li><br>
    </ul>
</p>
<h2 style="color:red;">Binary Search Tree Representation</h2>

Binary Search tree exhibits a special behavior.A node's left child must have a value less than its parent's value and the node's right child must have a value greater than its parent value. <br>
BST is a collection of nodes arranged in a way where they maintain BST properties. Each node has a key and an associated value. While searching, the desired key is compared to the keys in BST and if found, the associated value is retrieved.
<br> <br>

  <img src="bst.jpg" alt="" class="center"> <br>

  <h2 style="color:red;"> BST Basic Operations</h2>
<ul>
<li>Insert − Inserts an element in a tree/create a tree.</li><br>

<li>Search − Searches an element in a tree.</li><br>

<li>Preorder Traversal − Traverses a tree in a pre-order manner.</li><br>

<li>Inorder Traversal − Traverses a tree in an in-order manner.</li><br>

<li>Postorder Traversal − Traverses a tree in a post-order manner.</li><br>
</ul>
</p>
<h3> Implementation </h3><br><br>

void insert(int data) {<br>
   struct node *tempNode = (struct node*) malloc(sizeof(struct node));<br>
   struct node *current;<br>
   struct node *parent;<br>

   tempNode->data = data;<br>
   tempNode->leftChild = NULL;<br>
   tempNode->rightChild = NULL;<br>

   //if tree is empty, create root node<br>
   if(root == NULL) {<br>
      root = tempNode;<br>
   } else {<br>
      current = root;<br>
      parent  = NULL;<br>

      while(1) {               <br> 
         parent = current;<br>

         //go to left of the tree<br>
         if(data < parent->data) {<br>
            current = current->leftChild;  <br>              
            
            //insert to the left<br>
            if(current == NULL) {<br>
               parent->leftChild = tempNode;<br>
               return;<br>
            }<br>
         }<br>
			
         //go to right of the tree<br>
         else {<br>
            current = current->rightChild;<br>
            
            //insert to the right<br>
            if(current == NULL) {<br>
               parent->rightChild = tempNode;<br>
               return;<br>
            }<br>
         }<br>
      }            <br>
   }<br>
}<br>
 </p>
 <h3>Search Operation</h3> <br>
 struct node* search(int data) {<br>
   struct node *current = root;<br>
   printf("Visiting elements: ");<br>

   while(current->data != data) {<br>
      if(current != NULL)<br>
      printf("%d ",current->data); <br>
      
      //go to left tree<br>

      if(current->data > data) {<br>
         current = current->leftChild;<br>
      }<br>
      //else go to right tree<br>
      else {                <br>
         current = current->rightChild;<br>
      }<br>

      //not found<br>
      if(current == NULL) {<br>
         return NULL;<br>
      }<br>
      return current;<br>
   }  <br>
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