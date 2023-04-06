<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Expense Manager</title>
</head>

<body>
    <div id="wrapper">
        <div class="income">
            <h2>Income</h2>
            <label for="income">
                Enter your income :
                <input type="number" id="income-box">
                <input type="submit" id="income-btn" value="Add Income">
                <input type="submit" id="update-income-btn" value="Update Income">
            </label>
        </div>

        <div class="expenses">
            <h2>Expenses</h2>
            <select name="category" id="category">
                <option value="grocery">Grocery</option>
                <option value="veggies">Veggies</option>
                <option value="travelling">Travelling</option>
                <option value="miscellaneous">Miscellaneous</option>
            </select>
            <input type="number" id="expense-box">
            <input type="submit" id="expense-btn" value="Add Expense">
            <input type="submit" id="update-expense-btn" value="Update Expense">
        </div>
        <hr>
        <div class="calculation">
            <div id = "calculation__list">
                
            </div>
            <div class="calculation__expense">
                <p id="total-expenditure">Total Expenditure : 0</p>
            </div>

            <div class="calculation__remaining">
                <p id="remaining-money">Remaining Money : 0 </p>
            </div>
        </div>
    </div>
</body>
<script src="script.js"></script>
</html>