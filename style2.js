// array to store expense data
let expenseData = [];

// function to add expense data to table
function addExpenseToTable(expense) {
    const tableBody = document.getElementById('expense-table-body');
    const tableRow = document.createElement('tr');
    tableRow.innerHTML = `
        <td>${expense.date}</td>
        <td>${expense.revenue}</td>
        <td>${expense.expenditure}</td>
        <td>${expense.balance}</td>
    `;
    tableBody.appendChild(tableRow);
}

// function to calculate balance
function calculateBalance(revenue, expenditure) {
    return revenue - expenditure;
}

// function to handle add expense form submission
function handleAddExpenseFormSubmission(event) {
    event.preventDefault();
    const date = document.getElementById('date').value;
    const revenue = parseInt(document.getElementById('revenue').value);
    const expenditure = parseInt(document.getElementById('expenditure').value);
    const balance = calculateBalance(revenue, expenditure);
    const expense = { date, revenue, expenditure, balance };
    expenseData.push(expense);
    addExpenseToTable(expense);
    document.getElementById('add-expense-form').reset();
}

// add event listener to add expense form
document.getElementById('add-expense-form').addEventListener('submit', handleAddExpenseFormSubmission);