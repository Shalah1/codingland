<!DOCTYPE html>
<html lang="en">
<head>
  <title>Php</title>
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
              <a href="php.php">PHP</a>
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
 $myfile = fopen("php.txt", "w") or die("Unable to open file!");
$txt = "PHP started out as a small open source project that evolved as more and more people found out how useful it was. Rasmus Lerdorf unleashed the first version of PHP way back in 1994.
PHP is a general-purpose scripting language especially suited to web development. The PHP reference implementation is now produced by The PHP Group.";
fwrite($myfile, $txt);
fclose($myfile);
 ?>
 <?php
$myfile = fopen("php.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("php.txt"));

fclose($myfile);
?>
<ul>
<li>PHP is a recursive acronym for "PHP: Hypertext Preprocessor".

<li>PHP is a server side scripting language that is embedded in HTML. It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites.</li>

<li>It is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server.</li>

<li>PHP is pleasingly zippy in its execution, especially when compiled as an Apache module on the Unix side. The MySQL server, once started, executes even very complex queries with huge result sets in record-setting time.</li>

<li>PHP supports a large number of major protocols such as POP3, IMAP, and LDAP. PHP4 added support for Java and distributed object architectures (COM and CORBA), making n-tier development a possibility for the first time.</li>

<li>PHP is forgiving: PHP language tries to be as forgiving as possible.</li>

<li>PHP Syntax is C-Like.</li>

<h3>Common uses of PHP</h3>
<ul>
<li>PHP performs system functions, i.e. from files on a system it can create, open, read, write, and close them.</li>

<li>PHP can handle forms, i.e. gather data from files, save data to a file, through email you can send data, return data to the user.</li>

<li>You add, delete, modify elements within your database through PHP.</li>

<li>Access cookies variables and set cookies.</li>

<li>Using PHP, you can restrict users to access some pages of your website.</li>

<li>It can encrypt data.</li>
</ul>

<h3>Characteristics of PHP</h3>
<ul>
<li>Simplicity</li>
<li>Efficiency</li>
<li>Security</li>
<li>Flexibility</li>
<li>Familiarity</li>
</ul>
<h3>"Hello World" Script in PHP</h3>
<p>To get a feel for PHP, first start with simple PHP scripts. Since "Hello, World!" is an essential example, first we will create a friendly little "Hello, World!" script.

As mentioned earlier, PHP is embedded in HTML. That means that in amongst your normal HTML (or XHTML if you're cutting-edge) you'll have PHP statements like this −</p>

<ul>
< html > <br>
   
   < head ><br>
      < title> Hello World< /title ><br>
   < /head ><br>
   
   < body ><br>
     < ?php echo "Hello, World!";? ><br>
   < /body ><br>

< /html ><br>

</ul>
<p>If you examine the HTML output of the above example, you'll notice that the PHP code is not present in the file sent from the server to your Web browser. All of the PHP present in the Web page is processed and stripped from the page; the only thing returned to the client from the Web server is pure HTML output.

All PHP code must be included inside one of the three special markup tags ATE are recognised by the PHP Parser.</p>


< ?php PHP code goes here ? > <br>

< ?    PHP code goes here ? > <br>

< script language = "php" > PHP code goes here < /script > <br>


<h3>Top 15 PHP Project Ideas</h3>
<ul>
<li>Build a Clothes Recommendation System. ...</li>
<li>Customer Relationship Management for ISP. ...</li>
<li>Predict Movie Success through Data Mining. ...</li>
<li>Fake Review Identification. ...</li>
<li>Data Mining Implementation for Secure Learning. ...</li>
<li>Detect Net Banking Phishing. ...</li>
<li>Predict User Behaviour. ...</li>
<li>A Chatbot for Students.</li>
</ul>

<br>
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