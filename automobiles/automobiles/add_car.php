<html>
<head>
    <title> Login Form </title>
    <link rel="stylesheet" type="text/css" href="add.css">   
</head>
    <body>
    <form action="db_connection.php" method="post">
        <div class="wrapper">
    <div class="title">
      ADD CAR
    </div>
    <div class="form">
       <div class="inputfield">
          <label>ID</label>
          <input type="text" name="id" class="input" required autofocus>
       </div>   
       <div class="inputfield">
          <label>Brand</label>
          <input type="text" name="brand" class="input" required autofocus>
       </div>  
       <div class="inputfield">
          <label>Model</label>
          <input type="text" name="model" class="input" required autofocus>
       </div>  
          <div class="inputfield">
          <label>Ex-Showroom</label>
          <input type="text" name="exshowroom" class="input" required autofocus>
       </div> 
          <div class="inputfield">
          <label>Speed</label>
          <input type="text" name="speed" class="input" required autofocus>
        </div>
       <div class="inputfield">
          <label>Rating</label>
          <input type="text" name="rating" class="input" required autofocus>
       </div> 
      <div class="inputfield">
          <label>Fuel</label>
          <input type="text" name="fuel" class="input" required autofocus>
       </div> 
      <div class="inputfield terms">
          </label>
       </div> 
      <div class="inputfield">
        <input type="submit" name="save" value="ADD" class="btn"></break>
        <a href="admin_dashboard.html" type="button" class="btn">BACK</a> 
      </div>
    </div>
</div>
</form>
</body>
</html>