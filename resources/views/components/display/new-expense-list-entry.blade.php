<div class="border border-white collapse entry" id="test-{{$id}}" aria-labelledby="test-{{$id}}">
    <!-- The category itself -->
    <div class="py-2 bg-indigo text-white font-weight-bold d-flex align-items-center rounded">
        <h4 class="mb-0 mr-auto ml-3">Test {{$id}}</h4>
        <x-display.collapse-button :target="'test-' . $id"/>
    </div>
</div>
