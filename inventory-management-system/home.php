<?php
include('nav.php');
?>
<style>
    body {
        background-color: #e0ebeb;
    }
    .card {
        margin-top: 2rem;
    }

    @media only screen and (max-width: 995px)  {
        
    }
</style><br><br>
<h2 class="text-center">Welcome To Inventory Management<h2>
<br>
<div class="container">
    <div class="row"  style="margin-top:1rem">
        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="card" style="width: 18rem;">
                <img src="customers.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">Customers</h4>
                    <p class="card-text"><a href="customerRegistration.php" class="btn btn-primary " style="width:54%;margin-left:23%;margin-right:23%">Add Customers</a></p>
                    <p class="card-text"><a href="viewCustomers.php" class="btn btn-primary " style="width:54%;margin-left:23%;margin-right:23%">Show Customers</a></p>
                </div>
            </div>
        </div>
        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
        </div>
        <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
        <div class="card" style="width: 18rem;">
                <img src="products.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title text-center">Products</h4>
                    <p class="card-text"><a href="viewAllProducts.php"  class="btn btn-primary"  style="width:54%;margin-left:23%;margin-right:23%">View All products</a></p>
                    <p class="card-text"><a href="newproduct.php"  class="btn btn-primary"  style="width:54%;margin-left:23%;margin-right:23%">Add new products</a></p>
                    <p class="" style="font-size : 20px"><a href="lesserQuantityProducts.php" >Show Products of lesser quantity</a></p>
                </div>
            </div>
        </div>
    </div>
<div>
