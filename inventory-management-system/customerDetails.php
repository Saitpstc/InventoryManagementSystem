<?php
include('nav.php');
$customer_id = $_GET['id'];
$query_find_customer = "select * from customer where id = $customer_id";
$run_query_for_customer = mysqli_query($con, $query_find_customer);
while ($customer = mysqli_fetch_array($run_query_for_customer)) {
    $customer_name = $customer['customer_name'];
    $customer_adress = $customer['customer_adress'];
    $customer_phone = $customer['customer_phone'];
    $customer_gender = $customer['customer_gender'];

}
?>
<div class="container" style="margin-top:25px;">
    <div class="row">
        <h1>Customers Details</h1>
            <a href="./editCustomerDetails.php?id=<?php echo $customer_id; ?>" class="btn btn-primary">Update</a>
    </div>
    <br>
    <div class="card" style="width: 58rem;">
        
        <div class="card-body">
            <div class="row">
                <h3 class="card-title">Customer Name : <?php echo "  $customer_name " ?></h3>
            </div>
            <div class="row">
                <h3 class="card-title">Customer Adress : <?php echo "  $customer_adress" ?></h3>
            </div>  
            <div class="row">
                <h3 class="card-title">Customer Phone  : <?php echo "  $customer_phone " ?></h3>
            </div>  
            <div class="row">
                <h3 class="card-title">Customer Gender  : <?php echo "  $customer_gender " ?></h3>
            </div>  
           
        </div>
    </div>  
</div>


<?php 
    include('footer.php');
    ?>