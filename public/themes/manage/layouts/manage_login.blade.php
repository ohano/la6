<!DOCTYPE html>
<html  class="no-js" lang="">
<head>
    <title>{!! Theme::get('title') !!}</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="initial-scale=0.1">
    <meta name="keywords" content="{!! Theme::get('keywords') !!}">
    <meta name="description" content="{!! Theme::get('description') !!}">
    {!! Theme::partial('manage_head') !!}
    <script src="{{ ASSETS_PATH }}/js/managelogin.js"></script>
</head>
<body class="login-layout">

{!! Theme::content() !!}

</body>
</html>
