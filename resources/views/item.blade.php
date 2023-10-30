<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link to Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
  .btn {
    max-width: 100%;
    padding: 6px 20px;
   }

   .savediv {
    padding: 8px;
    border: 1px solid black
   }
   </style>
</head>
<body>
<form method="POST" action="{{route('save.item')}}">
  @csrf
  <div class="container mt-5">
    <div class="form-group">
      <div class="form-group row">
        <label for="itemCode" class="col-sm-2 col-form-label">Item Code</label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="itemCode" name="itemCode">
        </div>
      </div>
      <div class="form-group row mt-1">
        <label for="itemName" class="col-sm-2 col-form-label">Item Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="itemName" name="itemName">
        </div>
      </div>
      <div class="form-group row mt-1">
        <label for="itemDescript" class="col-sm-2 col-form-label">Item Description</label>
        <div class="col-sm-9">
          <textarea class="form-control" id="itemDescript" name="itemDescript" rows="2"></textarea>
        </div>
      </div>
      <div class="form-group row mt-1">
        <label for="itemPrice" class="col-sm-2 col-form-label">Item Price</label>
        <div class="col-sm-4">
          <input type="number" id="itemPrice" name="itemPrice" class="form-control" />
        </div>
      </div>
      <div class="form-group row mt-1">
        <label for="curQuantity" class="col-sm-2 col-form-label">Current Quantity</label>
        <div class="col-sm-3">
          <input type="number" id="curQuantity" name="curQuantity" class="form-control" />
        </div>
      </div>
      <div class="form-group row mt-1">
        <label for="roLevel" class="col-sm-2 col-form-label">Re-Order Level</label>
        <div class="col-sm-3">
          <input type="number" id="roLevel" name="roLevel" class="form-control" />
        </div>
      </div>
      <div class="form-group row mt-5">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-2 gap-2">
          <button class="btn btn-primary" type="submit">Save</button>
          <button class="btn btn-primary" type="button">Reset</button>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
<!-- Link to Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
