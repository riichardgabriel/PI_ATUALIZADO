<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/instalacao.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Instalação de Aplicativos e sistemas operacionais</title>
</head>
<body>
    <main>
        <section>
            <div class="container">
                <div class="left-side">
                    <div class="items">
                        <div class="select-image">
                            <img src="../img/pclado.jpg">
                        </div>

                        <div class="thumbnails">
                            <div class="thumbnail">
                                <img src="../img/pcfrente.jpg" alt="">
                            </div>

                            <div class="thumbnail">
                                <img src="../img/cpu.jpg" alt="">
                            </div>

                            <div class="thumbnail">
                                <img src="../img/placamae.jpg" alt="">
                            </div>

                            <div class="thumbnail">
                                <img src="../img/ssd.jpg" alt="">
                            </div>
                        </div> -->
                    <!-- </div>
                </div>

                <div class="right-side">
                    <div class="content">
                        <h1>Instalação de Aplicativos e sistemas operacionais</h1>
                        <p>Este serviço consiste na instalação e configuração de programas e sistemas operacionais em computadores. Inclui a preparação do ambiente, instalação dos softwares necessários conforme as necessidades do usuário ou da empresa, e garantia de que todos os drivers e atualizações estejam corretamente configurados para o funcionamento adequado do sistema.</p>
                        <span class="price">R$ 120,00</span>
                        <span class="off">R$ 150,00</span>
                        <div class="options">
                            <div class="amount">
                                <div class="minus">
                                    <i class="bi bi-dash"></i>
                                </div>
                                <span>0</span>
                                <div class="plus">
                                    <i class="bi bi-plus"></i>
                                </div>
                            </div>

                            <a href="" class="button"><i class="bi bi-cart3"></i>Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html> --> 


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formatacao.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Formatação</title>
    <style>
        /* Estilos básicos para a página */
        body {
            font-family: 'Kumbh Sans', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
        }
        .container {
            display: flex;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 1200px;
            width: 100%;
        }
        .left-side, .right-side {
            padding: 20px;
        }
        .left-side {
            flex: 1;
            text-align: center;
        }
        .left-side img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .right-side {
            flex: 1;
        }
        .content h1 {
            margin-top: 0;
        }
        .price {
            display: block;
            font-size: 24px;
            font-weight: bold;
            color: #28a745;
        }
        .off {
            display: block;
            font-size: 18px;
            text-decoration: line-through;
            color: red;
        }
        .options {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }
        .amount {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }
        .amount span {
            margin: 0 10px;
            font-size: 18px;
        }
        .amount .minus, .amount .plus {
            cursor: pointer;
            font-size: 24px;
        }
        .button {
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            font-size: 18px;
        }
        .button i {
            margin-right: 8px;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <main>
        <section>
            <div class="container">
                <div class="left-side">
                    <div class="items">
                        <div class="select-image">
                            <img src="../img/pclado.jpg" alt="Imagem do produto">
                        </div>
                    </div>
                </div>

                <div class="right-side">
                    <div class="content">
                        <h1>Instalação de Aplicativos e sistemas operacionais</h1>
                        <p>Este serviço consiste na instalação e configuração de programas e sistemas operacionais em computadores. Inclui a preparação do ambiente, instalação dos softwares necessários conforme as necessidades do usuário ou da empresa, e garantia de que todos os drivers e atualizações estejam corretamente configurados para o funcionamento adequado do sistema.</p>
                        <span class="price">R$ 120,00</span>
                        <span class="off">R$ 150,00</span>
                        <div class="options">
                            <div class="amount">
                                <div class="minus">
                                    <i class="bi bi-dash"></i>
                                </div>
                                <span id="quantity">0</span>
                                <div class="plus">
                                    <i class="bi bi-plus"></i>
                                </div>
                            </div>
                            <a href="#" class="button" id="addToCartButton"><i class="bi bi-cart3"></i>Adicionar ao carrinho</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        // Script para gerenciar quantidade e adicionar ao carrinho
        document.addEventListener('DOMContentLoaded', function() {
            const quantityElement = document.getElementById('quantity');
            const minusButton = document.querySelector('.minus');
            const plusButton = document.querySelector('.plus');
            const addToCartButton = document.getElementById('addToCartButton');

            let quantity = 0;

            minusButton.addEventListener('click', function() {
                if (quantity > 0) {
                    quantity--;
                    quantityElement.textContent = quantity;
                }
            });

            plusButton.addEventListener('click', function() {
                quantity++;
                quantityElement.textContent = quantity;
            });

            addToCartButton.addEventListener('click', function(event) {
                event.preventDefault();
                alert('Produto adicionado ao carrinho com sucesso!');
                // Aqui você pode adicionar código para atualizar o carrinho ou redirecionar o usuário
            });
        });
    </script>
</body>
</html>
