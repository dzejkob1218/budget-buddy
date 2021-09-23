<form method="POST" action="/categories" class="d-flex">
    @csrf
    <h3> Name </h3>

    <input type="text" name="name">
    @error('name')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <h3> Parent </h3>

    <input type="text" name="parent">
    @error('parent')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <button type="submit">
        Add
    </button>

</form>
