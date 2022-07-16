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
    <a href="main.php"><button class="btn btn-sm btn-outline-success my-2 my-sm-0">Home</button></a> <a href="creditlist.php"><button class="btn btn-sm btn-outline-success my-2 my-sm-0">Back</button></a>
    <br>
    <br>
  <h2>Add Credit Bills</h2>
  <p>
    Add credit bills and its details.
  </p>
<form>
  <div class="form-group row">
    <label for="text11" class="col-2 form-control-sm col-form-label">Date</label> 
    <div class="col-4">
      <input id="nepali-datepicker" name="text11" placeholder="Date"type="text" class="form-control form-control-sm">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-2 col-form-label form-control-sm">Bill no</label> 
    <div class="col-4">
      <input id="text1" name="text1" placeholder="Bill no" type="text" class="form-control form-control-sm">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-2 col-form-label form-control-sm">Creditor Name</label> 
    <div class="col-4">
      <input id="text2" name="text2" placeholder="Creditor name" type="text" class="form-control form-control-sm">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-2 col-form-label form-control-sm">Phone No</label> 
    <div class="col-4">
      <input id="text3" name="text3" placeholder="Phone no" type="text" class="form-control form-control-sm">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-2 col-form-label form-control-sm">Bill Amount</label> 
    <div class="col-4">
      <input id="text4" name="text4" placeholder="Bill amount" type="text" class="form-control form-control-sm">
    </div>
  </div>
  <div class="form-group row">
    <label for="text5" class="col-2 col-form-label form-control-sm">Advance Amount</label> 
    <div class="col-4">
      <input id="text5" name="text5" placeholder="Advance amount" type="text" class="form-control form-control-sm">
    </div>
  </div>
  <div class="form-group row">
    <label for="text6" class="col-2 col-form-label form-control-sm">Remaning Amount</label> 
    <div class="col-4">
      <input id="text6" name="text6" placeholder="Remaining amount" type="text" class="form-control form-control-sm">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-4">
      <button name="submit" type="submit" class="btn btn-sm btn-primary">Submit</button>
    </div>
  </div>
</form>

</div>