<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>History</title>
  </head>
  <link href="style.css" rel="stylesheet">
  <body>
    <div class="container">
        <h1 class="mt-2">History</h1>
        <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">File Name</th>
                <th scope="col">Uploaded at</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($arsips as $arsip)
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$arsip->fileName}}</td>
                <td>{{$arsip->created_at}}</td>
                <td><a class="btn btn-dark" style="color:white" href="/history/download/{{$arsip->id}}">Download</a>  <a class="btn btn-danger" style="color:white" href="/history/delete/{{$arsip->id}}">Delete</a></td>
                </tr>                
              @endforeach
            </tbody>
        </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>