@props([
    'title' => null,
    'items' => [],
])

<div class="my-auto">
    <h4 class="page-title">{{$title}}</h4>
    <ol class="breadcrumb">
        @foreach($items as $item)
            <li class="breadcrumb-item @if($loop->last) active @endif" aria-current="page">
                @if($item['url'])
                    <a href="{{$item['url']}}">{{$item['label']}}</a>
                @else
                    {{$item['label']}}
                @endif
            </li>
        @endforeach
    </ol>
</div>
