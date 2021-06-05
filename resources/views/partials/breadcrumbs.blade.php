@php
    $breadcrumbs = Breadcrumbs::generate();
@endphp

@if ($breadcrumbs)

    <ol class="breadcrumb breadcrumb-top">
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb->url && !$loop->last)
                <li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="active">{{ $breadcrumb->title }}</li>
            @endif

        @endforeach
    </ol>

@endif
