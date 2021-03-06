<?php

class Track extends Eloquent
{
    protected $table = 'Track';
    protected $primaryKey = 'TrackId';

    public function genre ()
    {
        return $this->hasOne('Genre', 'GenreId', 'GenreId');
    }
}
