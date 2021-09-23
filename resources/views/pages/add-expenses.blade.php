<x-app-layout>

    <!-- TODO:
        -Make the button change text when note is open or non-empty
        -Add a flash message when coming back to a wip receipt
        -Make Place and Category inputs autocomplete, make Category autocomplete based on both saved and temp categories
        -Validate receipt information
    -->

    <h3>Add category</h3>

    <hr class="mx-3"/>

    <form method="POST" action="/store">
        @csrf
        <button type="submit">
            Save
        </button>
    </form>

    <hr class="mx-3"/>

    <!-- Receipt information -->

    <x-forms.receipt-details :newReceipt="$newReceipt"/>

    <hr class="mx-3"/>

    <!-- Add expense forms -->

    <x-forms.create-expense/>

    <hr class="mx-3"/>

    <?php $elems = [1, 2, 3, 4, 5] ?>
    <div id="list">
        @foreach ($elems as $elem)
            <x-display.new-expense-list-entry :id="$elem"/>
        @endforeach
    </div>

</x-app-layout>
