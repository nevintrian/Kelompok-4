<?php
function getComments($row) {

$PhpDate = strtotime($row['created_at']);
$FormattedPhpDate = date('d F Y', $PhpDate );


	echo "<li class='comment'>";
	echo "<div class='aut'>".$row['author']."</div>";
	echo "<div class='comment-body'>".$row['comment']."</div>";

echo "<div class='timestamp'>".$FormattedPhpDate."</div>";

	echo "<a href='#comment_form' class='reply' id='".$row['id']."'>Reply</a>";
	$q = "SELECT * FROM Table_Name WHERE parent_id = ".$row['id']."";     // Mention your Table Name  in place of "Table_Name"
	$r = mysqli_query($q);
	if(mysqli_num_rows($r)>0)
		{
		echo "<ul>";
		while($row = mysqli_fetch_assoc($r)) {
			getComments($row);
		}
		echo "</ul>";
		}
	echo "</li>";
}
?>
