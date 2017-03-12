
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <title>Menu</title>
</head>
<body>
<div class="row">
    <div class="col-xs-12">
        <div class="col-md-6">
           <h1>Create A Menu</h1>
            <div class="col-xs-6">
               {{Form::open(['route'=>'menu.store','method'=>'post'])}}
                @include('backend.menu.partials._form',['submitBtn'=>'Save'])
               {{Form::close()}}


            </div>
        </div>
    </div>

</div>

</body>
<script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
</html>