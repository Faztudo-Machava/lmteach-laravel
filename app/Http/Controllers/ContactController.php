<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function enviarEmail(Request $request)
    {
        $detalhes = [
            'nome' => $request->input('mail_nome'),
            'email' => $request->input('mail_email'),
            'assunto' => $request->input('mail_assunto'),
            'mensagem' => $request->input('mail_mensagem')
        ];

        if(!!Mail::to('lmteach.inc@gmail.com')->send(new ContactMail($detalhes))){
        $resposta['success'] = false;
        $resposta['mensagem'] = 'Falha no envio de email.';
        return response()->json($resposta);   
        }
        $resposta['success'] = true;
        $resposta['mensagem'] = 'Mensagem enviada com sucesso.';
        return response()->json($resposta);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
