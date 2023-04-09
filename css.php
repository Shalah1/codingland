<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSS</title>
    <link rel="stylesheet" href="cshap.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
 <style>

h1{
    text-align: center;
	color: #FF5517;
}
.con {
    color: white;
    font-size: 20px;

}

u{
    color:green;
}
h3{
    color : red;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 30%;
}


</style>
</head>
<body>
    <div class="full-page">
        
        <div class="sub-page">    
        <h1>CSS</h1>
        </div> 
            <div class="con">
<?php
$myfile = fopen("css.txt", "w") or die("Unable to open file!");
$txt = "Cascading Style Sheets, fondly referred to as CSS, is a simple design language intended to simplify the process of making web pages presentable.

CSS handles the look and feel part of a web page. Using CSS, you can control the color of the text, the style of fonts, the spacing between paragraphs, how columns are sized and laid out, what background images or colors are used, layout designs,variations in display for different devices and screen sizes as well as a variety of other effects.

CSS is easy to learn and understand but it provides powerful control over the presentation of an HTML document. Most commonly, CSS is combined with the markup languages HTML or XHTML.";
fwrite($myfile, $txt);
fclose($myfile);
 ?>
 <?php
$myfile = fopen("css.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("css.txt"));

fclose($myfile);
?>

           
<h3>Why Use CSS?</h3>
<ul>
<p>CSS is used to define styles for your web pages, including the design, layout and variations in display for different devices and screen sizes.</p>
<li>CSS saves time − You can write CSS once and then reuse same sheet in multiple HTML pages. You can define a style for each HTML element and apply it to as many Web pages as you want.</li> <br>

<li>Pages load faster − If you are using CSS, you do not need to write HTML tag attributes every time. Just write one CSS rule of a tag and apply it to all the occurrences of that tag. So less code means faster download times.</li><br>

<li>Easy maintenance − To make a global change, simply change the style, and all elements in all the web pages will be updated automatically.</li><br>

<li>Superior styles to HTML − CSS has a much wider array of attributes than HTML, so you can give a far better look to your HTML page in comparison to HTML attributes.</li><br>

<li>Multiple Device Compatibility − Style sheets allow content to be optimized for more than one type of device. By using the same HTML document, different versions of a website can be presented for handheld devices such as PDAs and cell phones or for printing.</li><br>

<li>Global web standards − Now HTML attributes are being deprecated and it is being recommended to use CSS. So its a good idea to start using CSS in all the HTML pages to make them compatible to future browsers.</li><br>

</ul>

<h3>CSS Solved a Big Problem</h3>
<p>HTML was NEVER intended to contain tags for formatting a web page!

HTML was created to describe the content of a web page, like:

<h1>This is a heading</h1>

<p>This is a paragraph.</p>

When tags like <font>, and color attributes were added to the HTML 3.2 specification, it started a nightmare for web developers. Development of large websites, where fonts and color information were added to every single page, became a long and expensive process.

To solve this problem, the World Wide Web Consortium (W3C) created CSS.

CSS removed the style formatting from the HTML page!</p>

<h3>CSS Saves a Lot of Work!</h3>
<p>
The style definitions are normally saved in external .css files.

With an external stylesheet file, you can change the look of an entire website by changing just one file!</p>

<h3>10 CSS Project Ideas</h3>
<ul>
<li>Revamp an existing site using modern CSS themes. You need not design a website from scratch. ...</li>
<li>Transform a website into a printer-friendly version. ...</li>
<li>Change the layout of a form. ...</li>
<li>Improve the speed of a website. ...</li>
<li>Solar system animation. ...</li>
<li>Pure CSS minesweeper. ...</li>
<li>Day-night toggles. ...</li>
<li>Custom map creator.</li>


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
</div>

</html>