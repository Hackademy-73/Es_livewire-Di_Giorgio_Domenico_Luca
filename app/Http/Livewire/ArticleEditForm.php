<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ArticleEditForm extends Component
{
    public $article;

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

    public function mount(){
        $this -> title = $this -> article -> title;
        $this -> subtitle = $this -> article -> subtitle;
        $this -> body = $this -> article -> body;
    }

    public function articleUpdate(){

        $this->validate();

        $this -> article -> update([
            'title' => $this -> title,
            'subtitle' => $this -> subtitle,
            'body' => $this -> body
        ]);
        
        return redirect(route('show_article'))->with('message','Articolo modificato correttamente!');
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.article-edit-form');
    }
}
