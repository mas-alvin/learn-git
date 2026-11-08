<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $mhs_barengs = ["Mamang", "Pamekasan", "Jeje", "Irfan" ];
    $mhs_barengs[4] = "Alif";
    echo "Halo" . $mhs_barengs[4];

    echo "<pre>";
    var_dump($mhs_barengs);
    echo "</pre>";
        
    ?>
</body>
</html>
