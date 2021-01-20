<?php
//Q-1

$a = 2.5;
 $b = 5;
 $c = 6.2;
 $d = 7.5;

 $Units = 100; // unit amount
 $Bill;

 if ($Units <= 50 ){
      $Bill = ($Units * $a) ;

 } 
 elseif($Units <= 150) {
    $Bill = ($Units * $b);

 }
 elseif($Units <= 250) {
    $Bill = ($Units * $c);

 }
 else ($Units >= 250) {
    $Bill = ($Units * $d)

 };
 echo $Bill;

 echo "<br>";

 //Q-2
 



$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
switch ($operator) {
    case "Add":
       $result = $first_num + $second_num;
        break;
    case "Subtract":
       $result = $first_num - $second_num;
        break;
    case "Multiply":
        $result = $first_num * $second_num;
        break;
    case "Divide":
        $result = $first_num / $second_num;
}
}

?>

<body>
<div id="page-wrap">
<h1>PHP - Simple Calculator Program</h1>
  <form action="" method="post" id="quiz-form">
        <p>
            <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> <b>First Number</b>
        </p>
        <p>
            <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /> <b>Second Number</b>
        </p>
        <p>
            <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
        </p>
        <input type="submit" name="operator" value="Add" />
        <input type="submit" name="operator" value="Subtract" />
        <input type="submit" name="operator" value="Multiply" />
        <input type="submit" name="operator" value="Divide" />
  </form>
</div>
</body>
</html>
<?php
echo "<br>";
//Q-3
$V=20;
if($V>=18){
    echo"eliguble to vote ";
}else{
    echo"not eligable to vote";
}

echo "<br>";




//Q-4
$num = 0;
if ($num > 0){
    echo "Positive";
    } elseif 
    ($num < 0){
        echo "Negative";
    } elseif 
    ($num === 0){
        echo "Zero";
    }
    elseif (!is_numeric($num)) {
        echo "Please input only number";
    }



