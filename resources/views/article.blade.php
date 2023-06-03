<x-layout>

    <h1 class="text-center my-5 display-1">I TUOI ARTICOLI</h1>

    @if (session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-12">
                <livewire:article-table />
            </div>
        </div>
    </div>

</x-layout>