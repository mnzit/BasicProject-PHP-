<?php include_once 'partials/header.php';?>
<div class="container pt-3">
  <div class="row justify-content-sm-center">
    <div class="col-sm-6 col-md-4 text-center">
   <div class="card" style="width: 20rem;">
  <img style="background:#E32526;"class="card-img-top" src="img/logo.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Login</h5>
  </div>
  <form class = "ml-4 mr-4" method = "post"  action = "loginCheck.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary mt-4 mb-4" style = "border: 1px solid #E32526;background:#E32526;">Submit</button><a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">Register</a>
</form>
</div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Be a Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method = "post"  action = "register.php">
        <div class="form-group">
            <label for="InputFrom">Name</label>
            <input type="text" required name="name" class="form-control" id="inputfrom" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="InputTo">Email</label>
            <input type="text" required  name="email" class="form-control" id="inputto" placeholder="Email" list="airports">
        </div>
        <div class="form-group">
            <label for="datePicker">Password</label>
            <input type="text" name="password" class="form-control" id="datePicker" placeholder="Password">
        </div>
        
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary"  id="ticketSubmit">Register</button>
                  </form>
      </div>
    </div>
  </div>
</div>
<?php include_once 'partials/footer.php';?>