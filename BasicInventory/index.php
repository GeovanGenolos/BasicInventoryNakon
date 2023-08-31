<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>

  <body>
    <style>

      *{
        padding: 0;
        margin: 0;
        box-shadow: border-box;
      }

      body{
        background: linear-gradient(to bottom, #00D8FF, #000000);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;

      }


      h1{
        background: ;
        margin-left: -55px;
        font-family: "Bahnschrift SemiBold", sans-serif;

      }

      h2{
        color: #000000;
        font-family: "Bahnschrift SemiBold", sans-serif;
      }

      label {
        margin: 20px;
      }
      
      .form-label {
      display: inline-block;
      width: 250px; 
      vertical-align: right; 
      margin-right: 10px; 
    }

    input[type="text"] {
      width: 250px; 
      padding: 6px;
      background-color: ;
      opacity: 0.4;
      border-radius: 20px;
    }

    .btn {

    background-color: transparent;
    opacity: 0.4;
    border: 1px solid white;
    color: white;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 70px;
    margin-left: 343px;
    font-family: "Bahnschrift SemiBold", sans-serif;

    
    }

    button:hover {
      background-color: #A2FF00;
      opacity: 1;
      box-shadow: 0 0 1px #A2FF00;
      animation: glowAnimation 1s ease-in-out infinite;
    }

    @keyframes glowAnimation {
        0% {
            box-shadow: 0 0 100px rgba(54, 255, 125, 0.3);
        }
        50% {
             box-shadow: 0 0 20px rgba(54, 255, 125, 0.6);
        }
        100% {
             box-shadow: 0 0 100px rgba(54, 255, 125, 0.3);
        }
    }



    </style>


   <div class = "container-fluid">
     <div class="container">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><h1>Basic Inventory System<h1></a>
    </div>
  </nav>
</div>


<form action="compute.php" method="POST">
<div class="mb-3">

  <br><br>
  <label for="Product_name" class="form-label"><h2>Product Name:</h2></label>
  <input type="text" id="Product_name" name="product_name" required>

  <br><br>

  <label for="Initial_qty" class="form-label"><h2>Initial qty:</h2></label>
  <input type="text" id="initial_qty" name="initial_qty" required>

  <br><br>

  <label for="Out" class="form-label"><h2>Out:</h2></label> 
  <input type="text" id="Out"  name="out" required>
</div>

<div class="mb-3">
  <button class="btn btn-success" type="submit" name="get_balance" value="Calculate">Get Balance</button>
</div>

</form>

   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


  </body>
</html>