<form>
  <div class="form-group">
      <label for="exampleFormControlInput0">Cover ad</label> <br>
      <input type="file" class="form-controll" name="" value="">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Description</label>
    <input type="url" class="form-control" id="exampleFormControlInput1" placeholder="Alias name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Link action name</label>
    <input type="url" class="form-control" id="exampleFormControlInput1" placeholder="View more">
    <small id="passwordHelpBlock" class="form-text text-muted">
      Link action name
    </small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Link action url</label>
    <input type="url" class="form-control" id="exampleFormControlInput1" placeholder="http://yourplace.com">
    <small id="passwordHelpBlock" class="form-text text-muted">
      This is the Address where the user should go when clicking
    </small>
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="" value="{{ $action }}">
  </div>
</form>
