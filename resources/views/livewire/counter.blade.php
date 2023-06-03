<div class="container">
    <div class="row">
        <div class="col-12 mt-5 text-center">
            <h1 class="lead fs-3">Contatore: {{$value}}</h1>
            <button class="btn btn-info" wire:click="increment">Aggiungi 1</button>
            <button class="btn btn-success" wire:click="incrementBy5(5)">Aggiungi 5</button>
            <button class="btn btn-warning" wire:click="decrement">Diminuisci 1</button>
        </div>
    </div>
</div>