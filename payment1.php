<!DOCTYPE html>
     <html>
     <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
     <style>
     body {
       font-family: Arial;
       font-size: 17px;
       padding: 8px;
     }
     
     * {
       box-sizing: border-box;
     }
     
     .row {
       display: -ms-flexbox; /* IE10 */
       display: flex;
       -ms-flex-wrap: wrap; /* IE10 */
       flex-wrap: wrap;
       margin: 0 -16px;
     }
     
     .col-25 {
       -ms-flex: 25%; /* IE10 */
       flex: 25%;
     }
     
     .col-50 {
       -ms-flex: 50%; /* IE10 */
       flex: 50%;
     }
     
     .col-75 {
       -ms-flex: 75%; /* IE10 */
       flex: 75%;
     }
     
     .col-25,
     .col-50,
     .col-75 {
       padding: 0 16px;
     }
     
     .container {
       background-color: #f2f2f2;
       padding: 5px 20px 15px 20px;
       border: 1px solid lightgrey;
       border-radius: 3px;
     }
     
     input[type=text] {
       width: 100%;
       margin-bottom: 20px;
       padding: 12px;
       border: 1px solid #ccc;
       border-radius: 3px;
     }
     
     label {
       margin-bottom: 10px;
       display: block;
     }
     
     .icon-container {
       margin-bottom: 20px;
       padding: 7px 0;
       font-size: 24px;
     }
     
     .btn {
       background-color: #04AA6D;
       color: white;
       padding: 12px;
       margin: 10px 0;
       border: none;
       width: 100%;
       border-radius: 3px;
       cursor: pointer;
       font-size: 17px;
     }
     h1{
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;

  }
     h1 span{
      color: rgb(0, 150, 0);
     }
     .btn:hover {
       background-color: #45a049;
     }
     
     a {
       color: #2196F3;
     }
     
     hr {
       border: 1px solid lightgrey;
     }
     
     span.price {
       float: right;
       color: grey;
     }
     
     /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
     @media (max-width: 800px) {
       .row {
         flex-direction: column-reverse;
       }
       .col-25 {
         margin-bottom: 20px;
       }
     }
     </style>
     </head>
     <body>
     
     <?php 
     $name1 = $_GET['user'];
     $total = $_GET['total'];
    
     echo" <h1> Hey $name1! <span> Pay ₹$total </span> </h1> "
     ?>
     
     
     <div class="row">
       <div class="col-75">
         <div class="container">
           <form action="end.php" method="post">
           
         
     
               <div class="col-50">
                 <h3>Payment</h3>
                 <label for="fname">Accepted Cards</label>
                 <div class="icon-container">
                   <i class="fa fa-cc-visa" style="color:navy;"></i>
                   <i class="fa fa-cc-amex" style="color:blue;"></i>
                   <i class="fa fa-cc-mastercard" style="color:red;"></i>
                   <i class="fa fa-cc-discover" style="color:orange;"></i>
                 </div>
                 <label for="cname">Name on Card</label>
                 <input type="text" id="cname" name="cardname" placeholder="Your name." required>
                 <label for="ccnum">Credit card number</label>
                 <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
                 <label for="expmonth">Exp Month</label>
                 <input type="text" id="expmonth" name="expmonth" placeholder="September">
                 <div class="row">
                   <div class="col-50">
                     <label for="expyear">Exp Year</label>
                     <input type="text" id="expyear" name="expyear" placeholder="2018" required>
                   </div>
                   <div class="col-50">
                     <label for="cvv">CVV</label>
                     <input type="text" id="cvv" name="cvv" placeholder="352">
                   </div>
                 </div>
               </div>
               <label>
               <input type="hidden" value="<?php
          echo "$name1"; ?>" name="user1">
             <input type="submit" value="Continue " class="btn">
             </div>
            
           </form>
         </div>
       </div>
       
     </div>
    
     
     </body>
     
     </html>
     