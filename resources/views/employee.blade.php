<!DOCTYPE html>
<html>
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class = "jumbotron">
                <form action="{{ route('addimage') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label>Surname</label>
                        <input type="text" name="surname" class="form-control" placeholder="Enter Surname">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Email">
                    </div>
                    <div class = "input-group">
                        <div class = "custom-file">
                            <input type = "file" name="image" class = "custom-file-input">
                            <label class ="custom-file-label">Chose file</label>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Save Data</button>
                </form>
            </div>
        </div>
    </body>
</html>