let loan = [
    {id: 001,
     plan: "Home Eco 2", 
     deposit: 19000, 
     daily_rate: 600, 
     monthly_rate: 18000, 
     duration: "35 months", 
     loan_size: 649000},

     {  id: 002,
        plan: "Home Eco 3", 
        deposit: 19000, 
        daily_rate: 600, 
        monthly_rate: 18000, 
        duration: "35 months", 
        loan_size: 649000}

]

function submitForm(){
    
    let payment = document.getElementById("rate_amt").value;
    let total_savings = payment * (20/100);
    let x =0;
    let outstanding_balance = total_savings;

    let service_payment = payment - outstanding_balance;

    let balance_of_loan = document.getElementById("loan_balance").value;
    let remaining_balance = balance_of_loan - service_payment;

    outstanding = outstanding_balance + x;
    document.getElementById("savings").value = outstanding;

    document.getElementById("loan_balance").value = remaining_balance;
    document.getElementById("amount_paid").value = service_payment;
    console.log("savings"+outstanding);
    console.log("amount paid"+payment);
    console.log("remaining balance"+remaining_balance);

    return true;
}

// console.log(loan[0].plan);