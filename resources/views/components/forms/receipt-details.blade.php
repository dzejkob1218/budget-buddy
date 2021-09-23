<form method="POST" action="/remember" name="receiptDetails" >
    @csrf

    <div class="d-flex">

        <h3> Place </h3>

        <input type="text" name="place" onfocusout="updateReceipt()" value="{{$newReceipt->place}}">
        @error('place')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror

        <h3> Date </h3>

        <input type="date" name="date" onfocusout="updateReceipt()" value="{{$newReceipt->date}}">
        @error('date')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror

        <x-navigation.button type="button" data-toggle="collapse" data-target="#note-field" aria-expanded="false" aria-controls="collapseExample">
            Add Note
        </x-navigation.button>

        <button type="submit" style="visibility: hidden" id="hiddenSubmit"/>

    </div>
    <div class="collapse" id="note-field">
        <textarea name="note" rows="5" cols="80" onfocusout="updateReceipt()" placeholder="Your note here">{{$newReceipt->note}}</textarea>
        @error('note')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
</form>

<script>
    // Make an update to the temporary receipt in session every time one of the fields changes
    // TODO : separate js from blade

    document.receiptDetails.addEventListener( "submit", function( event ) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/remember',
            data: $(this).serialize(),
        });
    });

    function updateReceipt() {
        document.getElementById("hiddenSubmit").click();
    }

</script>

