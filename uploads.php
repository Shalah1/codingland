

<?php

if(isset($_POST['uploads'])){
	$file_name =$_FILES['myfile']['name'];
	$file_tmp_name = $_FILES['myfile']['tmp_name'];
	if(move_uploaded_file($file_tmp_name, "uploads/" .$file_name)){
echo "File uploaded Successfully.";
	}
else{
	echo "File uploaded Successfully.";
}
}
?><br>

<a download ="<?php echo $file_name;?>" href ="uploads/<?php echo $file_name;?>">Click here to download

