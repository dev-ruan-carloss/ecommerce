@extends('layouts.app')
@section('body')
<section id="container" class="w-100 flex-c plano-fundo">
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="flex-c flex-jb tela-cadastro mt-1">
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
            <div class="flex-c m-1 div-cadastro">
                <span>Nome Completo</span>
                <input id="nomeCompleto" type="text">
                <span class="mt-05">CPF/CNPJ</span>
                <input id="cpfcnpj" type="text">
                <span class="mt-05">Senha</span>
                <input id="senha" type="text">
                <span class="mt-05">Telefone</span>
                <input id="telefone" type="text">
                <div class="w-100 flex-jc gap-1 mt-1">
                    <span class="mt-05">PAINEL ADMIN</span>
                    <input id="admin" type="checkbox">
                </div>
            </div>
            <div class="w-100 footer-login-end">
                <a href="{{route('inicio')}}" class="button-painel flex-ac flex-jc">Voltar | ESC</a>
                <a href="{{route('cadastro.gravar')}}" id="cadastrarLink" class="button-login flex-ac flex-jc" onclick="enviarDadosCadastro(event)">Cadastrar | Enter</a>
            </div> 
        </div>
    </section>

    <!-- Adicione o seguinte script antes do fechamento da tag </body> -->
    <script>
        // Define a função enviarDadosCadastro
        function enviarDadosCadastro(event) {
            event.preventDefault(); // Previne o comportamento padrão do link

            // Obtém os valores dos inputs
            let nomeCompleto = document.getElementById('nomeCompleto').value;
            let cpfcnpj = document.getElementById('cpfcnpj').value;
            let senha = document.getElementById('senha').value;
            let telefone = document.getElementById('telefone').value;
            let admin = document.getElementById('admin').checked;

            // Cria o objeto com os dados
            let data = {
                nome_completo: nomeCompleto,
                cpf_cnpj: cpfcnpj,
                senha: senha,
                telefone: telefone,
                admin: admin
            };
            console.log(data);

            // Envia a requisição AJAX para a nova rota
            // fetch('/cadastro/gravar', {
            //     method: 'POST',
            //     headers: {
            //         'Content-Type': 'application/json',
            //         'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            //     },
            //     body: JSON.stringify(data)
            // })
            // .then(response => {
            //     if (!response.ok) {
            //         throw new Error('Network response was not ok');
            //     }
            //     return response.text(); // Recebe a resposta como texto para depuração
            // })
            // .then(text => {
            //     try {
            //         let data = JSON.parse(text); // Tenta converter o texto para JSON
            //         console.log('Success:', data);
            //         // Adicione lógica para tratar a resposta, como redirecionar ou exibir uma mensagem
            //     } catch (error) {
            //         console.error('Error parsing JSON:', error);
            //         console.error('Response text:', text); // Exibe o conteúdo da resposta
            //     }
            // })
            // .catch((error) => {
            //     console.error('Fetch error:', error);
            //     // Adicione lógica para tratar o erro
            // });
        }
    </script>
@endsection