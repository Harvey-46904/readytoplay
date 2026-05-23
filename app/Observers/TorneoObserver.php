<?php

namespace App\Observers;

use App\Models\Torneo;
use Illuminate\Support\Str;
class TorneoObserver
{
    /**
     * Handle the Torneo "created" event.
     */
  
     public function created(Torneo $torneo): void
    {
        $torneo->slug = Str::slug(
           $torneo->nombre . '-C' .$torneo->categoria . '-I' . $torneo->id
        );

        $torneo->saveQuietly();
    }

    /**
     * Handle the Torneo "updated" event.
     */
    public function updated(Torneo $torneo): void
    {
        //
    }

    /**
     * Handle the Torneo "deleted" event.
     */
    public function deleted(Torneo $torneo): void
    {
        //
    }

    /**
     * Handle the Torneo "restored" event.
     */
    public function restored(Torneo $torneo): void
    {
        //
    }

    /**
     * Handle the Torneo "force deleted" event.
     */
    public function forceDeleted(Torneo $torneo): void
    {
        //
    }
}
