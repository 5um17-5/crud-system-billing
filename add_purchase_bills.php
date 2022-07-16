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
    <a href="main.php"><button class="btn btn-sm btn-outline-success my-2 my-sm-0">Home</button></a> <a href="purchase.php"><button class="btn btn-sm btn-outline-success my-2 my-sm-0">Back</button></a>
    <br>
    <br>
  <h2>Add Purchase Bills</h2>
  <p>
    Make purchase and register bills.
  </p>
  <br>
  <form>
  <div class="form-group row">
    <label for="text2" class="col-2 col-form-label form-control-sm">Bill No</label> 
    <div class="col-4">
      <input id="text2" name="text2" placeholder="Bill no" type="text" class="form-control form-control-sm">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-2 col-form-label form-control-sm">Purchase Date</label> 
    <div class="col-4">
      <input id="nepali-datepicker" name="text3" placeholder="Purchase date" type="text" class="form-control form-control-sm">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-2 col-form-label form-control-sm">Store Name</label> 
    <div class="col-4">
      <input id="text4" name="text4" placeholder="Store name" type="text" class="form-control form-control-sm">
    </div>
  </div>
  <div class="form-group row">
    <label for="text5" class="col-2 col-form-label form-control-sm">Vat No</label> 
    <div class="col-4">
      <input id="text5" name="text5" placeholder="Vat no / Pan no" type="text" class="form-control form-control-sm">
    </div>
  </div>
  <div class="form-group row">
    <label for="text6" class="col-2 col-form-label form-control-sm">Purchase Amount</label> 
    <div class="col-4">
      <input id="text6" name="text6" placeholder="Purchase amount" type="text" class="form-control form-control-sm">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-2 col-form-label form-control-sm">Advance Amount</label> 
    <div class="col-4">
      <input id="text" name="text" placeholder="Advance amount" type="text" class="form-control form-control-sm">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-2 col-form-label form-control-sm">Remaining Amount</label> 
    <div class="col-4">
      <input id="text1" name="text1" placeholder="Remaning amount" type="text" class="form-control form-control-sm">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-4">
      <button name="submit" type="submit" class="btn btn-sm btn-primary">Submit</button>
    </div>
  </div>
</form>

</div>
