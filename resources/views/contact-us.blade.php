<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
        <section style = "padding-top:60px;">
            <div class ="container">
                <div class ="row">
                    <div class ="col-md-6 offset-md-3">
                        <div class ="card">
                            <div class ="card-header">
                                <div class ="card-body">
                                    @if(Session::has('message sent'))
                                        <div class ="alert alert-success" role="alert">
                                            {{ Session::get('message sent') }}
                                    @endif
                                    <form method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class ="form-group">
                                        <label for ="name">Name</label>
                                        <input type = "text" name="name" class ="form-control">
                                    </div>
                                    <div class ="form-group">
                                        <label for ="email">Eamil</label>
                                        <input type = "text" name="email" class ="form-control">
                                    </div>
                                    <div class ="form-group">
                                        <label for ="phone">Phone</label>
                                        <input type = "text" name="phone" class ="form-control">
                                    </div>
                                    <button type="submit" class ="btn btn-primary float-right">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    </body>
</html>