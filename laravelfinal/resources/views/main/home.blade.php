@extends('layouts.app')

@section('content')
<div>
    <div class="container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="{{ asset('img/cam.jpg') }}" alt="Bienvenido"
                  height="100" width="500">
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="item">
                  <img src="{{ asset('img/red.jpg') }}" alt="Bienvenido"
                  height="100" width="880">
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="item">
                  <img src="{{ asset('img/ener.jpg') }}" alt="Bienvenido"
                  height="100" width="780">
                  <div class="carousel-caption">
                  </div>
                </div>
            </div>

              <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
</div>
   <div class="new-products">
        <div class="container">
            <h3>Productos Populares</h3>
            <div class="agileinfo_new_products_grids">
                <div class="col-md-3 agileinfo_new_products_grid">
                    <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                        <div class="hs-wrapper hs-wrapper1">
                            <img src="images/spy.jpg" alt=" " class="img-responsive" />

                            <div class="w3_hs_bottom w3_hs_bottom_sub">
                                <ul>
                                    <li>
                                        <a href="/products/25" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5><a href="single.html">Camara espia</a></h5>
                        <div class="simpleCart_shelfItem">
                            <p><span>$520</span> <i class="item_price">$500</i></p>

                               <form action="{{url('/in_shopping_carts')}}" 
                               method="POST" class="inline-block">
                              {{csrf_field()}}
                    <input type="hidden" name="product_id"  value="44">
          <input type="submit" value="Agregar al carrito" class="btn btn-info"> 
        </form>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 agileinfo_new_products_grid">
                    <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                        <div class="hs-wrapper hs-wrapper1">
                            <img src="images/mini.jpg" alt=" " class="img-responsive" />

                            <div class="w3_hs_bottom w3_hs_bottom_sub">
                                <ul>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5><a href="single.html">Camara mini</a></h5>
                        <div class="simpleCart_shelfItem">
                            <p><span>$380</span> <i class="item_price">$370</i></p>
                              <form action="{{url('/in_shopping_carts')}}" 
                               method="POST" class="inline-block">
                              {{csrf_field()}}
                    <input type="hidden" name="product_id"  value="45">
          <input type="submit" value="Agregar al carrito" class="btn btn-info"> 
        </form>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 agileinfo_new_products_grid">
                    <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                        <div class="hs-wrapper hs-wrapper1">
                            <img src="images/peluche.jpg" alt=" " class="img-responsive" />

                            <div class="w3_hs_bottom w3_hs_bottom_sub">
                                <ul>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5><a href="single.html">Peluche camara</a></h5>
                        <div class="simpleCart_shelfItem">
                            <p><span>$150</span> <i class="item_price">$100</i></p>
                              <form action="{{url('/in_shopping_carts')}}" 
                               method="POST" class="inline-block">
                              {{csrf_field()}}
                    <input type="hidden" name="product_id"  value="46">
          <input type="submit" value="Agregar al carrito" class="btn btn-info"> 
        </form>
                            </form>
                        </div>  
                    </div>
                </div>
                <div class="col-md-3 agileinfo_new_products_grid">
                    <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                        <div class="hs-wrapper hs-wrapper1">
                            <img src="images/red.jpg" alt=" " class="img-responsive" />
                            <div class="w3_hs_bottom w3_hs_bottom_sub">
                                <ul>
                                    <li>
                                        <a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5><a href="single.html">Antena red</a></h5>
                        <div class="simpleCart_shelfItem">
                            <p><span>$280</span> <i class="item_price">$250</i></p>
                              <form action="{{url('/in_shopping_carts')}}" 
                               method="POST" class="inline-block">
                              {{csrf_field()}}
                    <input type="hidden" name="product_id"  value="47">
          <input type="submit" value="Agregar al carrito" class="btn btn-info"> 
        </form>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection