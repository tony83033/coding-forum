<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="sign_modal" tabindex="-1" role="dialog" aria-labelledby="sign_modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sign_modalLabel">SIGN UP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="handelsign.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
    <small id="emailHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="cpass">
    <small id="emailHelp" class="form-text text-muted">Confirm password</small>
  </div>
 
  <button type="submit" class="btn btn-primary" name=sign_sub>Submit</button>
</form>
      </div>
    
      </div>
    </div>
  </div>
</div>