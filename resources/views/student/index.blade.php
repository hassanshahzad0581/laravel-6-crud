<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 6.0 Crud operation</title>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
</head>
<body>
    <style>
            .container{
                padding: 0.5%;
            }
    </style>
    <div class="container">
        <h2 class="alert alert-success">Laravel Crud 6.0</h2>

        <div class="row">
            <a href="" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" style="margin-left: 82%"> Add New Student</a>
            <div class="col-md-12">
                <table class="table table-bordered">
                        <thead>
                            <tr>
                               <th>#</th>
                               <th>Name</th>
                               <th>Last Name</th>
                               <th>Gender</th>
                               <th>Country</th>
                               <th>City</th>
                               <th>Address</th>
                               <th>Action</th>
                            </tr>
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tbody>
                        </thead>

                </table>
                {{-- add student model --}}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-lg modal-right modal-success" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
             @csrf
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Firstname and Lastname</span>
                </div>
                <Input type="text" class="form-control" name="firstname" placeholder="Enter First Name">
                <Input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">
            </div>
        <br>
         <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Country and city</span>
                </div>
                <Input type="text" class="form-control" name="country" placeholder="Enter Country">
                <Input type="text" class="form-control" name="city" placeholder="Enter City">
            </div>
        <br>
         <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Address and Gender</span>
                </div>
                <textarea type="text" class="form-control" name="address" placeholder="Enter Address"></textarea>
                <Input type="text" class="form-control" name="gender" placeholder="Enter Gender">
            </div>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save Student</button>
      </div>
      </form>
    </div>
  </div>
</div>



            </div>
        </div>
    </div>
</body>
</html>
