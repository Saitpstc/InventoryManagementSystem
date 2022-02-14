<?php
    include('db.php');
    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CustomerReg</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h2>Registration</h2>
    <form action="customerRegistration.php" method=POST>
        <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" name="cust_name" id="exampleInputName1" aria-describedby="name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputAdress1">Adress</label>
            <input type="text" class="form-control" name="cust_adress" id="exampleInputAdress1" aria-describedby="adress" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPhone1">Phone</label>
            <input type="text" class="form-control" name="cust_phone" id="exampleInputPhone1" aria-describedby="phoneHelp" required>
        </div>
        <div class="form-group">
            <label for="exampleInputGender1">Gender</label>
            <select id="inputState" class="form-control" name="cust_gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    <div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $customer_name = $_POST['cust_name'];
    $customer_adress = $_POST['cust_adress'];
    $customer_phone = $_POST['cust_phone'];
    $customer_gender = $_POST['cust_gender'];
    $query = "insert into customer (customer_name,customer_adress,customer_phone,customer_gender)
		values ('$customer_name','$customer_adress','$customer_phone','$customer_gender')";

    $run_register_query = mysqli_query($con, $query);
    echo "<script>alert('SucessFully ADDED...');</script>";
	echo "<script>window.open('viewCustomers.php','_self')</script>";
}

?>