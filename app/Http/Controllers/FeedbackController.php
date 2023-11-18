<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function create(){
        return view('feedback.cadastrar');
    }
    
    public function cadastrarFeedback(Request $request)
    {
        $feedback = new Feedback();

        $feedback->id_feedback = $request->id_feedback;
        $feedback->id_cliente = $request->id_cliente;
        $feedback->id_veiculo = $request->id_veiculo;
        $feedback->nivel_avaliacao = $request->nivel_avaliacao;
        $feedback->mensagem = $request->mensagem;
        $feedback->data_cadastro = date('d/m/Y H:i');

        $feedback->save();

        return redirect('feedback/cadastrar')->with('cadastroRealizado', 'Cadastro realizado com sucesso!');
    }

    public function consultarFeedback()
    {
        $feedbacks = Feedback::all();

        return view('feedback.consultar', compact('fee  dbacks'));
    }

    public function editarFeedback($id_feedback) {
        $feedback = Feedback::findOrFail($id_feedback);

        return view('feedback.editar', compact('feedback'));
    }

    public function atualizarFeedback(Request $request) 
    {
        $feedback = $request->all();
        Feedback::findOrFail($request->id_feedback)->update($feedback);

        return redirect('feedback/consultar');
    }

    public function deletarFeedback($id_feedback)
    {
        Feedback::findOrFail($id_feedback)->delete();
        
        return;
    }
}