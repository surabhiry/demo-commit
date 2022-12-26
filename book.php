<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="icon_2.png"  >
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
        <link rel="stylesheet" href="book.css">
        <title>Khelo</title>
    </head>
    <body>
    <div class= form_container> 
    <form class="form" method="post" name="book">
        <h1>Booking</h1>
        <label><strong>Turf Name:</strong></label>
        <input id="turf_name" type="text" readonly placeholder="Terna turf"></input>
        <label for="btime"><strong>Booking date:</strong></label><br><br>
        <input id="date_picker" type="date" >
        <script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();
        today = yyyy + '-' + mm + '-' + dd;
        $('#date_picker').attr('min',today);
        </script><br><br>
        <label for="btime"><strong>Booking Time:</strong></label><br><br>
        <label>Starting Time:</label>
                        <select name="start" style="margin-right:15px" >   
                            <option value="09:00:00">09:00</option>
                            <option value="10:00:00">10:00</option>
                            <option value="11:00:00">11:00</option>
                            <option value="12:00:00">12:00</option>
                            <option value="13:00:00">13:00</option>
                            <option value="14:00:00">14:00</option>
                            <option value="15:00:00">15:00</option>
                            <option value="16:00:00">16:00</option>
                            <option value="17:00:00">17:00</option>
                        </select>
                        <label>Ending Time:</label>
                        <select name="end"> 
                            <option value="10:00:00">10:00</option>
                            <option value="11:00:00">11:00</option>
                            <option value="12:00:00">12:00</option>
                            <option value="13:00:00">13:00</option>
                            <option value="14:00:00">14:00</option>
                            <option value="15:00:00">15:00</option>
                            <option value="16:00:00">16:00</option>
                            <option value="17:00:00">17:00</option>
                            <option value="18:00:00">18:00</option>
                        </select><br>
        <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_IBTlu0tJhEbuWd" async> </script> </form>
        <br>
            <button  class="confirm"><a href="" >CONFIRM</a></button>
        </form>
  </div> 
    </body>

    </html>