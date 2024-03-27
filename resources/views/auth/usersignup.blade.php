<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="{{ url('https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css') }}" rel='stylesheet'>
    <title>Document</title>
</head>

<body style="width: 100%;height: 650px;" class="d-flex justify-content-center align-items-center ">

    <form action="/postregister" method="post"
        class="bg-light col-5 border border-1 rounded-2 h-75 align-items-center d-flex flex-column justify-content-center ">
        @csrf
        <div class="w-75 h-50 ">
            <div class="form-group col-12 ">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter Username" name="username">
            </div>
            <div class="form-group col-12 ">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email" name="email">
            </div>
            <div style="height: 10px"></div>
            <div class="form-group col-12 ">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                    name="password">
            </div>
        </div>
        <div style="height: 10px"></div>
        <input type="submit" name="register" class="btn btn-primary col-6" value="Sign Up">
    </form>
</body>

</html>
