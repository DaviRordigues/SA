@extends('layouts.app')
@section('content')

<div class="container mt-5 loja">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card product">
                <img src="{{ Vite::asset('resources/images/relogiosamsung.jpg') }}" class="card-img-top" alt="Product">

                <div class="card-body">
                    <h3 class="card-title">Galaxy Watch SM-R500NZ</h3>
                    <p class="card-text" style="color: green">R$ 1.800,00</p>
                    <p class="card-text" style="color: #065006"> + 💰 18,00</p>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprarModal">Comprar</a> +1% 💰

                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card product">
                <img src="{{ Vite::asset('resources/images/iphone-removebg-preview.png') }}" class="card-img-top" alt="Product">
                <div class="card-body">
                    <h3 class="card-title">Iphone 15 pro 128 GB</h3>
                    <p class="card-text" style="color: green">R$ 5.800,00</p>
                    <p class="card-text" style="color: #065006"> + 💰 58,00</p>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprarModal">Comprar</a> +1% 💰

                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card product">
                <img src="{{ Vite::asset('resources/images/samsung-buds-live-white-1-3.jpg') }}" class="card-img-top" alt="Product">
                <div class="card-body">
                    <h3 class="card-title">Samsung Galaxy Buds</h3>
                    <p class="card-text" style="color: green">R$ 280,00</p>
                    <p class="card-text" style="color: #065006"> + 💰 2,80</p>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprarModal">Comprar</a> +1% 💰

                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card product">
                <img src="{{ Vite::asset('resources/images/Captura_de_tela_22-4-2024_9458_www.casasbahia.com.br-removebg-preview.png') }}" class="card-img-top" alt="Product">
                <div class="card-body">
                    <h3 class="card-title">Alexa All-new Echo Dot</h3>
                    <p class="card-text" style="color: green">R$ 429,00</p>
                    <p class="card-text" style="color: #065006"> + 💰 4,29</p>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprarModal">Comprar</a> +1% 💰

                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card product">
                <img src="{{ Vite::asset('resources/images/macbook-removebg-preview.png') }}" class="card-img-top" alt="Product">
                <div class="card-body">
                    <h3 class="card-title">MacBook Air M1 Chip </h3>
                    <p class="card-text" style="color: green">R$ 5.280,00</p>
                    <p class="card-text" style="color: #065006"> + 💰 52,00</p>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprarModal">Comprar</a> +1% 💰

                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card product">
                <img src="{{ Vite::asset('resources/images/applewatch-removebg-preview.png') }}" class="card-img-top" alt="Product">
                <div class="card-body">
                    <h3 class="card-title">Apple Watch Ultra 2</h3>
                    <p class="card-text" style="color: green">R$ 5.780,00</p>
                    <p class="card-text" style="color: #065006"> + 💰 57,00</p>

                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#comprarModal">Comprar</a> +1% 💰
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="comprarModal" tabindex="-1" aria-labelledby="comprarModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="comprarModalLabel">Confirmar compra</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Por favor, preencha seus dados para finalizar a compra:</p>
                        <!-- Formulário de compra -->
                        <form id="purchaseForm">
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Nome completo</label>
                                <input type="text" class="form-control" id="fullname" name="fullname" required>
                            </div>
                            <div class="mb-3">
                                <label for="cpf" class="form-label">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Endereço de email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Endereço de entrega</label>
                                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="cep" class="form-label">CEP</label>
                                <input type="text" class="form-control" id="cep" name="cep" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" id="confirmPurchase">Confirmar compra</button>
                    </div>

                </div>
            </div>
        </div>

        <script>
            document.getElementById('confirmPurchase').addEventListener('click', function() {
                // Verificar se todos os campos do formulário estão preenchidos
                var fullName = document.getElementById('fullname').value;
                var cpf = document.getElementById('cpf').value;
                var email = document.getElementById('email').value;
                var address = document.getElementById('address').value;
                var cep = document.getElementById('cep').value;

                if (fullName === '' || cpf === '' || email === '' || address === '' || cep === '') {
                    // Se algum campo estiver vazio, exibir um alerta informando ao usuário para preencher todos os campos
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: 'Por favor, preencha todos os campos do formulário.',
                        confirmButtonText: 'OK'
                    });
                } else {
                    // Se todos os campos estiverem preenchidos, exibir o pop-up de confirmação da compra
                    Swal.fire({
                        icon: 'success',
                        title: 'Compra confirmada!',
                        text: 'Sua compra foi realizada com sucesso.',
                        confirmButtonText: 'OK'
                    }).then(function() {
                        // Atualizar o contador de metal coins na barra de navegação
                        var metalCoinsElement = document.getElementById('metal-coin-count');
                        var currentMetalCoins = parseInt(metalCoinsElement.textContent);
                        var novaQuantidadeMetalCoins = currentMetalCoins + 1;
                        metalCoinsElement.textContent = novaQuantidadeMetalCoins;
                    });

                    // Fechar o modal após a confirmação da compra
                    $('#comprarModal').modal('hide');
                }
            });
        </script>



        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>




        @endsection
