<?php 
if(isset($_POST['submit'])){
    $fileNmae = $_FILES ['file']['name'];
    $fileTmpNmae = $_FILES ['file']['tmp_name'];
    if (empty ($fileNmae)){
        $errFile = "<span style= 'color: red'>File not found </span>";
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="file" id="file">
<input type="submit" value="Upload" name="submit">



</form>
<?= $errFile ?? null?> 