<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fenix International</title>
  <script src="https://kit.fontawesome.com/6416f079ba.js"></script>
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
  <link rel="icon" type="image" href="icon.png">
  <link rel="stylesheet" href="./CSS/loancss.css">
  <script src="loan.js"></script>
</head>

<body>
  <div class="left-menu">

    <ul class="vr-nav">
      <img width="180px" src="./img/logo.png" />
      <!--<h4 class="head4">Fenix internation</h4><br/>-->
      <!--<h2 id="full"> My Account</h2>-->
      <li class="active"><a>MY ACCOUNT</a></li>
      <li><a href="#c1">APPLY FOR A LOAN</a></li>
      <li><a href="#c2">LOAN PAYMENT</a></li>
      <li><a href="#c3">SAVINGS</a></li>
      <li><a href="#c4">LOAN DETAILS</a></li>
    </ul>
  </div>

  <div class="vr-side">
    <div class="form-row">
      <form>
        <fieldset class="grouping">
          <legend>
            <h2 id="c1">Loan Application Form</h2>
          </legend>
          <div class="innerdiv">
            <div class="divgroup"><label>Loan Plan</label><br />
              <label>Loan Count</label><br />
              <label>Loan Duration</label><br />
              <label>Loan Start Date</label><br />
              <label>Daily Rate</label><br />
              <label>Account State</label><br />
              <label>Plus Smartphone</label><br />

            </div>
            <form action="storeloan.php" method="POST">

              <div class="divgroup">
                <select name="plan">
                  <option value="eco">Home Eco2</option>
                  <option value="plus">Home Plus</option>
                  <option value="conformt">Home Comfort</option>
                  <option value="Deluxe">Home Deluxe</option>
                  <option value="tv">TV Deluxe (Zuku)</option>
                </select> <br />
                <input type="number" name="count" required min="1" step="1" size="20"><br />
                <select name="duration">
                  <option value="eco">35 Months</option>
                  <option value="plus">25 Months</option>
                  <option value="conformt">24 Months</option>
                  <option value="Deluxe">24 Months</option>
                  <option value="tv">26 Months</option>
                </select> <br />
                <input type="date" name="loandate" required /><br />
                <input type="number" name="rate" required min="100" step="100" max="2500" size="40"><br />
                <select name="state">
                  <option value="complete">Complete</option>
                  <option value="paying">In Repayment</option>
                  <option value="canceled">Canceled</option>
                  <option value="suspended">Suspended</option>
                </select> <br /><br />
                <input type="radio" name="phone" value="no">No
                <input type="radio" name="phone" value="yes">Yes

              </div>
          </div>
          <div class="divgroup">
            <input type="submit" value="send" class="buttons" />
            <input type="reset" value="Cancel" class="buttons" />
          </div>
      </form>
    </div>
</body>

</html>
