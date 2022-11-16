<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form >
        <input type="file" accept=".csv" />
    </form>
<?php
function storeimage()
{
    $files = array();

    $target_path1 = $_FILES['file1']['tmp_name'];
    $target_path2 = $_FILES['file2']['tmp_name'];
    $target_path3 = $_FILES['file3']['tmp_name'];

    $files = array(1=>'file1',2=>'file2',3=>'file3');
    //uploadimages($files)    
    //$target_path = "read.cvs/";

    foreach($files as $data)
    {
        $target_path = $_FILES[$data]['name']; 
        if(move_uploaded_file($_FILES[$data]['tmp_name'], "read.cvs/".$target_path)) 
        {
            $publish = $_POST['publish'];
            $$sql = "INSERT INTO uploads 
            VALUES (NULL,'$files[file1]','$files[file2]','$files[file3]','$publish')";
            $mysqlupdate = mysql_query($databaseupdate);
            echo "The file ".  basename($_FILES[$data]['name']). 
                " has been uploaded<BR>";
        } 
        else
        {
            echo "There was an error uploading the file, please try again!";
        }
        $target_path ="";
    }
}
?>
</body>
</html>