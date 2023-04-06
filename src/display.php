<?php
session_start();
if(!isset($_SESSION['app']['income'])) {
    $_SESSION['app']['income'] = [];
}
if(!isset($_SESSION['app']['expense'])) {
    $_SESSION['app']['expense'] = [];
}
// display all the income first
echo "<h3>List of all the income : </h3>";
$total = 0;

foreach ($_SESSION['app']['income'] as $key => $value) {
    $total += $value;
    echo "<span style = 'color:green'> Income Added : $ $value </span>";
    echo "<button class = 'editIncome' id = `$key` onclick = 'editIncome(`$key`, `$value`)'>Edit</button>";
    echo "<button onclick = 'deleteIncome(`$key`)'>Delete</button>", "<br>";
}
echo "<hr>";
// display all the spendings then
echo "<h3>List of all the expenses </h3>";
if(isset($_SESSION['app']['expense']))
echo "<table><tbody>";

foreach ($_SESSION['app']['expense'] as $key => $category) {
    echo "<tr>";
    foreach ($category as $c => $val) {
        echo "<td> $c</td>";
        echo "<td>$val</td>";
        echo "<td><button onclick = 'editExpense(`$key`, `$val`, `$c`)'>Edit</button></td>";
        echo "<td><button onclick = 'deleteExpense(`$key`)'>Delete</button></td>";
        $total -= $val;
    }
    echo "</tr>";
}
echo "</tbody></table>";
$grocery = 0;
$veg = 0;
$travel = 0;
$misc = 0;
foreach ($_SESSION['app']['expense'] as $category) {
    $grocery += $category['grocery'];
    $veg += $category['veggies'];
    $travel += $category['travelling'];
    $misc += $category['miscellaneous'];
}
echo "<hr>";
echo "<h3>Category-wise expenditure</h3>";
echo "Money spent on <b> Grocery </b> is &emsp; $grocery <br>";
echo "Money spent on <b> Veggies </b> is &emsp;$veg <br>";
echo "Money spent on <b> Travelling </b> is &emsp;$travel <br>";
echo "Money spent on <b> Miscellaneous </b> is $misc <br>";
echo "<hr>";
echo "<h3>Total :</h3>";
echo "Total Money spent is :", $grocery + $veg + $travel + $misc, "<br>";
echo "Total money remaining : $total <br>";
?>