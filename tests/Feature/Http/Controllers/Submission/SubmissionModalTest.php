<?php

use App\Http\Livewire\SubmitYouTubeLiveStream;
use Tests\TestCase;


it('includes the submission livewire component on all pages', function () {
    $this->get(route('home'))
        ->assertSeeLivewire(SubmitYouTubeLiveStream::class);

    $this->get(route('archive'))
        ->assertSeeLivewire(SubmitYouTubeLiveStream::class);
});
