<section>
    <div class="section-content">
        <div class="container">
            <div class="section-header onscroll-animate" data-animation="fadeInLeft">
                <h1>Encontre o seu lar ideal</h1>
                <h4>Procurando um bom imóvel, experimente nosso mecanismo de busca, nós garantimos que você encontrará o que precisa.</h4>
            </div>
            {!! Form::open(['url' => 'pesquisar', 'id' => 'form-search']) !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>ID</p>
                                <input type="text" placeholder="ID...">
                            </div>
                            <div class="col-sm-6">
                                <p>Cidade</p>
                                <input type="text" placeholder="Qualquer...">
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
                                        <li data-val="Locação">
                                            <div class="custom-select-item-content">Locação</div>
                                        </li>
                                        <li data-val="Venda">
                                            <div class="custom-select-item-content">Venda</div>
                                        </li>
                                    </ul>
                                    <input type="hidden">
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
                                        <li data-val="House">
                                            <div class="custom-select-item-content">Casa</div>
                                        </li>
                                        <li data-val="Flat">
                                            <div class="custom-select-item-content">Flat</div>
                                        </li>
                                        <li data-val="Mansion">
                                            <div class="custom-select-item-content">Mansion</div>
                                        </li>
                                    </ul>
                                    <input type="hidden">
                                </div>
                            </div>
                        </div><!-- .row -->
                    </div><!-- .col-md-6 -->
                </div><!-- .row -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <p>Quartos</p>
                                <div class="custom-select">
                                    <div class="custom-select-val"></div>
                                    <ul class="custom-select-list stroll-list cards">
                                        <li class="custom-select-default" data-val="">
                                            <div class="custom-select-item-content">Qualquer...</div>
                                        </li>
                                        <li data-val="one">
                                            <div class="custom-select-item-content">One</div>
                                        </li>
                                        <li data-val="two">
                                            <div class="custom-select-item-content">Two</div>
                                        </li>
                                        <li data-val="three">
                                            <div class="custom-select-item-content">Three</div>
                                        </li>
                                        <li data-val="four">
                                            <div class="custom-select-item-content">Four</div>
                                        </li>
                                        <li data-val="five">
                                            <div class="custom-select-item-content">Five</div>
                                        </li>
                                        <li data-val="six">
                                            <div class="custom-select-item-content">Six</div>
                                        </li>
                                        <li data-val="seven">
                                            <div class="custom-select-item-content">Seven</div>
                                        </li>
                                        <li data-val="eight">
                                            <div class="custom-select-item-content">Eight</div>
                                        </li>
                                        <li data-val="nine">
                                            <div class="custom-select-item-content">Nine</div>
                                        </li>
                                        <li data-val="ten">
                                            <div class="custom-select-item-content">Ten</div>
                                        </li>
                                        <li data-val="eleven">
                                            <div class="custom-select-item-content">Eleven</div>
                                        </li>
                                        <li data-val="twelve">
                                            <div class="custom-select-item-content">Twelve</div>
                                        </li>
                                    </ul>
                                    <input type="hidden">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <p>Banheiros</p>
                                <div class="custom-select">
                                    <div class="custom-select-val"></div>
                                    <ul class="custom-select-list stroll-list cards">
                                        <li class="custom-select-default" data-val="">
                                            <div class="custom-select-item-content">Qualquer...</div>
                                        </li>
                                        <li data-val="one">
                                            <div class="custom-select-item-content">One</div>
                                        </li>
                                        <li data-val="two">
                                            <div class="custom-select-item-content">Two</div>
                                        </li>
                                        <li data-val="three">
                                            <div class="custom-select-item-content">Three</div>
                                        </li>
                                        <li data-val="four">
                                            <div class="custom-select-item-content">Four</div>
                                        </li>
                                        <li data-val="five">
                                            <div class="custom-select-item-content">Five</div>
                                        </li>
                                        <li data-val="six">
                                            <div class="custom-select-item-content">Six</div>
                                        </li>
                                        <li data-val="seven">
                                            <div class="custom-select-item-content">Seven</div>
                                        </li>
                                        <li data-val="eight">
                                            <div class="custom-select-item-content">Eight</div>
                                        </li>
                                        <li data-val="nine">
                                            <div class="custom-select-item-content">Nine</div>
                                        </li>
                                        <li data-val="ten">
                                            <div class="custom-select-item-content">Ten</div>
                                        </li>
                                        <li data-val="eleven">
                                            <div class="custom-select-item-content">Eleven</div>
                                        </li>
                                        <li data-val="twelve">
                                            <div class="custom-select-item-content">Twelve</div>
                                        </li>
                                    </ul>
                                    <input type="hidden">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <p>Minimum Price</p>
                                <input type="text" placeholder="Qualquer...">
                            </div>
                        </div><!-- .row -->
                    </div><!-- .col-md-6 -->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <p>Maximum Price</p>
                                <input type="text" placeholder="Qualquer...">
                            </div>
                            <div class="col-sm-4">
                                <p>Minimum Area (sq ft)</p>
                                <input type="text" placeholder="Qualquer...">
                            </div>
                            <div class="col-sm-4">
                                <p>Maximum Area (sq ft)</p>
                                <input type="text" placeholder="Qualquer...">
                            </div>
                        </div>
                    </div><!-- .col-md-6 -->
                </div><!-- .row -->
            {!! Form::close() !!}

            <p class="text-center onscroll-animate" data-animation="flipInY">
                <a href="#" id="form-search-submit" class="button-void button-long">Pesquisar <i class="fa fa-search"></i></a>
            </p>
        </div><!-- .container -->
    </div><!-- .section-content -->
</section>