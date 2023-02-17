<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <link rel = "stylesheet" href = "style.css">
    <title>Lab1</title>     
</head> 
<body>
    <div class = "form-container">
    <form method="POST">
        <h1>Taxxy: A Tax Calculator</h1>
        <b>Salary: </b><input type="number" name="salary" id="salary" required/> 
        <br><br><b>Type:</b>
        <input type="radio" name="type" id="type_bimonthly" value="bimonthly" />
        <label for="type_bimonthly">Bi-Monthly</label>
        <input type="radio" name="type" id="type_monthly" value="monthly" />
        <label for="type_monthly">Monthly</label>
        <p><input type="submit" name="compute" value="Compute" /></p>
    </form>
    <?php
        if(isset($_POST['compute'])){
            $salary = $_POST['salary'];
            $selected_radio = $_POST['type'];
            $annual_salary = 0;
            
            if ($selected_radio == 'bimonthly') {
                $annual_salary = $salary * 24;
            }
            else if ($selected_radio == 'monthly') {
                $annual_salary = $salary * 12;
            }

            //annual tax
            $annual_tax = 0;
            if ($annual_salary > 0 && $annual_salary <= 250000) {
                $annual_tax = 0;
            } else if ($annual_salary > 250000 && $annual_salary <= 400000) {
                $excess = $annual_salary - 250000;
                $annual_tax = .20 * $excess;
            } else if ($annual_salary > 400000 && $annual_salary <= 800000) {
                $excess = $annual_salary - 400000;
                $tax = .25 * $excess;
                $annual_tax = 30000 + $tax;
            } else if ($annual_salary > 800000 && $annual_salary <= 2000000) {
                $excess = $annual_salary - 800000;
                $tax = .30 * $excess;
                $annual_tax = 130000 + $tax;
            } else if ($annual_salary > 2000000 && $annual_salary <= 8000000) {
                $excess = $annual_salary - 2000000;
                $tax = .32 * $excess;
                $annual_tax = 490000 + $tax;
            } else if ($annual_salary > 8000000) {
                $excess = $annual_salary - 8000000;
                $tax = .35 * $excess;
                $annual_tax = 2410000 + $tax;
            }
            
            //monthly tax
            $monthly_tax = $annual_tax / 12;
        }
    ?>
    <div class = "result-container">
    <p>Salary: PHP <?php echo number_format($salary, 2); ?></p>
    <p>Annual Salary: PHP <?php echo number_format($annual_salary, 2); ?></p>
    <p>Est. Annual Tax: PHP <?php echo number_format($annual_tax, 2); ?></p>
    <p>Est. Monthly Tax: PHP <?php echo number_format($monthly_tax, 2); ?></p>
    </div>
    </div>
    </body>
</html>