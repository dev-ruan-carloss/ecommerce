@extends('layouts.app')
@section('body')
    <section id="container" class="w-100 flex-c plano-fundo">
        <div class="flex-c flex-jb tela-login mt-1">
            <div class="h-100 w-100 flex footer-login">
                <div class="flex-ac ml-05 w-100">
                    <svg class="icon icon-person cinza" width="25" height="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zM12 14c-4.42 0-8 3.58-8 8v1h16v-1c0-4.42-3.58-8-8-8z" fill="currentColor"/>
                    </svg>
                    <span class="white ml-05">Bem-vindo</span>
                </div>
            </div>
             <div class="w-100 logo-login mt-1">
                <img src="/image/GC.png" alt="Logo da Empresa" class="logo" width="250px" height="200px">
            </div>
            <div class="flex-c m-1">
                <span>CPF</span>
                <input id="idusuario" type="text">
                <span class="mt-05">Senha</span>
                <input id="idsenha" ="text" >
            </div>
            <div class="w-100 footer-login-end">
                <a href="{{route('cadastro')}}" class="button-painel text-a flex-ac flex-jc">Cadastre-se</a>
                <a href="" class="button-login  text-a flex-ac flex-jc">Painel | Entrar</a>
                {{-- <button class="button-painel">Cadastre-se</button>
                <button class="button-login">Enter  |  Entrar</button> --}}
            </div> 
        </div>
        <div class="w-100 logo-login-2 flex-je">
            <img src="/image/GC3.png" alt="Logo da Empresa" class="logo" width="115px" height="80px">
        </div>
    </section>
@endsection