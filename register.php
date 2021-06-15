<?php
include 'inc/header.php';
?>


<div class="panel panel-default">
        <div class = "panel-heading">
           <h2>
                User Registration
                <button type="submit" id ="back" name="back" class=" btn btn-success pull-right" href="profile.php">Back</button>
           </h2>
           
        </div>


        <div class="panel-body">
         <div style="max-width:600px; margin:0 auto">
            <form action="" method="POST" >

                <div class="form-group">
                    <lebel for="first_name">First Name</lebel>
                    <input type="text" id="first_name" name="first_name" class="form-control"/>
                </div>

                <div class="form-group">
                    <lebel for="last_name">Last Name</lebel>
                    <input type="text" id="last_name" name="last_name" class="form-control"/>
                </div>
                <div class="form-group">
                    <lebel for="email">Email Address</lebel>
                    <input type="text" id="email" name="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <lebel for="username">Username</lebel>
                    <input type="text" id="username" name="username" class="form-control"/>
                </div>

                <div class="form-group">
                    <lebel for="password">Password</lebel>
                    <input type="passowrd" id="passowrd" name="password" class="form-control"/>
                </div>
                <button type="submit" name="login" class="btn btn-success">Login</button>
            </form>
         </div>
 </div>
