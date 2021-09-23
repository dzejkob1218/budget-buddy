@props(['category'])

<div class="pt-2">
    <!-- The category itself -->
    <div class="py-2 bg-indigo text-white font-weight-bold d-flex align-items-center rounded">
        <h4 class="mb-0 mr-auto ml-3">{{$category->name}}</h4>

        @if ($category->children->count())
            <x-display.collapse-button :target="$category->name . '-children'"/>
        @endif

        <x-display.category-delete-button :category="$category"/>

    </div>

    <!-- The Category's children -->
    <div class="collapse ml-5" id="{{$category->name}}-children">
    @foreach ($category->children as $child) <!-- Should this call to allTopLevel be elsewhere? -->
        <x-display.category-list-entry :category="$child"/>
        @endforeach
    </div>
</div>
