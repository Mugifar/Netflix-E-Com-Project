<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">


    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <div class="container" style="width: 100%; min-height: 600px;">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Movies Add</h2>
            </div>
            <div class="panel-body">
                <form method="POST" enctype="multipart/form-data" action="/moviesadd">
                    @csrf

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Movie Name</label>
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="sel1">Movie Category</label>
                        <div class="col-md-6">
                            <select class="form-control" id="sel1" name="category">
                                <option>Romance</option>
                                <option>Drama</option>
                                <option>Horror</option>
                                <option>Thrillers</option>
                                <option>Sci-Fi</option>
                                <option>Action</option>
                                <option>Web Series</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Movie Cast</label>
                        <div class="col-md-6">
                            <input type="text" name="cast" class="form-control">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Movie Language</label>
                        <div class="col-md-6">
                            <input type="text" name="language" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Release Year</label>
                        <div class="col-md-6">
                            <input type="text" name="year" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Run Time</label>
                        <div class="col-md-6">
                            <input type="text" name="runtime" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Genres</label>
                        <div class="col-md-6">
                            <input type="text" name="genres" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Discription</label>
                        <div class="col-md-6">
                            <input type="text" name="discription" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Image</label>
                        <div class="col-md-6">
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Movie Clip</label>
                        <div class="col-md-6">
                            <input type="file" name="movie_clip" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-2">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops! There are problems in uploading the image.</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
    <div>
        <a href="/home">Home</a>
    </div>


</body>

</html>
