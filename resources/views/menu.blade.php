@if(!isset($innerLoop))
    <ul class="nav navbar-nav">
@else
    <ul class="dropdown-menu">
@endif

@foreach ($items as $item)

    @php

        $originalItem = $item;
        $listItemClass = 'menuItem';
        $linkAttributes =  null;
        $styles = null;
        $icon = null;
        $caret = null;

        // Background Color or Color
        if (isset($options->color) && $options->color == true) {
            $styles = 'color:'.$item->color;
        }
        if (isset($options->background) && $options->background == true) {
            $styles = 'background-color:'.$item->color;
        }

        // With Children Attributes
        if(!$originalItem->children->isEmpty()) {
            $linkAttributes =  'class="dropdown-toggle" data-toggle="dropdown"';
            $caret = '<span class="caret"></span>';

            if(url($item->link()) == url()->current()){
                $listItemClass = 'dropdown menuItem menuItem-active';
            }else{
                $listItemClass = 'dropdown menuItem';
            }
        } else {
            if(url($item->link()) == url()->current()){
                $listItemClass = 'menuItem menuItem-active';
            }else{
                $listItemClass = 'menuItem';
            }
        }

        // Set Icon
        if(isset($options->icon) && $options->icon == true){
            $icon = '<i class="' . $item->icon_class . '"></i>';
        }

    @endphp

    <li class="{{ $listItemClass }}">
        <a href="{{$item->link() == '' ? '#' : url($item->link()) }}" data-link="{{$item->link()}}" target="{{ $item->target }}" style="{{ $styles }}" {!! $linkAttributes or '' !!}>
            {!! $icon !!}
            <span>{{ $item->title }}</span>
            {!! $caret !!}
        </a>
        @if(!$originalItem->children->isEmpty())
            @include('menu', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true])
        @endif
    </li>
@endforeach
</ul>