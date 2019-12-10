<?php 
include("config.php");
include("functions.php");

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Threaded Comments</title>
<script type='text/javascript' src='jquery.pack.js'></script>
<script type='text/javascript'>
$(function(){
	$("a.reply").click(function() {
		var id = $(this).attr("id");
		$("#parent_id").attr("value", id);
		$("#name").focus();
	});
});
</script>


<?php

// If the form was submitted, scrub the input (server-side validation)
// see below in the html for the client-side validation using jQuery

$name = '';
$email = '';
$comment_body = '';
$output = '';

if($_POST) {
  // collect all input and trim to remove leading and trailing whitespaces
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $comment_body = trim($_POST['comment_body']);
  
  $errors = array();
  
  // Validate the input
  if (strlen($name) == 0)
    array_push($errors, "Please enter your name");

  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    array_push($errors, "Please specify a valid email address");
 
  if (strlen($comment_body) == 0) 
    array_push($errors, "Please specify your comment_body");
    
  // If no errors were found, proceed with storing the user input
  if (count($errors) == 0) {
    array_push($errors, "No errors were found. Thanks!");
  }
  
  //Prepare errors for output
  $output = '';
  foreach($errors as $val) {
    $output .= "<p class='output'>$val</p>";
  }
  
}

?>

<style type="text/css">
    .label {width:100px;text-align:right;float:left;padding-right:10px;font-weight:bold;}
    #comment_form label.error, .output {color:#FB3A3A;font-weight:bold;}
 </style>
 

  
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
  
   <script>
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #comment_form element
    $("#comment_form").validate({
    
        // Specify the validation rules
        rules: {
            name: "required",
            comment_body: "required",
            email: {
                required: true,
                email: true
            },
        },
        
        // Specify the validation error messages
        messages: {
            name: "Please enter your name",
            email: "Please enter a valid email address",
    		comment_body: "Please enter your comment",
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>


 <!--  New Test.php Ends Here -->


<style type='text/css'>
html, body, div, h1, h2, h3, h4, h5, h6, ul, ol, dl, li, dt, dd, p, blockquote,
pre, form, fieldset, table, th, td { margin: 0; padding: 0; }

body {
font-size: 14px;
line-height:1.3em;
}

a, a:visited {
outline:none;
color:#7d5f1e;
}

.clear {
clear:both;
}

#wrapper {
	width:480px;
	margin:0px auto;
	padding:15px 0px;
}

.comment {
	padding:5px;
	border:2px solid #7d5f1e;
	margin-top:15px;
	list-style:none;
}

.aut {
	font-weight:bold;
}

.timestamp {
	font-size:85%;
	float:right;
}

#comment_form {
	margin-top:15px;
}

#comment_form input {
	font-size:1.2em;
	margin:0 0 10px;
	padding:3px;
	display:block;
	width:100%;
}

#comment_body {
	display:block;
	width:100%;
	height:150px;
}

#submit_button {
	text-align:center; 
	clear:both;
}
</style>


</head>
<body>
<br><br><br>
<center>
<pre>

This code is available at : <a href="http://www.watchoutonnet.com/php-script-for-unique-visitor-counter.php">php script for unique visitor counter Page</a>

If you liked or benefitted from it, please subscribe to our
entertainment channel at following link :

<a href="https://goo.gl/Cc3fzq" target="_blank">Entertainment Channel</a>	

Thanks. 
Team - Watch Out On Net.

</pre>
</center><br><br><br>


<?php echo $output; ?>


<div id='wrapper'>


<form id="comment_form" action="post_comment.php" method='post'>

<label for="name">Name:</label>	<input type="text" id="name" name="name" value="<? echo $name; ?>" /><br />


<label for="email">Email:</label> <input type="text" id="email" name="email" value="<? echo $email; ?>" /><br />

	
	<label for="comment_body">Comment:</label><textarea id="comment_body" name="comment_body" value="<? echo $comment_body; ?>" />   </textarea> <br />
	
	<input type='hidden' name='parent_id' id='parent_id' value='0'/>
	<div id='submit_button'> <input type="submit" value="Add comment" name="go" />
	</div>
</form>

<ul>
<?php
$q = "SELECT * FROM Table_Name WHERE parent_id = 0";   // Change Table_Name with your Table Name
$r = mysqli_query($q);
while($row = mysqli_fetch_assoc($r)){
	getComments($row);
}
?>
</ul>

</div>
</body>
</html>
