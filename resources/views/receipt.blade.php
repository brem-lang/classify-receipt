{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WELCOME</title>
</head>
<body>
    <h1>NutriHogs Corporation</h1>
    <h2>Merchandise Withdrawal Slip</h2>
</body>
</html> --}}

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>

    <div class="container">

        <div class="w-75 p-3">
            <h1>Nutrihogs Corporation</h1>
            <h2>Merchandise Withdrawal Slip</h2>

            @csrf
            <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="form-floating mb-3">
                        <input name="customer_name" type="text" class="form-control" id="floatingInput" placeholder="Customer Name">
                        <label for="floatingInput">Customer Name</label>
                    </div>
        
                    <div class="form-floating mb-3">
                        <input name="customer_date" type="date" class="form-control" id="floatingInput" placeholder="Date">
                        <label for="floatingInput">Date</label>
                    </div>  
                    <div class="form-floating mb-3">
                        <input name="pallet_no" type="text" class="form-control" id="floatingInput" placeholder="Pallet Number">
                        <label for="floatingInput">Pallet Number</label>
                    </div>         
                  </div>
                  <div class="col">
                    <div class="form-floating mb-3">
                        <input name="series_no" type="text" class="form-control" id="floatingInput" readonly value="123213">
                        <label for="floatingInput">Document Series Number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input name="qr_no" type="text" class="form-control" id="floatingInput" placeholder="QR Number">
                        <label for="floatingInput">QR Number</label>
                    </div>                   
                    <div class="form-floating mb-3">
                        <input name="wh_loc" type="text" class="form-control" id="floatingInput" placeholder="Warehouse Location">
                        <label for="floatingInput">Warehouse Location</label>
                    </div>  
                    <div class="form-floating mb-3">
                        <input name="warehouse" type="text" class="form-control" id="floatingInput" placeholder="Warehouse">
                        <label for="floatingInput">Warehouse</label>
                    </div>  
                  </div>
                </div>
            </div>
        </div>

        <div class="w-100 p-3">
            <table class="table table-bordered" id="dynamicAddRemove">  
                <tr>
                    <th>Item Code</th>
                    <th>Item Description</th>
                    <th>Qty</th>
                    <th>Oum</th>
                    <th>Remarks</th>
                    <th>Action</th>
                </tr>
                <tr>  
                    <td><input type="text" name="moreFields[0][item_code]" class="form-control" /></td>  
                    <td><textarea type="text" name="moreFields[0][item_desc]" class="form-control" ></textarea></td>  
                    <td><input type="text" name="moreFields[0][qty]" class="form-control" /></td>  
                    <td><input type="text" name="moreFields[0][oum]" class="form-control" /></td>  
                    <td><input type="text" name="moreFields[0][remarks]"  class="form-control" /></td>  
                    <td><button type="button" name="add" id="add-btn" class="btn btn-success">Add More</button></td>  
                </tr>  
            </table> 
        </div>


        <div class="w-75 p-3">
            <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="form-floating mb-3">
                        <input name="prepared_by" type="text" class="form-control" id="floatingInput" placeholder="Prepared by">
                        <label for="floatingInput">Prepared by</label>
                    </div>
        
                    <div class="form-floating mb-3">
                        <input name="approved_by" type="text" class="form-control" id="floatingInput" placeholder="Approved By">
                        <label for="floatingInput">Approved By</label>
                    </div>  
                    <div class="form-floating mb-3">
                        <input name="released_by" type="text" class="form-control" id="floatingInput" placeholder="Released By">
                        <label for="floatingInput">Released By</label>
                    </div>                         
                  </div>
                  <div class="col">
                    <div class="form-floating mb-3">
                        <input name="sales_admin" type="text" class="form-control" id="floatingInput" placeholder="Sales Admin">
                        <label for="floatingInput">Sales Admin</label>
                    </div>    
                    <div class="form-floating mb-3">
                        <input name="wh_incharge" type="text" class="form-control" id="floatingInput" placeholder="Warehouse In Charge">
                        <label for="floatingInput">Warehouse In Charge</label>
                    </div>  
                  </div>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-primary btn-lg generate_receipt">Generate Receipt</button>
    </div>

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    {{-- javascript for dynamic add/remove --}}
    <script type="text/javascript">
    var i = 0;

    // add fields
        $(document).on('click','#add-btn', function (e) {
            ++i;
            $("#dynamicAddRemove")
            .append('<tr><td><input type="text" name="moreFields['+i+'][item_code]"class="form-control" /></td><td><textarea type="text" name="moreFields['+i+'][item_desc]"class="form-control" ></textarea></td><td><input type="text" name="moreFields['+i+'][qty]"class="form-control" /></td><td><input type="text" name="moreFields['+i+'][oum]"class="form-control" /></td><td><input type="text" name="moreFields['+i+'][remarks]"class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>'
            );
        });

        // to remove fields
        $(document).on('click','.remove-tr', function (e) {
            $(this).parents('tr').remove();
        });

        // generate receipt
        $(document).on('click','.generate_receipt', function (e) {
            // var data = document.getElementsByClassName("customer_name").value;
            // var data =  $("input[name='customer_name']").val();
            var data = {
                'customer_name' : $("input[name='customer_name']").val(),
                'customer_date' : $("input[name='customer_date']").val(),
            }
            console.log(data)
        });
    </script>
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- for date picker --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


  </body>
</html>