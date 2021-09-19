<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class = "navbar">
        <div class="container">
            <div class="logo">
                <img src="imgs/logo.png" alt="" width = "100%" >
            </div>
            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="http://localhost/Home/">Home</a>
                    </li>
                    <li>
                        <a href="http://localhost/Categories/">Categories</a>
                    </li>
                    <li>
                        <a href="http://localhost/Foods/food.php">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>

            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <section class="Order">
        <div class="container-1 ">
            <h1 class="text-center">Fill this form to confirm your order</h1>

           <div class="SelectFood-box">
                <div class="food-menu-img">
                    <img src="imgs/mon1.jpg" alt="" width="100%">
                </div>

                <div class="food-menu-desc">
                    <h5>Food Title</h5>
                    <p class="food-price">$2.3</p> 
                    <p>Quantity</p>
                    <form action="">
                        <input class="de-1" type="number" name="quantity" min="1" max="10" >
                    </form>
                </div>
           
            
            </div>
            
            <div class="DeliveryDetails-box">
                <div class="Fullname">
                    <h4>Fullname</h4>
                    <form action="">
                        <input class="de" type="text" placeholder ="E.g:Nguyen Van Dung">
                    </form>
                </div>
                <div class="PhoneNumber">
                    <h4>PhoneNumber</h4>
                    <form action="">
                        <input class="de" type="text" placeholder ="E.g:0878526XXX">
                    </form>
                </div>
                <div class="Email">
                    <h4>Email</h4>
                    <form action="">
                        <input class="de" type="text" placeholder ="E.g:tksdung2105@gmail.com">
                    </form>
                </div>
                <div class="Address">
                    <h4><Address></Address></h4>
                    <form action="">
                        <textarea class="de" name="" id="" cols="50" rows="10" placeholder="E.g: Hoang Mai"></textarea>
                    </form>
                </div>
                <a href="#" class="bt bt-primary">Confirm Order</a>
             
            </div>
            

         
            
                

            </div>
        <div class="clearfix"></div>

    </section>
    <section class = "social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/48/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <section class = "Footer">
        <div class="container text-center">
            <p>All rights reserved.Designed by <a href="#">CSE.TLU</a>
            </p>
        </div>
    </section>
</body>