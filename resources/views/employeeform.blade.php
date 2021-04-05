<!DOCTYPE html>
<html>
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
        <div class = "container">
            <div class ="jumbotron">
              <a href="/employee">Add employee</a>
                <table class="table table-stripped table-bordered">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Image</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($employees as $employee )
                      <tr>
                        <th>{{ $employee->id }}</th>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->surname }}</td>
                        <td>{{ $employee->email }}</td>
                        <td><img src="{{ asset('uploads/employee/' . $employee->image) }}" width="80px" height="100px" alt="Image"></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  
            </div>
        </div>
    </body>
</html>