<?php

namespace App\Http\Controllers;

use App\Events\StatusLiked as EventsStatusLiked;
use Illuminate\Http\Request;

class StatusLikedController extends Controller
{
    public function likeStatus(){
        event(new EventsStatusLiked('Someone'));
        return 'Event has been sent!';
    }
}
