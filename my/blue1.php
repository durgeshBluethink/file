<?php
  $dbHost     = "localhost";
  $dbUsername = "root";
  $dbPassword = "root";
  $dbName     = "my";
  
  // Create database connection
  $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
  
  // Check connection
  if ($db->connect_error) {
      die("Connection failed: " . $db->connect_error);
  }
  if (($open = fopen("read.csv", "r")) !== FALSE) 
  {
    ?>
    <table>
      <?php
    echo "<tr><th>name</th><th>email</th><th>phone</th></tr>";
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
    {        
      $sql =  "insert into Companies(name, email,phone) values('$data[0]', '$data[1]', '$data[2]')";
      $db->query($sql);
      echo '<tr> <td>'.$data[0].'</td> <td>'.$data[1].'</td>  <td>'.$data[2].'</td></tr>';
      echo "<br>";
      $infos[]=$data[0].','.$data[1].','.$data[2];
    }
    ?>
    </table>
    <?php
  
   
    fclose($open);
  }

?>
