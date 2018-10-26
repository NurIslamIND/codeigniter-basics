<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User View</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    <h1>
<?php
    foreach ($results as $object) {
        echo $object-> username."<br>";
    }

    //echo $results;
?>
</h1>
</body>
</html>