<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <link rel = "stylesheet" href = "style.css">
    <title>Tax Calculator</title>     
</head> 
<body>
    <div class = "form-container">
    <form method="POST" action="tax.php">
        <div class="container">
        <h1>Taxxy: A Tax Calculator</h1>
        <b>Salary: </b>
        <input type="number" name="salary" id="salary" required/> 
        <br><br><b>Type:</b>
        <input type="radio" name="type" id="type_bimonthly" value="bimonthly" required />
        <label for="type_bimonthly">Bi-Monthly</label>
        <input type="radio" name="type" id="type_monthly" value="monthly" />
        <label for="type_monthly">Monthly</label>
        <br>
        <button name="compute" type="submit">Compute</button>
        </div>
        
    </form>

<div class="result">
    <p>Salary: </p>
    <p>Annual Salary: </p>
    <p>Est. Annual Tax: </p>
    <p>Est. Monthly Tax: </p>
    
</div>
    </div>
    </body>
</html>