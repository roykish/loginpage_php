<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Login Register System PHP</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Login Registration System</a>
            </div>
            <ul class="nav navbar-nav pull-right">
                <li>
                    <a href="profile.php">Profile</a>
                </li>

                <li>
                    <a href="logout.php">Logout</a>
                </li>

                <li>
                    <a href="login.php">Login</a>
                </li>

                <li>
                    <a href="register.php">Register</a>
                </li>
            </ul>

        </div>
    </nav>

    <div class="panel panel-default">
        <div class="panel-heading">
           <h2>
                User List <span class= "pull-right"><strong>Welcome!</strong></span>
           </h2> 
        </div>

        <div class="panel-body">
            <table class="table table-striped">
            <tr>
                <th width="20%">Serial</th>
                <th width="20%">Name</th>
                <th width="20%">Username</th>
                <th width="20%">Email Address</th>
                <th width="20%">Action</th>
            </tr>

            <tr>
                <td>01</td>
                <td>Kishor</td>
                <td>Roy</td>
                <td>Kishor.dnj@gmail.com</td>
                <td>
                    <a class="btn btn-primary" href="profile.php?id=1">View</a>
                </td>
            </tr>

            <tr>
                <td>02</td>
                <td>Kishor</td>
                <td>Roy</td>
                <td>Kishor.dnj@gmail.com</td>
                <td>
                    <a class="btn btn-primary" href="profile.php?id=1">View</a>
                </td>
            </tr>

            <tr>
                <td>03</td>
                <td>Kishor</td>
                <td>Roy</td>
                <td>Kishor.dnj@gmail.com</td>
                <td>
                    <a class="btn btn-primary" href="profile.php?id=1">View</a>
                </td>
            </tr>

            <tr>
                <td>04</td>
                <td>Kishor</td>
                <td>Roy</td>
                <td>Kishor.dnj@gmail.com</td>
                <td>
                    <a class="btn btn-primary" href="profile.php?id=1">View</a>
                </td>
            </tr>
            </table>
        </div>

    </div>

    <div class="well d-flex ">
    <h3> Hi I am Kishor
        <span class="pull-right"> A backend web developer</span>
    </h3>
    
    </div>
</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
</body>
</html>