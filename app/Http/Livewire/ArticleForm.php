<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleForm extends Component
{

    public $title;
    public $subtitle;
    public $body;


    protected $rules = [
        'title' => 'required|min:5',
        'subtitle' => 'required|min:5',
        'body' => 'required|min:10',
    ];

    protected $messages = [
        'title.required' => 'Il titolo deve essere obbligatorio',
        'title.min' => 'Il titolo deve essere minimo di 5 caratteri',
        'subtitle.required' => 'Il sottotitolo deve essere obbligatorio',
        'subtitle.min' => 'Il sottotitolo deve essere minimo di 5 caratteri',
        'body.required' => 'Il testo deve essere obbligatorio',
        'body.min' => 'Il testo deve essere minimo di 10 caratteri',
    ];

    public function articleStore(){

        $this->validate();

        $article = Article::create([

            'title'=> $this->title,
            'subtitle'=> $this->subtitle,
            'body'=> $this->body,
        ]);

        session()->flash('message', 'Il tuo articolo è stato caricato con successo!');

        // $this -> clearForm();   ->   Funzione per pulire il form una volta spinto il submit.
        $this -> reset();  // -> fa la stessa cosa, ovvero pulisce il form.
    }

    // protected function clearForm(){
    //     $this -> title = '';
    //     $this -> subtitle = '';
    //     $this -> body = '';
    // }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.article-form');
    }
}
