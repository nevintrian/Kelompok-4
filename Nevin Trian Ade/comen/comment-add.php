<?php
require_once ("db.php");
$commentId = isset($_POST['KD_DIS']) ? $_POST['KD_DIS'] : "";
$comment = isset($_POST['ISI_DIS']) ? $_POST['ISI_DIS'] : "";
$commentSenderName = isset($_POST['USERNAME']) ? $_POST['USERNAME'] : "";
$date = date('Y-m-d H:i:s');
$a="5";

$sql = "INSERT INTO `diskusi`(`KD_DIS`, `KD_CLUSTER`, `KD_DISP`, `USERNAME`, `ISI_DIS`, `TGLWAKTU_DIS`) VALUES (null, $a, '$commentId', '$commentSenderName', '$comment', '$date')";
$result = mysqli_query($conn, $sql);

if (! $result) {
    $result = mysqli_error($conn);
}
echo $result;


?>
