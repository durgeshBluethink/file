<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
    <input type="file" id="img" name="img" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">

    </form>
    <?php
  
  if (($open = fopen("read.csv", "r")) !== FALSE) 
  {
  
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
    {        
      $array[] = $data; 
    }
  
    fclose($open);
  }
  echo "<pre>";
  //To display array data
  var_dump($array);
  echo "</pre>";


$list = array (
    array('aaa', 'bbb', 'ccc', 'dddd'),
    array('123', '456', '789'),
    array('"aaa"', '"bbb"')
);

$fp = fopen('write.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}
$file_name = "write.csv";
if (($handle = fopen($file_name, "r")) !== FALSE) {
    echo '<table border="1"><thead>';
    echo '<th>Name</th><th>Email</th><th>Date Of Birth</th>';
    echo '</thead>';
    while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
        echo '<tr><td>' . $data[0] . '</td><td>' . $data[1] . '</td><td>' . $data[2] . '</td></tr>';
        $infos[] = $data[0] . ',' . $data[1] . ',' . $data[2];
    }
    echo '</tbody></table>';
    fclose($handle);
}
fclose($fp);
?>
</body>
</html>