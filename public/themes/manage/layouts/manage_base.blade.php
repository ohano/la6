<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>{!! Theme::get('title') !!}</title>

    {!! Theme::partial('manage_head') !!}
</head>

<body class="no-skin">
    {{--头部导航栏--}}
    {!! Theme::partial('manage_nav') !!}
    <div class="main-container ace-save-state" id="main-container"><!-- /.main-container -->
        {{--侧边菜单栏--}}
        {!! Theme::partial('manage_sidebar') !!}
        <div class="main-content">
            <div class="main-content-inner">
                {{--面包屑--}}
                {!! Theme::place('manage_breadcrumbs') !!}
                {{--中间内容--}}
                {!! Theme::content() !!}
            </div>
        </div><!-- /.main-content -->
        {!! Theme::partial('footer') !!}
    </div><!-- /.main-container -->
    {!! Theme::partial('manage_foot') !!}
<!-- inline scripts related to this page -->
</body>
</html>
