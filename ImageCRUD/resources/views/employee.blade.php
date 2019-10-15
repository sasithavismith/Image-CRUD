<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
      <div class="jumbtron">
      <h1>Image CRUD-in Laravel</h1>
      <form action="/addimage" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control" placeholder="Enter the name">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter the email">
        </div>
        <div class="form-group">
            <label>Post</label>
            <input type="text" name="post" class="form-control" placeholder="Enter the post">
        </div>
        <label>Image</label>
        <div class="input-group">
           <div class="custom-file">
               <input type="file" name="image" class="custom-file-input"> 
               <label class="custom-file-label">Choose file</label>
             </div>
    </div><br>
    <button type="submit" name="submit" class="btn btn-primary">Save Data</button>
      </form>
  </div>  
</body>
</html>