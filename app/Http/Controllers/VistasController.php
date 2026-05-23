<?php
namespace App\Http\Controllers;

use App\Models\EscuelasArbitros;

class VistasController extends Controller
{
    public function escuela($id)
    {
        $arbitros = EscuelasArbitros::with('user')
            ->where('escuela_id', $id)
            ->get();

        $section = 'arbitosescuela';

        return view('theme::settings.index', compact(
            'section',
            'arbitros'
        ));
    }
    public function torneo($slug)
    {
        $torneo = \App\Models\Torneo::where('slug', $slug)
            ->firstOrFail();
        $equipos = \App\Models\Equipo::where('torneo_id', $torneo->id)
            ->get();
       
        return view('theme::torneoindividual', compact(
            
            'torneo'
            ,'equipos'
        ));

    }
}
