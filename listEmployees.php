<!DOCTYPE html>
<html>
<head>
    <title>My CRUD APP- Insert</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/grid.css">
</head>
<body>
<?php
require_once('connection.php');
//call function to select record and store returned value in a variable
?>
<div class="row">
    <div class="row">
        <div class="col-md-2 hleft">
            <div class="col-md-2">
                <img class="logo" src="Images/logo.jpg" alt="Not Found">
            </div>
        </div>
        <div class="col-md-10 hright">
            <h1 class="text-center">Delete Employee Record</h1>
            <form class="form-inline" action="search.php" method="get">
                <div class="form-group  search">
                    <input type="text" class="form-control" name="name" placeholder="Search By Name">
                    <input type="submit" class="form-control btn-default" value="Search">
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-md-2  sidebar">
                <div class="vList">
                    <ul class="Vnav">
                        <li><a  href="home.html">Add Employee</a></li>
                        <li><a href="updateRecord.html" >Update Employee</a></li>
                        <li><a  href="deleteRecord.html">Delete Employee</a></li>
                        <li ><a class="active" href="#">List Employees</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 content">
                <div class="container">
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>CNIC</th>
                            <th>Employee ID</th>
                            <th>Grade</th>
                            <th>Contact</th>
                            <th>Gender</th>
                            <th>Duties</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            
                        
                        </tbody>
                    </table>

                </div>
            </div>

</body>
</html>