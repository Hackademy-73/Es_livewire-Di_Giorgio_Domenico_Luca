<form wire:submit.prevent="articleUpdate">

    @if (session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif

    <div class="mb-3">
        <label for="title" class="form-label">Inserisci il titolo</label>
        <input type="text" wire:model.debounce.1200ms="title" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="emailHelp">
        @error('title')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="subtitle" class="form-label">Inserisci il sottotitolo</label>
        <input type="text" wire:model.debounce.1200ms="subtitle" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" aria-describedby="emailHelp">
        @error('subtitle')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="body" class="form-label">Inserisci il testo</label>
        <textarea id="body" wire:model.debounce.1200ms="body" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror"></textarea>
        @error('body')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Applica modifiche</button>

</form>