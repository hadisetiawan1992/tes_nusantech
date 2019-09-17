<html>
<head>
    <title>Tes Nusantech</title>
</head>
<body>
    <form method="post" action="">
        <input type="number" name="input" value="<?php echo @$_POST['input']; ?>">&nbsp;<button type="submit">Generate Maze</button>
    </form>

<?php
// input
$input = @$_POST['input'];

$increment = 1;
$space = "<td width:7px;>&nbsp;</td>";
$fill = "<td width:7px;>@</td>";

echo "<table>";
for($a = 1; $a <= $input; $a++){
    echo "<tr>";
    if($increment == 1){
        for($b = 1; $b <= $input; $b++){
            if($b == 2){
                echo $space;
            }else{
                echo $fill;
            }
        }
    }else if($increment == 2){
        for($b = 1; $b <= $input; $b++){
            if($b == 1 || $b == $input){
                echo $fill;
            }else{
                echo $space;
            }
        }
    }else if($increment == 3){
        for($b = 1; $b <= $input; $b++){
            if($b == ($input - 1)){
                echo $space;
            }else{
                echo $fill;
            }
        }
    }else if($increment == 4){
        for($b = 1; $b <= $input; $b++){
            if($b == 1 || $b == $input){
                echo $fill;
            }else{
                echo $space;
            }
        }
        $increment = 0;
    }
    $increment++;
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>