<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <style>
        #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#sortable" ).sortable();
            $( "#sortable" ).disableSelection();
        } );
    </script>
    <title>Menu</title>
</head>
<body>
<div class="row">
    <div class="col-xs-12">
        <div class="col-md-8">
           <h1>Index Of Parent Menus</h1>
            <hr/>
            <div class="col-xs-4">
                <ul id="sortable" data-id="{{$menus}}">
                    @foreach($menus as $menu)
                    <li class="well" data-id="{{$menu->id}}">{{$menu->title}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</div>

</body>
<script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
    <script>
        $("document").ready(function(){
            $("#sortable").sortable({
                opacity: 0.6,
                cursor: "move",
                update:function(event, ui){
                    var default_order = $(".well").attr('data-id');
                    var order = $(this).sortable('toArray');
                    console.log(order);
                }
            })
        });
    </script>
</html>