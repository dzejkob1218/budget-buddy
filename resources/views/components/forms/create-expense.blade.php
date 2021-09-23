<form method="POST" action="/expense" class="d-flex">
    @csrf
    <h3> Category </h3>

    <input type="text" name="category">
    @error('name')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <h3> Quantity </h3>

    <input type="number" name="quantity">
    @error('name')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <h3> Price </h3>

    <input type="number" name="price">
    @error('name')
    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror

    <button type="submit">
        Add
    </button>

</form>

<button onclick="addExpense()">
    Add temp
</button>

<button onclick="toggleAll()">
    Show All
</button>

<script>
    function addExpense() {
        $.ajax({
            type: 'POST',
            url: '/expense',
            data: {"_token": "{{ csrf_token() }}"},
            success: function (data) {
                const li = document.createElement("div");
                li.innerHTML = data;
                $('#list').prepend(li);
                $('.entry').first().collapse('show');
            }
        });
    }

    function toggleAll() {
        $('.entry').collapse('show');
    }


</script>
