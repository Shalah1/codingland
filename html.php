<!DOCTYPE html>
<html lang="en">
<head>
  <title>Html</title>
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
              <a href="html.php">Html</a>
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
$myfile = fopen("html.txt", "w") or die("Unable to open file!");
$txt = "HTML is the standard markup language for creating Web pages.
HTML - stands for Hyper Text Markup Language 
HTML - is the standard markup language for creating Web pages
HTML - describes the structure of a Web page
HTML - consists of a series of elements
HTML - elements tell the browser how to display the content
HTML - elements label pieces of content such as this is a heading, this is a paragraph, this is a link, etc.";
fwrite($myfile, $txt);
fclose($myfile);
 ?>
 <?php
$myfile = fopen("html.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("html.txt"));

fclose($myfile);
?>

<h3>HTML basic syntax</h3>
 <ul>
  < !DOCTYPE html > <br>
 < html > <br>
 < head > <br>
 < title >Page Title< /title > <br>
 < /head > <br>
 < body > <br>

 < h1 >My First Heading< /h1 > <br>
 < p >My first paragraph. <br>
 
 < /body > <br>
 < /html > <br>

 <h3>Explanation</h3>
 <li>The < !DOCTYPE html > declaration defines that this document is an HTML5 document</li>
 <li>The < html > element is the root element of an HTML page</li>
 <li>The < head > element contains meta information about the HTML page</li>
 <li>The < title > element specifies a title for the HTML page (which is shown in the browser's title bar or in the page's tab)</li>
 <li>The < body > element defines the document's body, and is a container for all the visible contents, such as headings, paragraphs, images, hyperlinks, tables, lists, etc.</li>
 <li>The < h1 > element defines a large heading</li>
 <li>The < p > element defines a paragraph</li>
 < /ul >


 <h3>what is HTML elements</h3>

 <table class="ws-table-all notranslate">
<tr>
<th>Start tag</th>
<th>Element content</th>
<th>End tag</th>
</tr>
<tr>
<td>&lt;h1&gt;</td>
<td>My First Heading</td>
<td>&lt;/h1&gt;</td>
</tr>
<tr>
<td>&lt;p&gt;</td>
<td>My first paragraph.</td>
<td>&lt;/p&gt;</td>
</tr>
<tr>
<td>&lt;br&gt;</td>
<td><em>none</em></td>
<td><em>none</em></td>
</tr>
</table>

<h3>10 HTML Project Ideas For Beginners</h3>

<ul>
<li>A tribute page. This is one of the most simple HTML projects you can make. ...</li>
<li>A survey form. Websites often include forms as a part of their customer data collection strategy. ...</li>
<li>Technical documentation page. ...</li>
<li>Landing page. ...</li>
<li>Event page. ...</li>
<li>Parallax website. ...</li>
<li>Personal portfolio page. ...</li>
<li>Restaurant website.</li>
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