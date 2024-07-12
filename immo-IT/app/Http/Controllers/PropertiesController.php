<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;

class PropertiesController extends Controller
{
    public function create()
    {
        return view('admin.properties.create');
    }
    public function edit($id)
    {
        // Trouver la propriété par son ID
        $property = Properties::findOrFail($id);

        // Charger la vue du formulaire d'édition avec la propriété trouvée
        return view('admin.properties.edit', compact('property'));
    }
    public function update(Request $request, $id)
    {
        $property = Properties::findOrFail($id);
        $property->title = $request->input('title');
        $property->address = $request->input('address');
        $property->save();

        return redirect()->route('admin.dashboard')->with('success', 'Propriété mise à jour avec succès');
    }
    public function destroy($id)
    {
        $property = Properties::findOrFail($id);
        $property->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Propriété supprimée avec succès');
    }

    public function store(Request $request)
    {
        $property = new Properties;
        $property->title = $request->title;
        $property->address = $request->address;
        $property->save();

        return redirect()->route('admin.dashboard')->with('success', 'Bien immobilier ajouté avec succès');
    }
}
