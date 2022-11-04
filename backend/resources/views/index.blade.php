<!DOCTYPE html>
<html lang="en">
<head>
  <title>Timer Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Timer form</h2>
  <form action="/timer" id="t-form" name="t-form" method="post">
  @csrf

    <div class="mb-3 mt-3">
      <label for="number">Number:</label>
      <input type="number" step="any" class="form-control" id="number" placeholder="Enter Number" name="number" required onchange="myFunction()">
    </div>
    <div class="mb-3">
      <label for="timer">Timer: (Seconds)</label>
      <input type="number" class="form-control" id="timer" name="timer" readonly>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
 <script>
    function myFunction(){
        var val1 = document.getElementById('number').value;
        //var val2 = document.getElementById('timer').value;

            if(val1 <= 50000){
              //  setTimeout(function(){
                   // console.log('running') ;
               // }, 2000);
                document.getElementById('timer').value = 2;
               // console.log(val2);
            }
            if(val1 >= 50001 && val1 <= 100000){
                 document.getElementById('timer').value = 4;
            }
            if(val1 >= 100001 && val1 <= 150000){
                  document.getElementById('timer').value = 6;
            }
        }
</script>
