// function to display all
function display() {
    $.ajax({
        type: "POST",
        url: "./display.php",
    }).done(function (res) {
        $('.calculation').html(res);
    });
}

// to add income
$(document).on("click", "#income-btn", function () {
    income = $("#income-box").val();
    $.ajax({
        type: "POST",
        url: "./add_income.php",
        data: { 'income': income },
        dataType: "text"
    }).done(function (res) {
        display();
    });
});

// expenditure
$(document).on("click", "#expense-btn", function () {
    spent = $("#expense-box").val();
    category = $("#category").val();
    $.ajax({
        type: "POST",
        url: "./spent.php",
        data: { 'spent': spent, 'category': category },
        dataType: "text"
    }).done(function (data) {
        display();
    });
    display();
});

// editIncome
$("#update-income-btn").hide();
$("#update-expense-btn").hide();
let uid = 0;

function editIncome(id, value) {
    $("#update-income-btn").show();
    $("#income-btn").hide();
    uid = id;
    $.ajax({
        type: "POST",
        url: "./edit_income.php",
        data: { 'id': id, 'value': value },
        dataType: "text"
    }).done(function (data) {
        $("#income-box").val(data);
    });
}

$(document).on('click', "#update-income-btn", function () {
    value = $("#income-box").val();
    $.ajax({
        type: "POST",
        url: "./update_income.php",
        data: { 'id': uid, 'value': value },
        dataType: "text"
    }).done(function (data) {
        display();
        $("#update-income-btn").hide();
        $("#income-btn").show();
    });
});

// editExpense
function editExpense(key, value, category) {
    $("#update-expense-btn").show();
    $("#expense-btn").hide();
    $('#category').prop('disabled', true);
    uid = key;
    $("#category").val(category);
    $("#expense-box").val(value);
}
// update expense
$(document).on('click', '#update-expense-btn', function () {
    category = $("#category").val();
    value = $("#expense-box").val();
    if (value >= 0) {
        $.ajax({
            type: "POST",
            url: "./update_expense.php",
            data: { 'id': uid, 'category': category, 'value': value },
            dataType: 'text'
        }).done(function (data) {
            display();
            $("#update-expense-btn").hide();
            $("#expense-btn").show();
            $('#category').prop('disabled', false);
        });
    } else {
        alert("Enter Positive Values");
    }
});

// delete income
function deleteIncome(id) {
    $.ajax({
        type : "POST",
        url : "./delete_income.php",
        data : {'id' : id},
        dataType : 'text'
    }).done(function (res) {
        console.log(res);
        display();
    });
}
// delete expense
function deleteExpense(id) {
    $.ajax({
        type : "POST",
        url : "./delete_expense.php",
        data : {'id': id},
        dataType : "text"
    }).done(function(res){
        display();
    });
}