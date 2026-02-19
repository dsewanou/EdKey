<?php

namespace App\Http\Controllers\Api\Central;

use App\Models\Tenant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TenantController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|string|unique:tenants,id|max:255',
            'domain' => 'required|string|unique:domains,domain',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // 1. Création du Tenant (déclenche la création de la DB + Migrations)
        $tenant = Tenant::create([
            'id' => $request->id,
            // Tu peux ajouter des métadonnées ici (plan, nom de l'entreprise, etc.)
            'plan' => $request->get('plan', 'free'),
        ]);

        // 2. Assignation du domaine
        $tenant->domains()->create([
            'domain' => $request->domain,
        ]);

        return response()->json([
            'message' => 'Tenant créé avec succès',
            'tenant' => $tenant->load('domains'),
        ], 201);
    }
}