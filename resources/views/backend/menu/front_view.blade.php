<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Rendering</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    {{--<link rel="stylesheet" href="/resources/demos/style.css">--}}
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#menu").menu();
        });
    </script>
    <style>
        .ui-menu {
            width: 200px;
        }
    </style>
</head>
<body>
<div class="row">
    <div class="col-xs-12">
        <div class="col-md-5">
            <h1>Menu View</h1>
            <a href='{{route('menu.create')}}'><button class="btn btn-success">Create A Menu</button></a>
            <hr>
            <div class="col-xs-6">
                @if(count($menus)>0)
                <ul id="menu">
                    @foreach($menus as $menu)
                        <li>
                            <div>{{$menu->title}}</div>
                            @if($menu->allchildren->count()>0)
                            <ul>
                                @foreach($menu->allChildren as $children)
                                <li>
                                    <div>{{$children->title}}</div>
                                    @if($children->allChildren->count()>0)
                                    <ul>
                                        @foreach($children->allChildren as $child)
                                        <li>
                                            <div>{{$child->title}}</div>
                                            @if($child->allchildren->count()>0)
                                            <ul>
                                                @foreach($child->allChildren as $c)
                                                <li>
                                                    <div>{{$c->title}}</div>
                                                </li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                             @endif
                        </li>
                    @endforeach
                </ul>
            </div>
            @else
                <p>No Data Available</p>
            @endif
        </div>
        <div class="col-md-7">
            @include('backend.menu.create')
        </div>
    </div>
</div>


</body>
<script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
</html>