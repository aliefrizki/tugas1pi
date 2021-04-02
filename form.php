<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input Nama</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <style type="text/css">
  </style>
</head>
<body>


<div class="container">
  <h1 style="font-family: fantasy; color: white; border-bottom: 5px solid white">Welcome To DarthSide</h1>
  <div class="col-8">
  <form action="inputdatabase.php" method="POST">
    <div class="form-group">
      <label for="nama" class="subjudul">Name</label>
      <input type="text" class="form-control" name="nama" id="Nama" placeholder="Enter name"  required>
    </div>

    <div class="form-group">
      <label for="username" class="subjudul">Username</label>
      <input type="text" class="form-control" name="username" id="username" placeholder="Pick Your Username" required>
    </div>

    <div class="form-group">
      <label for="suku" class="subjudul">Race</label>
      <input type="text" class="form-control" name="suku" id="Suku" placeholder="Tell Us Your Race" required>
    </div>

    <div class="form-group">
      <label for="agama" class="subjudul">Religion</label>
      <select name="agama" class="custom-select" required>
        <option name="agama">-- Choose --</option>
        <option value="islam" name="agama">Islam</option>
        <option value="kristen" name="agama">Protestan</option>
        <option value="kristen" name="agama">Katolik</option>
        <option value="budha" name="agama">Buddha</option>
        <option value="hindu" name="agama">Hindu</option>
        <option value="konghucu" name="agama">Kong Hu Cu</option>
        <option value="army" name="agama">Army New Religion</option>
    </select>
    </div>

    <div class="form-group">
      <label for="jeniskelamin" class="subjudul">Gender</label>
      <select style="" name="Kelamin" value=""  class="custom-select" required>
          <option name="JK" value="Pilih">-- Choose --</option>
          <option name="JK" value="Laki-laki">Male</option>
          <option name="JK" value="Perempuan">Female</option>
          <option name="JK" value="Lain-Lain">Non-Binary</option>   
    </select>
    </div>



    <button type="submit" class="button button1" >Submit</button>
  </form>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
</html>