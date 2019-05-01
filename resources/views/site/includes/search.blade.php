<section>
    <div class="section-content">
        <div class="container">
            <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                <h1>Encontre o seu lar ideal</h1>
                <h4>Procurando um bom imóvel, experimente nosso mecanismo de busca, nós garantimos que você encontrará o que precisa.</h4>
            </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!! Form::open(['url' => 'pesquisar', 'id' => 'form-search']) !!}
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>ID</p>
                            <input type="text" name="id" placeholder="ID...">
                        </div>
                        <div class="col-sm-6">
                            <p>Cidade</p>
                            <input type="text" name="city" placeholder="Qualquer...">
                        </div>
                    </div><!-- .row -->
                </div><!-- .col-md-6 -->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Status</p>
                            <div class="custom-select">
                                <div class="custom-select-val"></div>
                                <ul class="custom-select-list">
                                    <li class="custom-select-default" data-val="">
                                        <div class="custom-select-item-content">Qualquer...</div>
                                    </li>
                                    <li data-val="1">
                                        <div class="custom-select-item-content">Locação</div>
                                    </li>
                                    <li data-val="2">
                                        <div class="custom-select-item-content">Venda</div>
                                    </li>
                                </ul>
                                <input type="hidden" name="purpose">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <p>Tipo</p>
                            <div class="custom-select">
                                <div class="custom-select-val"></div>
                                <ul class="custom-select-list">
                                    <li class="custom-select-default" data-val="">
                                        <div class="custom-select-item-content">Qualquer...</div>
                                    </li>
                                    <li data-val="1">
                                        <div class="custom-select-item-content">Casa</div>
                                    </li>
                                    <li data-val="2">
                                        <div class="custom-select-item-content">Apartamento</div>
                                    </li>
                                    <li data-val="3">
                                        <div class="custom-select-item-content">Terreno</div>
                                    </li>
                                    <li data-val="4">
                                        <div class="custom-select-item-content">Flat</div>
                                    </li>
                                </ul>
                                <input type="hidden" name="type">
                            </div>
                        </div>
                    </div><!-- .row -->
                </div><!-- .col-md-6 -->
            </div><!-- .row -->

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Quartos</p>
                            <div class="custom-select">
                                <div class="custom-select-val"></div>
                                <ul class="custom-select-list stroll-list cards">
                                    <li class="custom-select-default" data-val="">
                                        <div class="custom-select-item-content">Qualquer...</div>
                                    </li>
                                    <li data-val="1">
                                        <div class="custom-select-item-content">Um</div>
                                    </li>
                                    <li data-val="2">
                                        <div class="custom-select-item-content">Dois</div>
                                    </li>
                                    <li data-val="3">
                                        <div class="custom-select-item-content">Três</div>
                                    </li>
                                    <li data-val="4">
                                        <div class="custom-select-item-content">Quatro</div>
                                    </li>
                                    <li data-val="5">
                                        <div class="custom-select-item-content">Cinco</div>
                                    </li>
                                    <li data-val="6">
                                        <div class="custom-select-item-content">Seis</div>
                                    </li>
                                    <li data-val="7">
                                        <div class="custom-select-item-content">Sete</div>
                                    </li>
                                    <li data-val="8">
                                        <div class="custom-select-item-content">Oito</div>
                                    </li>
                                    <li data-val="9">
                                        <div class="custom-select-item-content">Nove</div>
                                    </li>
                                    <li data-val="10">
                                        <div class="custom-select-item-content">Dez</div>
                                    </li>
                                    <li data-val="11">
                                        <div class="custom-select-item-content">Onze</div>
                                    </li>
                                    <li data-val="12">
                                        <div class="custom-select-item-content">Doze</div>
                                    </li>
                                </ul>
                                <input type="hidden" name="bedrooms">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <p>Banheiros</p>
                            <div class="custom-select">
                                <div class="custom-select-val"></div>
                                <ul class="custom-select-list stroll-list cards">
                                    <li class="custom-select-default" data-val="">
                                        <div class="custom-select-item-content">Qualquer...</div>
                                    </li>
                                    <li data-val="1">
                                        <div class="custom-select-item-content">Um</div>
                                    </li>
                                    <li data-val="2">
                                        <div class="custom-select-item-content">Dois</div>
                                    </li>
                                    <li data-val="3">
                                        <div class="custom-select-item-content">Três</div>
                                    </li>
                                    <li data-val="4">
                                        <div class="custom-select-item-content">Quatro</div>
                                    </li>
                                    <li data-val="5">
                                        <div class="custom-select-item-content">Cinco</div>
                                    </li>
                                    <li data-val="6">
                                        <div class="custom-select-item-content">Seis</div>
                                    </li>
                                    <li data-val="7">
                                        <div class="custom-select-item-content">Sete</div>
                                    </li>
                                    <li data-val="8">
                                        <div class="custom-select-item-content">Oito</div>
                                    </li>
                                    <li data-val="9">
                                        <div class="custom-select-item-content">Nove</div>
                                    </li>
                                    <li data-val="10">
                                        <div class="custom-select-item-content">Dez</div>
                                    </li>
                                    <li data-val="11">
                                        <div class="custom-select-item-content">Onze</div>
                                    </li>
                                    <li data-val="12">
                                        <div class="custom-select-item-content">Doze</div>
                                    </li>
                                </ul>
                                <input type="hidden" name="bathrooms">
                            </div>
                        </div>
                    </div><!-- .row -->
                </div><!-- .col-md-6 -->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Valor Mínimo</p>
                            <input type="text" name="min_price" placeholder="Qualquer...">
                        </div>
                        <div class="col-sm-6">
                            <p>Valor máximo</p>
                            <input type="text" name="max_price" placeholder="Qualquer...">
                        </div>
                    </div><!-- .row -->
                </div><!-- .col-md-6 -->
            </div><!-- .row -->

            <p class="text-center onscroll-animate" data-animation="flipInY">
                <button type="submit" id="form-search-submit" class="button-void button-long">
                    Pesquisar <i class="fa fa-search"></i>
                </button>
            </p>
            {!! Form::close() !!}

        </div><!-- .container -->
    </div><!-- .section-content -->
</section>