<x-layout>

    <h1 class="text-center display-1">MODIFICA IL TUO ARTICOLO</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 mt-5">

                @livewire('article-edit-form', compact('article'))

            </div>
        </div>
    </div>

</x-layout>