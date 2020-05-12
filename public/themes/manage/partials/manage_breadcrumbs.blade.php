<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
        @foreach ($crumbs as $i => $crumb)
            @if ($i != (count($crumbs) - 1))
                <li>
                    <i class="ace-icon fa fa-tasks home-icon"></i>
                    <a href="{{ $crumb["url"] }}">{{ $crumb["label"] }}</a>
                </li>
            @else
                <li class="active">{{ $crumb["label"] }}</li>
            @endif
        @endforeach
    </ul><!-- /.breadcrumb -->

    <div class="nav-search" id="nav-search">

    </div><!-- /.nav-search -->
</div>
