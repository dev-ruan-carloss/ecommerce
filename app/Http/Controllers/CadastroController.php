<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index(){
        return view('logincadastro');
    }

    public function gravar(Request $request)
    {
        // Valida os dados recebidos
        $validatedData = $request->validate([
            'nome_completo' => 'required|string|max:255',
            'cpf_cnpj' => 'required|string|max:20',
            'senha' => 'required|string|min:6',
            'telefone' => 'required|string|max:15',
            'admin' => 'required|boolean',
        ]);
        dd($validatedData);

        // // Salva os dados no banco de dados
        // CadastroController::create($validatedData);

        // // Retorna uma resposta JSON
        // return response()->json(['success' => true]);
    }
}
