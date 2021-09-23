<x-app-layout>

    <!-- TODO:
        -Make the page not reload every time something happens
        -Make it possible to update parent
        -Pop up messages on success
        -Make new category form collapsible
        -Handle children when deleting a category
        -Add color variation for categories
    -->
    <h3>Add category</h3>

    <hr class="mx-3"/>

        <x-forms.create-category/>

    <hr class="mx-3"/>

    <div class="px-5">
        @foreach (App\Models\Category::allTopLevel(1) as $category) <!-- Should this call to allTopLevel be elsewhere? -->
                <x-display.category-list-entry :category="$category" />
        @endforeach
    </div>

</x-app-layout>
