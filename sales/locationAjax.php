<?php
    require_once('dbconnection.php'); 
    $locationID = $_POST['id']; 
    $sql = "SELECT * FROM deliveryaddress where id = $locationID"; 
    $result = mysqli_query($conn, $sql); 
?> 
<?php while ($row = mysqli_fetch_assoc($result)) { ?> 
    <input type="text" name="name" value="<?= $row['address'] ?>" /> 
    <input type="text" name="name" value="<?= $row['postalcode'] ?>" /> 
    <input type="text" name="name" value="<?= $row['place'] ?>" /> 
} 
?>