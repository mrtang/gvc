@section('content')
<div class="page library-page feature-page">
    <div class="section section-6">
        <div class="bg-image-wrapper">
            <img src="{{Asset('assets/frontendV3/images/shop.jpg')}}" alt="" class="bg only-pc">
        </div>
        <div class="section-main-content">
            <div class="container">
                <div class="content">
                    <h1 class="text-center"><span class="">G-SHOP</h1>
                    <div class="sidebar-products clearfix">
                          <div class="row">
                              <div class="col-md-4">
                                  <div class="item">
                                      <div class="item-img-left">
                                          <a href="shop-item.html"><img class="item-image" src="{{Asset('assets/frontendV3/images/shop/600002.png')}}" alt="Some Shoes in Animal with Cut Out"></a>
                                      </div>
                                      <div class="item-right">
                                          <h2 class="title"><a href="shop-item.html">Some Shoes in Anim</a></h2>
                                          <div class="summary">Bạn sẽ nhận được tất cả các vật phẩm bên trong.</div>
                                          <div class="price">150.000.000</div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="item">
                                      <div class="item-img-left">
                                          <a href="shop-item.html"><img class="item-image" src="{{Asset('assets/frontendV3/images/shop/600003.png')}}" alt="Some Shoes in Animal with Cut Out"></a>
                                      </div>
                                      <div class="item-right">
                                          <h2><a href="shop-item.html">Some Shoes in Anim</a></h2>
                                          <div class="summary">Bạn sẽ nhận được tất cả các vật phẩm bên trong.</div>
                                          <div class="price">150.000.000</div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="item" onmouseover="tooltip.pop(this, '#tip3', {position:0, cssClass:'no-padding'})">
                                      <div class="item-img-left">
                                          <a href="shop-item.html"><img class="item-image" src="{{Asset('assets/frontendV3/images/shop/600002.png')}}" alt="Some Shoes in Animal with Cut Out"></a>
                                      </div>
                                      <div class="item-right">
                                          <h2><a href="shop-item.html">Some Shoes in Anim</a></h2>
                                          <div class="summary">Bạn sẽ nhận được tất cả các vật phẩm bên trong.</div>
                                          <div class="price">150.000.000</div>
                                      </div>
                                  </div>
                                  <div style="display:none;">
            <div id="tip3" style="width: 150px;height: 90px;">
                <img src="src/tooltip-head.jpg" />
                <div style="padding:20px;">
                    <h6>Easy to Config</h6>
                    <p>The tooltip can display</p>
                </div>
            </div>
        </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="item">
                                      <div class="item-img-left">
                                          <a href="shop-item.html"><img class="item-image" src="{{Asset('assets/frontendV3/images/shop/600002.png')}}" alt="Some Shoes in Animal with Cut Out"></a>
                                      </div>
                                      <div class="item-right">
                                          <h2 class="title"><a href="shop-item.html">Some Shoes in Anim</a></h2>
                                          <div class="summary">Bạn sẽ nhận được tất cả các vật phẩm bên trong.</div>
                                          <div class="price">150.000.000</div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="item">
                                      <div class="item-img-left">
                                          <a href="shop-item.html"><img class="item-image" src="{{Asset('assets/frontendV3/images/shop/600003.png')}}" alt="Some Shoes in Animal with Cut Out"></a>
                                      </div>
                                      <div class="item-right">
                                          <h2><a href="shop-item.html">Some Shoes in Anim</a></h2>
                                          <div class="summary">Bạn sẽ nhận được tất cả các vật phẩm bên trong.</div>
                                          <div class="price">150.000.000</div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="item showTip show6">
                                      <div class="item-img-left">
                                          <a href="shop-item.html"><img class="item-image" src="{{Asset('assets/frontendV3/images/shop/600002.png')}}" alt="Some Shoes in Animal with Cut Out"></a>
                                      </div>
                                      <div class="item-right">
                                          <h2><a href="shop-item.html">Some Shoes in Anim</a></h2>
                                          <div class="summary">Bạn sẽ nhận được tất cả các vật phẩm bên trong.</div>
                                          <div class="price">150.000.000</div>
                                      </div>
                                  </div>
                                  <div id="show6" class="tipContent">
                                      <div style="background-color: #000;width: 150px;border-radius: 5px;border: 1px solid #feba01;font-size: 12px;color: #feba01;opacity: 0.8;">
                                          <h3 class="text-center">Teest</h3>
                                          <ul class="tipContentList">
                                              <li>Lots of important stuff...</li>
                                              <li>Info you would want search engines to find</li>
                                              <li>Fully accessible, even with no JavaScript</li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>

                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</div>
@stop
@section('scripts')
    {{ HTML::script('assets/js/libs/dw_tooltip_c.js') }}
    {{ HTML::script('assets/js/elements/mouse.js') }}
@stop
