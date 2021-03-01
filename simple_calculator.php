<?php
if(isset($_POST['first_num']) && isset($_POST['second_num'])){
    $first_num = $_POST['first_num'];
    $second_num = $_POST['second_num'];
    $operator = $_POST['operator'];
    $result = 0;
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
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Simple Calculator</title>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Simple Calculator</h1>
        <div class="row">
            <div class="col-md-8">
            <div id="page-wrap">
	  <form action="" method="post" id="quiz-form">
    
                <div class="form-group form-control">
                     <label for="firstnumber">First Digit</label>
                     <input class="form-control" type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>" /> 
                </div>
                
           
            <div class="form-group form-control">
                <label for="firstnumber">First Digit</label>
                <input class="form-control" type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" />
            </div>
            <p>
                <div class="form-group form-contorl">
                <input class="form-control" readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
                </div>
            </p>
            <input class="btn btn-primary" type="submit" name="operator" value="Add" />
            <input class="btn btn-secondary" type="submit" name="operator" value="Subtract" />
            <input class="btn btn-danger" type="submit" name="operator" value="Multiply" />
            <input class="btn btn-warning" type="submit" name="operator" value="Divide" />
	  </form>
    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
