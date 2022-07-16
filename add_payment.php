<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Nepali Datepicker CSS -->
        <link
            href="styles\css\nepali.datepicker.v3.2.min.css"
            rel="stylesheet"
            type="text/css"
        />

        <!-- Nepali Datepicker Script -->
        <script
            src="styles\js\nepali.datepicker.v3.2.min.js"
            type="text/javascript"
        ></script>
        <script type="text/javascript">
            window.onload = function () {
                var mainInput = document.getElementById("nepali-datepicker");
                mainInput.nepaliDatePicker();
            };
        </script>




<div class="container">
  <br>
    <a href="main.php"><button class="btn btn-sm btn-outline-success my-2 my-sm-0">Home</button></a> <a href="payment.php"><button class="btn btn-sm btn-outline-success my-2 my-sm-0">Back</button></a>
    <br>
    <br>
  <h2>Make Payment</h2>
  <p>
    Make payment of purchase account.
  </p>
  <br>
<form>
  <div class="form-group row">
    <label for="text" class="col-2 col-form-label form-control-sm">Payment Date</label> 
    <div class="col-4">
      <input id="nepali-datepicker" name="text" placeholder="Date" type="text" class="form-control form-control-sm">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-2 col-form-label form-control-sm">Store Name</label> 
    <div class="col-4">
      <input id="text1" name="text1" placeholder="Store name or person name" type="text" class="form-control form-control-sm">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2 form-control-sm">Payment Type</label> 
    <div class="col-4">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_0" type="checkbox" class="custom-control-input" value="cash"> 
        <label for="checkbox_0" class="custom-control-label form-control-sm">Cash</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox" id="checkbox_1" type="checkbox" class="custom-control-input" value="cheque"> 
        <label for="checkbox_1" class="custom-control-label form-control-sm">Cheque</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-2 col-form-label form-control-sm">Cheque Bank Name</label> 
    <div class="col-4">
      <input id="text2" name="text2" placeholder="Bank Name" type="text" class="form-control form-control-sm">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-2 col-form-label form-control-sm">Cheque Date</label> 
    <div class="col-4">
      <input id="nepali-datepicker" name="text3" placeholder="Date" type="text" class="form-control form-control-sm">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-2 col-form-label form-control-sm">Cheque No</label> 
    <div class="col-4">
      <input id="text4" name="text4" placeholder="Cheque Number" type="text" class="form-control form-control-sm">
    </div>
  </div>
  <div class="form-group row">
    <label for="text5" class="col-2 col-form-label form-control-sm">Cheque Amont</label> 
    <div class="col-4">
      <input id="text5" name="text5" placeholder="Cheque Amount" type="text" class="form-control form-control-sm">
    </div>
  </div>
  <div class="form-group row">
    <label for="text6" class="col-2 col-form-label form-control-sm">Cash Amount</label> 
    <div class="col-4">
      <input id="text6" name="text6" placeholder="Cash Amount" type="text" class="form-control form-control-sm">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-4">
      <button name="submit" type="submit" class="btn btn-sm btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>