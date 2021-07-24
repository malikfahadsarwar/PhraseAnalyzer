<!DOCTYPE html>
<html lang="en">
<head>
  <title>TEVTEX Digital</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h3>TEVTEX Digital</h3>
    <h4 style="text-align:center;">Phrase Analyser</h4>
    
    
    <form action="{{ route ('analyzerstore') }}" method="post">
    {{ csrf_field() }}
            <div class="input-group">
                <span class="input-group-addon">Enter the String</span>
                <input id="msg" type="text" class="form-control" name="phrase" maxlength="255" placeholder="Max String can be 255" required>
            </div></br>
           
            <div class="wrapper">
            <button style="text-align:center;" type="submit" class="btn btn-info btn-lg">Submit</button>
            </div>   
        </form>

 
</div>

</body>
</html>

<style>
    .wrapper {
    text-align: center;
}

.button {
    position: absolute;
    top: 50%;
}
</style>