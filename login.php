<?php
include 'inc/header.php';
?>


<div class="panel panel-default">
<div style="max-width:600px; margin:0 auto">
        <div class="panel-heading">
           <h2>
                User Login
           </h2>
        </div>


        <div class="panel-body">
            <form action="" method="POST">
                <div class="form-group">
                    <lebel for="email">Email Address</lebel>
                    <input type="text" id="email" name="email" class="form-control"/>
                </div>

                <div class="form-group">
                    <lebel for="password">Password</lebel>
                    <input type="passowrd" id="passowrd" name="password" class="form-control"/>
                </div>
                <button type="submit" name="login" class="btn btn-success">Login</button>
            </form>
            </div>
 </div>

