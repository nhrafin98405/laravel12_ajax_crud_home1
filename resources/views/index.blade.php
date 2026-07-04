<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ajax crud</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>

<body>

    <div class="p-5 bg-primary text-white text-center">
        <h1>My First Bootstrap 5 Page</h1>
        <p>Resize this responsive page to see the effect!</p>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="container mt-3">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2>Student Table</h2>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentModal">
                            Open modal
                        </button>
                        

                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">PHONE</th>
                                <th scope="col">ROOL</th>
                                <th scope="col">ADDRESS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $stdnt)
                                
                            
                            <tr>
                                <th>{{$stdnt->id}}</th>
                                <td>{{$stdnt->name}}</td>
                                <td>{{$stdnt->email}}</td>
                                <td>{{$stdnt->phone}}</td>
                                <td>{{$stdnt->rool}}</td>
                                <td>{{$stdnt->address}}</td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @include('modal')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $(document).on('submit','#addStudent',function(e){

                e.preventDefault();
                let formData = new FormData(this);

                $('.error-text').text('');

                $.ajax({
                    url:"{{route('student.store')}}",
                    method:'post',
                    data:formData,
                    contentType:false,
                    processData:false,
                    success:function(response){

                    },
                    error:function(err){
                        let errors = err.responseJSON.errors;
                        $.each(errors,function(key,value){
                            $('.'+key+'_error').text(value[0]);
                        });
                    }
                })


            });

        })
    </script>


    <div class="mt-5 p-4 bg-dark text-white text-center">
        <p>Footer</p>
    </div>

</body>

</html>
