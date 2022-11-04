<?php

include 'connection.php';

if(isset($_POST['done'])){


 $id = $_POST['inputID'];
 $name = $_POST['inputName'];
 $pn = $_POST['inputNumber'];
 $eid = $_POST['inputEmail'];

$q = "UPDATE `user` SET `name`= '$name',`number`= '$pn',`email`='$eid' WHERE `uid`= '$id' ";

 $query = mysqli_query($connection,$q);

 if (mysqli_query($connection, $q)) {
    echo "New record created successfully";
} else {
    echo "Error: " .$q . "<br>" . mysqli_error($connection);
}


 header('location:user.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="col-lg-6 m-auto">



        <form method="post">
                                        
                                        
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Customer id</label>
                                            <input name="inputID" type="text" class="form-control" placeholder="Customer id">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Customer name</label>
                                            <input name="inputName" type="text" class="form-control" placeholder="Customer name">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Phone Number</label>
                                            <input name="inputNumber" type="text" class="form-control" placeholder="Phone Number">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Email ID</label>
                                            <input name="inputEmail" type="text" class="form-control" placeholder="Email ID">
                                        </div>
            <div class="modal-footer ml-auto">
                <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
            </div>
        </form>




    </div>
</body>

</html>