@props(['category'])

<form method="POST" action="/categories" class="mx-2">
    @csrf
    @method('delete')
    <input type="hidden" name="category" value={{$category->id}}>
    <button class="btn btn-danger" type="submit">
        Delet
    </button>
</form>
