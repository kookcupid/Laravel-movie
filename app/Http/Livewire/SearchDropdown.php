<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = '';

    public function render()
    {
        $searchResults =[];

        if (strlen($this->search) > 2) {
            $popularMovies = Http::withToken(config('services.tmdb.token'))
                ->get('https//api.themoiedb.org/3/movie/search/movie?query='.$this->search)
                ->json()['results'];
        }

        dump($searchResults);

        return view('livewire.search-dropdown', [
            'searchResults' => $searchResults,
        ]);
    }
}
