<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">TITOLO</th>
            <th scope="col">CREATO IL:</th>
            <th scope="col">AZIONI</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($articles as $article)
            <tr>
                <th>{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->created_at}}</td>
                <td>
                    <a href="{{route('edit_article', compact('article'))}}"><button class="btn btn-info">Modifica</button></a>
                    <a href=""><button class="btn btn-danger" wire:click="destroy({{$article}})">Elimina</button></a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
