<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Es</title>
    <link href="{{ asset('/static/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('/static/jquery.min.js') }}"></script>
    <script src="{{ asset('/static/bootstrap.min.js') }}"></script>
    <script>
        $(function(){
            $("#submit").click(function(){
                var keyword = $("#keyword").val();
                $.ajax({
                    url: "{{ url('get') }}",
                    type: 'get',
                    data: {'keyword': keyword},
                    dataType: 'json',
                    success: function(result) {
                        console.log(result);
                    }
                });
            });
        });
    </script>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand hidden-sm" href="javascript:void(0)">Test Es</a>
        </div>
    </div>
</div>

<div class="container" style="margin-top:80px;">
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="input-group">
            <input type="text" class="form-control keyword" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-default" id="submit" type="button">Go!</button>
            </span>
        </div>
    </div>

    <div class="col-md-12" style="margin-top:80px;">
        content
    </div>
</div>
</div>
</body>
</html>
