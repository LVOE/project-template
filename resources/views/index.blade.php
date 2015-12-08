<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

       
        <link rel="stylesheet" href="{{ URL::asset('css/xeditable.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
            
    </head>
    <body ng-app="app">
        
        <div class="container">
            <div class="content">
                <div class="row title">
                    <div class="col-xs-12"><h1>Location Crafter</h1></div>
                </div>
                <ng-view></ng-view>
            </div>
        </div>x
        
        <script src="{{ URL::asset('js/angular.min.js') }}"></script>
        <script src="{{ URL::asset('js/xeditable.min.js') }}"></script>
        <script src="{{ URL::asset('js/ui-bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('js/angular-route.min.js') }}"></script>
        <script src="{{ URL::asset('js/app.min.js') }}"></script> 
    </body>
</html>
