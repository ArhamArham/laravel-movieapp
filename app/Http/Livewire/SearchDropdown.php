<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
class SearchDropdown extends Component
{
    public $search= '';
    public function render()
    {
        $searchResults=[];
        if (strlen($this->search) >= 2) 
        {
            $searchResults=Http::get('https://api.themoviedb.org/3/search/movie?api_key=58449521fd0fb072c63becddefeac2a1&language=en-US&query='.$this->search.'&page=1&include_adult=false
            ')->json()['results'];
        }
        //dd($searchResults);
        return view('livewire.search-dropdown',[
            'searchResults'=>$searchResults,
        ]);
    }
}
