<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Export CSV in Laravel 8</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <strong>Export data in CSV</strong>
                    </div>
                   
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!-- Printing user table data-->
                        @foreach($data as $d)
                            <tr>
                                <td>{{ $d->name }}</td>
                                <td>{{ $d->email }}</td>
                                <td>{{ $d->mobile }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <div class="card-body">
                        <a href="{{ route('export.excel') }}" class="btn btn-success" style="border-radius: 50px;">Export</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>