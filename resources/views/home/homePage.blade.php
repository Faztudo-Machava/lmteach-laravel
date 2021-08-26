@extends('index')
@section('css')

@endsection
@section('titulo')
    LMTEACH
@endsection
@section('conteudo')
    <div class="container my-5 text-white">
        <div class="row hero mt-5">
            <div class="col-lg-5">
                <div class="text mt-5 pt-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300"
                    data-aos-duration="1000">
                    <span class="subheading">Bem vindo ao lmteach</span>
                    <h1 class="mb-4">Best Online Education Expertise </h1>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there live the blind texts.</p>
                    <p>
                        <button href="#" class="btn btn-principle p-4 py-3 text-white rounded-pill" data-toggle="modal"
                            data-target="#exampleModalCenter">
                            <span>FAZER PEDIDO </span> <i class="bi bi-arrow-right-short"></i>
                        </button>
                        <button href="#" class="btn btn-outline-light p-4 py-3  rounded-pill">TRABALHOS</button>
                    </p>
                </div>
            </div>
            <!-- Section One -->
            <div class="col-lg-5 mx-auto ml-3">
                <img class="img img-fluid d-block banner-img" src="{{ asset('img/gk.png') }}" alt="Mo">
            </div>
        </div>
    </div>
    <div class="d-flex bg-white py-5">
        <div class="container-fluid row mt-5 mx-auto text-dark">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <div class="p-3 text-center">
                    <h3>Faça seu pedido</h3>
                    <p>Quer saber quais são os procedimentos para fazer o seu pedido? é muitos simples é só seguir os passos
                        e já está.</p>
                </div>
                <div>
                    <img class="img img-fluid" src="{{ asset('img/stepping.svg') }}" alt="steps">
                </div>
            </div>
            <div class="col-lg-6 shadow p-3">
                <div class="p-2 row shadow-sm m-2">
                    <div class="row justify-content-center col-lg-2">
                        <p
                            class="bg-principle text-white car-title row justify-content-center align-items-center rounded-pill">
                            1</p>
                    </div>
                    <div class="col-lg row justify-content-center">
                        <p>Faça o pedido através do formulário em nosso site</p>
                    </div>
                </div>
                <div class="py-3 text-center">
                    <i class="bi bi-arrow-down text-principle"></i>
                </div>
                <div class=" p-2 row shadow-sm m-2 mt-3">
                    <div class="row justify-content-center col-lg-2">
                        <p
                            class="bg-principle text-white car-title row justify-content-center align-items-center rounded-pill">
                            2</p>
                    </div>
                    <div class="col-lg">
                        <p>Pague 50% do custo do trabalho. Saiba mais sobre as formas de pagamento</p> <a
                            href="#mais">aqui</a>
                    </div>
                </div>
                <div class="py-3 text-center">
                    <i class="bi bi-arrow-down text-principle"></i>
                </div>
                <div class="p-2 row shadow-sm m-2 mt-3">
                    <div class="row justify-content-center col-lg-2">
                        <p
                            class="bg-principle text-white car-title row justify-content-center align-items-center rounded-pill">
                            3</p>
                    </div>
                    <div class="row align-items-center col-lg">
                        <p>Aguarde alguns dias para que nossos especialistas concluam seu pedido</p>
                    </div>
                </div>
                <div class="py-3 text-center">
                    <i class="bi bi-arrow-down text-principle"></i>
                </div>
                <div class=" p-2 row shadow-sm m-2 mt-3">
                    <div class="row justify-content-center col-lg-2">
                        <p
                            class="bg-principle text-white car-title row justify-content-center align-items-center rounded-pill">
                            4</p>
                    </div>
                    <div class="col-lg">
                        <p>Antes de receber o trabalho, você deve pagar os 50% restantes do custo do trabalho.</p>
                    </div>
                </div>
                <div class="py-3 text-center">
                    <i class="bi bi-arrow-down text-principle"></i>
                </div>
                <div class=" p-2 row shadow-sm m-2 mt-3">
                    <div class="row justify-content-center col-lg-2">
                        <p
                            class="bg-principle text-white car-title row justify-content-center align-items-center rounded-pill">
                            5</p>
                    </div>
                    <div class="col-lg">
                        <p>Resta preparar-se bem para a defesa e executá-la brilhantemente</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white py-4" id="servicos">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-7 text-center">
                    <h2 class="mb-3">Nossos Serviços</h2>
                </div>
            </div>
            <div class="row">
                <div class="p-2 col-lg-3">
                    <div class="card p-4">
                        <div class="img text-center m-2 my-4">
                            <i class="fa fa-hat-cowboy text-principle fs-1"></i>
                        </div>
                        <div class="text-center h5 text-principle">Monografia</div>
                        <div class="description text-center text-dark">
                            <small>
                                <p>Preço do trabalho a partir de: 4000MZN</p>
                                <p>Prazo de conclusão a partir de : 15 dias</p>
                                <p>Verificação antiplagiativo</p>
                            </small>
                        </div>
                        <button class="btn btn-outline-principle rounded-pill">Pedir</button>
                    </div>
                </div>
                <div class="p-2 col-lg-3 ">
                    <div class="card p-4">
                        <div class="text-center m-2 my-4 img">
                            <i class="fa fa-hat-cowboy text-principle fs-1"></i>
                        </div>
                        <div class="text-center h5 text-principle">Trabalho de curso</div>
                        <div class="description text-center">
                            <small>
                                <p>Preço do trabalho a partir de: 2000MZN</p>
                                <p>Prazo de conclusão a partir de : 10 dias</p>
                                <p>Verificação antiplagiativo</p>
                            </small>
                        </div>
                        <button class="btn btn-outline-principle rounded-pill">Pedir</button>
                    </div>
                </div>
                <div class="p-2 col-lg-3">
                    <div class="card p-4">
                        <div class="img text-center m-2 my-4">
                            <i class="fa fa-hat-cowboy text-principle fs-1"></i>
                        </div>
                        <div class="text-center h5 text-principle">Teste</div>
                        <div class="description text-center">
                            <small>
                                <p>Preço do trabalho a partir de: 200MZN</p>
                                <p>Prazo de conclusão a partir de : 1 dia</p>
                                <p>Verificação antiplagiativo</p>
                            </small>
                        </div>
                        <button class="btn btn-outline-principle rounded-pill">Pedir</button>
                    </div>
                </div>
                <div class="p-2 col-lg-3">
                    <div class="card p-4">
                        <div class="img text-center m-2 my-4">
                            <i class="fa fa-hat-cowboy text-principle fs-1"></i>
                        </div>
                        <div class="text-center text-principle h5">Trabalho de Mestrado</div>
                        <div class="description text-center">
                            <small>
                                <p>Preço do trabalho a partir de: 5000MZN</p>
                                <p>Prazo de conclusão a partir de : 30 dias</p>
                                <p>Verificação antiplagiativo</p>
                            </small>
                        </div>
                        <button class="btn btn-outline-principle rounded-pill">Pedir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white" id="contacto">
        <div class="container">
            <div class="row py-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address row">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Localização:</h4>
                        </div>

                        <div class="email row">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                        </div>

                        <div class="phone d-flex row">
                            <i class="bi bi-phone"></i>
                            <h4>Contacto:</h4>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                    required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Mensagem"
                                required></textarea>
                        </div>
                        <div class="text-center form-group mt-3">
                            <button class="btn btn-success text-white" type="submit">Enviar</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div>
    <div class="modais">
        <div class="modal bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <br>
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document"
                style="align-content: center; margin: auto;">
                <div class="modal-content card bg-white">

                    <div class="modal-header">
                        <h4 class="modal-titlefont-weight-bold" style="color: #000;" id="exampleModalCenterTitle">DEIXE
                            O SEU PEDIDO E LIGAREMOS DE VOLTA</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color: #000;">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="card p-2 bg-white" method="post" name="pedidos_trab" id="pedidos_trab"
                            enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 p-3">
                                    <select class="form-control pl-3 selecao" name="pedi_tipo" id="pedi_tipo" required>
                                        <option class="form-control" value="">Tipo de trabalho</option>
                                        <option class="form-control">Monografia</option>
                                        <option class="form-control">Trabalho de Curso</option>
                                        <option class="form-control">Trabalho de Mestrado</option>
                                        <option class="form-control">Teste</option>
                                    </select>
                                </div>

                                <div class="col-lg-6 p-3">
                                    <input type="date" name="pedi_prazo" id="pedi_prazo" class="form-control pl-3 inputs"
                                        placeholder="Prazo" required>
                                </div>

                                <div class="col-lg-6 p-3">
                                    <input type="text" name="pedi_assunto" id="pedi_assunto"
                                        class="form-control pl-3 inputs" placeholder="Assunto/Descrição (Opção №, ect)"
                                        required>
                                </div>
                                <div class="col-lg-6 p-3">
                                    <select class="form-control pl-3 selecao" name="pedi_nivel" id="pedi_nivel" required>
                                        <option class="form-control" value="">Nível acadêmico</option>
                                        <option class="form-control">Médio</option>
                                        <option class="form-control">Técnico profissional</option>
                                        <option class="form-control">Superior</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 p-3">
                                    <div class="text-center">
                                        <label for="pedi_arquivo">
                                            <i class="fa fa-folder-o"></i>Anexar Arquivo
                                        </label>
                                        <input class="arquivo" type="file" name="pedi_arquivo" id="pedi_arquivo" required
                                            style="display: none;">
                                    </div>
                                </div>
                                <div class="col-lg-6 p-3">
                                    <div class="text-center">
                                        <label for="pedi_descricao">
                                            <i class=" fa fa-comment-o" aria-hidden="true"></i> Descrição da tarefa
                                        </label>
                                        <input class="descricao" type="file" name="pedi_descricao" id="pedi_descricao"
                                            required style="display: none;">
                                    </div>
                                </div>

                                <div class="col-lg-6 p-3">
                                    {if $LOGADO == TRUE}
                                    <input type="text" name="user_name" id="user_name" class="form-control pl-3 inputs"
                                        value="{$USER_NAME}" readonly="readonly" style="background-color: #000;">
                                    {else}
                                    <input type="text" name="user_name" id="user_name" class="form-control pl-3 inputs"
                                        value="" placeholder="Seu nome">
                                    {/if}
                                </div>

                                <div class="col-lg-6 p-3">
                                    {if $LOGADO == TRUE}
                                    <input type="email" name="user_email" id="user_email" class="form-control pl-3 inputs"
                                        value="{$USER_EMAIL}" readonly="readonly" style="background-color: #000;">
                                    {else}
                                    <input type="email" name="user_email" id="user_email" class="form-control pl-3 inputs"
                                        placeholder="Seu email">
                                    {/if}
                                </div>

                                <div class="col-lg-6 p-3">
                                    <input type="number" name="user_telefone" id="user_telefone"
                                        class="form-control pl-3 inputs" placeholder="Seu numero de telefone" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" id="submeter" name="upload" class="btn col-lg-5 btn-send"
                                    value="Submeter" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>// Multi-Step Form
         $(function(){
            $('#regCliente').submit(function(e){
                e.preventDefault();
                var cli_nome = $('#cli_nome').val()
                var cli_senha = $('#cli_senha').val()
                var cli_email = $('#cli_email').val()
                //let _token = $("input[name=_token]").val()
                $.ajax({
                    url: "/addCliente",
                    type: "POST",
                    data: {
                        cli_nome = cli_nome,
                        cli_senha = cli_senha,
                        cli_email = cli_email
                    },
                    dataType: 'json',
                    success: function(response){
                        if(response.success === true ){
                            $('.messageBox').removeClass('d-none').html(response.mensagem)
                        } else{
                            $('.messageBox').removeClass('d-none').html(response.mensagem)
                        }
                        console.log(response)
                    }
                })
            })
        })


        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the crurrent tab
        
        function showTab(n) {
          // This function will display the specified tab of the form...
          var x = document.getElementsByClassName("tab");
          x[n].style.display = "block";
          //... and fix the Previous/Next buttons:
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
          } else {
            document.getElementById("prevBtn").style.display = "inline";
          }
          if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submeter";
          } else {
            document.getElementById("nextBtn").innerHTML = "Next";
          }
          //... and run a function that will display the correct step indicator:
          fixStepIndicator(n)
        }
        
        function nextPrev(n) {
          // This function will figure out which tab to display
          var x = document.getElementsByClassName("tab");
          // Hide the current tab:
          x[currentTab].style.display = "none";
          // Increase or decrease the current tab by 1:
          currentTab = currentTab + n;
          // if you have reached the end of the form...
          if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
          }
          // Otherwise, display the correct tab:
          showTab(currentTab);
        }
        
        function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("step");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace("active", "");
          }
          //... and adds the "active" class on the current step:
          x[n].className += " active";
        }
    </script>
@endsection
