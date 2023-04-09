<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
	<title>Coding Land</title>
    <link rel="stylesheet" href="style2.css"/>
	<style>

.container_full_header_bg{
	  background-color: white;

}
.container_full_content_wrapper_bg{
	background-color: white;
}
aside {
  width: 95%;
  padding-left: 1px;
  margin-left: 1px;
  float: left;
  font-style: italic;
  
}
img {
  display : block;
  margin-left: auto;
  margin-right: auto;
  
}
h1{
	text-align: center;
	color: balck;
}
#footer {
   background-color : white;
}

</style>
</head>
<body>
    <div class="container_full_header_bg">
		<div class="fix container ">
			<div id="header">
				<img src="alogo.png" alt="logo is loading" style="width:30%;">

					<h1 style="color : green;">Welcome to coding land!</h1>
				<!-- <div class="undrmnu_srch_floatright">
                    <input type="text" value="" name="s" id="srch">
                    <input type="submit" id="searchsubmit" value="Search">   
                               
                </div> 	 -->
			</div>
		</div>
	</div>
	<div class="container_full nav_bg">
        <div class="fix_container">
        	<nav>
				<div id="nav">
					<ul><hr>
						<li><a href="#">Languages &raquo;</a>
						<ul>
						<li><a href="java.php">Java</a></li>
						<li><a href="cshap.php">C#</a></li>
						<li><a href="cplusplus.php">C++</a>
						<li><a href="python.php">Python</a>
						</ul>
                        </li>
						<li><a href="#">Data Structure &raquo;</a>
							<ul>
								<li><a href="array.php">Array</a></li>
								<li><a href="stack.php">Stack</a></li>
								<li><a href="tree.php">Tree </a>
								<li><a href="graph.php">Graph</a>
							</ul>
						</li>
						<li><a href="#">Algorithm &raquo;</a>
						<ul>
								<li><a href="greedyalgo.php">Greedy Algorithm</a></li>
								<li><a href="sort.php">Sorting</a></li>
								<li><a href="search.php">Searching </a>
								<li><a href="dp.php">Dynamic Programming</a>
							</ul>
					    </li>
						<li><a href="#">Web Technologies &raquo;</a>
					    <ul>
								<li><a href="html.php">Html</a></li>
								<li><a href="css.php">Css</a></li>
								<li><a href="js.php">Java Script </a>
								<li><a href="php.php">Php</a>
							</ul>
					    </li>
					</ul>
				</div>
			</nav>	
        </div>
    </div>
    <div class="container_full_content_wrapper_bg">
        <div class="fix container">
            <div class="content_wrapper">
				<section class="left_content">
					<article class="single_post_wrapper">
						<img src="images/Blog1.png" alt="" />
						<h2>Must Do Coding Questions for Product Based Companies.</h2>
						<p>As the placement season is back, CodingLand is here to help you crack the interview. We have selected some most commonly asked and MUST DO…...</p>
						<a class="continue_r" href="#">Continue Reading</a>
					</article>				
			     	</section>
			    <div class="right_content">
					<aside class="single_sidebar">
						<h2 style="color:red;">About CodingLand.</h2>
						<p>Coding land is all about learning coding.Here we are provding some computer language like JAVA , C++ ,PYTHON ,C#</p>
						<p>Not only one can learn computer languages also one can learn DATA STRUCTURE, ALGORITHM , WEB TECHNOLOGIES.</p>
						</aside>
					<!-- <aside class="single_sidebar">
						<h2>Courses</h2>
						<input type="text" class="search_box" placeholder="Searching for the courses?"/>
					</aside>	 -->
					<!-- <aside class="single_sidebar">
						<h2>Stay Tuned.</h2> -->
						<!-- <div class="email_submit">
							<input type="email" placeholder="Your Email" />
							<input type="submit" id="searchsubmit"/>						
						</div> -->
					</aside>					
				</div>
			</div>
        </div>
    </div>
    <div class="container_full">
		<div class="fix container">
			<footer id="footer">
				<h1>CodingLand</h1>				
                     <h1 style="color : green;"> <?php include 'footer.php';?></h1>
				<div class="social_area">
					<ul>
						<li class="facebook"><a href="#"></a></li>
						<li class="twitter"><a href="#"></a></li>
					</ul>
				</div>
			</footer>
		</div>
	</div>
    <!----<div class="container">
        <div class="fix container">
        </div>
    </div>---->
</body>        
</html>