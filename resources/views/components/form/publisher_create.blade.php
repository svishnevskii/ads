<form>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Advertiser <sup class="mark-required">*</sup></label>
    <select class="form-control" required id="exampleFormControlSelect1">
        <option value="">Select Advertiser</option>
      <option>firstadvertiser.com</option>
      <option>secondadvertiser.com</option>
    </select>
    <small id="passwordHelpBlock" class="form-text text-muted">
      What source do you want to publish on your site
    </small>
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="" value="{{ $action }}">
  </div>
</form>
<div class="card-body">
    <h5>Embed code</h5>
    <textarea name="name" class="form-control embed-code-input" rows="8" cols="80">
<!-- In the head of the site, connect the library once -->
<script async src=""></script>

<!-- Embed code in place of the widget display -->
<node></node>
    </textarea>
</div>
