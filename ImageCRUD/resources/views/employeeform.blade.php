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
        <div class="jumbotron">
            <h1>Image CRUD-in Laravel</h1><br>
            <a href="/employee" class="btn btn-primary">Add Image</a><br>
            <table class="table table-stripped table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Post</th>
                    <th scope="col">Image</th>
                    <th >EDIT</th> 
                  </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee )
                    <tr>
                        <th>{{$employee->id}}</th>
                        <th>{{$employee->name}}</th>
                        <th>{{$employee->email}}</th>
                        <th>{{$employee->post}}</th>
                        <th><img src="{{asset('uploads/employee/'.$employee->image)}}" width="100px" height="100px" alt="image"></th>
                        <th><a href="/editimage/{{$employee->id}}" class="btn btn-success">EDIT</a></th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>