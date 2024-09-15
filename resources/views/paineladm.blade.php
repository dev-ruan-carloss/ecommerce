@extends('layouts.app')
@section('body')
    <article class="w-100" style="background-color: white; height: 80px">
      <header class="flex-jb w-100" >
        <img src="/image/GC.png" alt="Logo da Empresa" class="logo ml-4" width="115px" height="80px">
        {{-- <div class="flex-je">
          <input type="text" class="input-busca">
          <i class="icone-notificacoes"><img src="/image/iconesino.png" alt="ICONE NOTIFICAÇÃO" class="ml-4" width="70px" height="30px"></i>
          <i class="icone-notificacoes"><img src="/image/iconeconfig.png" alt="ICONE CONFIGURAÇÃO" class="ml-4" width="70px" height="30px"></i>
        </div> --}}
      </header>
    </article>
    <section id="container123 flex-c w-100">
        <div class="sidebar mt-5">
            <span class="font-25 bold">Go Cardápios</span>
            <ul class="flex-c gap-1 mt-2">
              <li class="flex w-100"><a href="#produtos" class="flex-ac w-100"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 4v14h16V4H4zm0-2h16c1.1 0 2 .9 2 2v14c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2zm4 3h8v2H8V5zm0 4h8v2H8V9zm0 4h8v2H8v-2z" fill="#ffffff"/></svg> Produtos</a></li>
              <li class="flex w-100"><a href="#clientes" class="flex-ac w-100"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" fill="#ffffff"/></svg> Clientes</a></li>
              <li class="flex w-100"><a href="#pedidos" class="flex-ac w-100"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 4v1H3v14h14V5h-4V4H7zm8 13H6v-1h9v1zm-3-4H6v-1h6v1zm4-1v2H6v-2h10zm2-3v1H6v-1h10zm0-2v1H6V7h10z" fill="#ffffff"/></svg> Pedidos</a></li>
              <li class="flex w-100"><a href="#relatorios" class="flex-ac w-100"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 2v16.5a1.5 1.5 0 0 0 1.5 1.5H18a1.5 1.5 0 0 0 1.5-1.5V4a1.5 1.5 0 0 0-1.5-1.5H7.5A1.5 1.5 0 0 0 6 4v0zM18 3v15H8V3h10zm-5 3H9v2h4V6zM9 11h4v2H9v-2z" fill="#ffffff"/></svg> Relatórios</a></li>
            </ul>
        </div>
          <div class="main-content">
            <h1>Bem-vindo ao Painel Administrativo</h1>
            <p class="mt-1">Selecione uma opção no menu lateral para começar.</p>
            <!-- Conteúdo principal vai aqui -->
          </div>
    </section>
@endsection