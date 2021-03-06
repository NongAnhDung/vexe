  @extends('layouts.masterTicket')
  @section('contents')
  <div id="hl">
      <div class="hl-1-transport">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <ul class="list-inline">
                          <li>
                              <a href="/">Vé xe giá rẻ</a>
                          </li>
                          <li>
                              <a href="/">Xe khách Hoàng Long</a>
                          </li>
                      </ul>
                  </div>
              </div>
              <!--End#row-->
          </div>
          <!--End#container-->
      </div>
      <!--End#hl-1-transport-->
      <div class="main-hl-tran">
          <div class="container">
              <div class="row">
                  <div class="col-md-4 col-sm-12 hidden-sm hidden-xs col-xs-12 left-colunm">
                      <h1 class="mt0 hidden-xs hidden-sm operator-name">
                          <b>B </b>
                          <div class="stars">
                              <select class="example">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>

                    </h1>
                    <table class="table table-bordered table-rate">
                      <tbody>
                          <tr>
                              <td class="text-center">
                                  <h5><b>4.0</b> </h5>
                                  <p id="lnk-view-rating">
                                      <a class="text-black" href="#">
                                          <small class="review-description">183 Đánh giá</small>
                                      </a>
                                  </p>
                              </td>
                              <td class="text-center bg-gray">
                                  <h5><b>3.9</b></h5>
                                  <p><small class="review-description">Chất lượng xe</small></p>
                              </td>
                              <td class="text-center bg-gray">
                                  <h5><b>3.8</b></h5>
                                  <p><small class="review-description">Đúng giờ</small></p>
                              </td>
                              <td class="text-center bg-gray">
                                  <h5><b>3.7</b></h5>
                                  <p><small class="review-description">Phục vụ</small></p>
                              </td>
                          </tr>
                      </tbody>
                  </table>
                  <p style="margin-top:20px;"><small class="pt10" style="font-size: 16px;"><i class="glyphicon glyphicon-map-marker"></i><b>Trụ sở:</b> 05 Phạm Ngũ Lão, Phường Lương Khánh Thiện, Ngô Quyền, TP. Hải Phòng</small></p>
                  <div>
                      <div style="padding-left: 0px">
                          <div class="jcarousel-main1">
                              <div class="jcarousel-wrapper">
                                  <div class="jcarousel">
                                      <ul>
                                      @foreach($viewdata['img']['images'] as $st)
                                          <li><img src="/../{{$st['url']}}" width="360" height="216" alt=""></li>
                                      @endforeach
                                      </ul>
                                  </div>
                                  <a href="#" class="jcarousel-control-prev inactive" data-jcarouselcontrol="true" style=" text-decoration: none;"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                                  <a href="#" class="jcarousel-control-next" data-jcarouselcontrol="true" style="text-decoration: none;">
                                      <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                  </div>
                              </div>
                              <h2 style="margin-top:20px;margin-bottom:0"><small class="pt10" style="font-size: 16px;"><b>Xe khách Hoàng Long :</b></small></h2>
                              <div class="readmore" data-readmore="" aria-expanded="false">
                                  <p style="font-size:14px">
                                      Hãng xe Hoàng Long hay còn gọi là Hoàng Long Asia hoặc Hoàng Long Bus là một trong những thương hiệu xe chất lượng cao hàng đầu Việt Nam. Phục vụ hàng chục triệu hành khách Việt Nam và quốc tế trong suốt 16 năm hoạt động, xe khách Hoàng Long đã đạt giải thưởng Sao Vàng đất Việt 3 lần liên tiếp. Xe giường nằm cao cấp Hoàng Long liên tục cải tiến với rất nhiều tiện ích như TV, máy lạnh, khăn lạnh, nhà vệ sinh,... giúp hành khách trên xe luôn cảm giác thoải mái. Tất cả các lái phụ xe của nhà xe Hoàng Long đều được học giao tiếp du lịch để luôn đối xử ân cần và lịch sự đối với hành khách. Nhờ những cố gắng không ngừng, danh tiếng của Hoàng Long lan rộng khắp Việt Nam và quốc tế. Hoàng Long - Không ngừng đổi mới, không ngừng nâng cao chất lượng phục vụ.

                                  </p>

                                  <span > <a  data-readmore-toggle="readmore" aria-controls="readmore"><i class="fa fa-plus"></i> <a/> </span>

                              </div>
                              <!--End#readmore-->


                          </div>
                      </div>
                  </div>
                  <!--End#left-colunm-->

                  <div class="col-md-8 bus-des col-xs-12 col-sm-12 right-colunm">
                      <div class="row">
                          <div class="col-md-12 home-search-ticket-panel">
                              <div class="row">
                                  <div class="col-md-12 col-xs-12 col-sm-12">
                                      <h2 class="text-vxr-ads">
                                          So sánh giá vé lịch trình xe Hoàng Long với các hãng xe khác cùng tuyến đường
                                      </h2>
                                  </div>
                              </div>
                              <!--End#row-->
                              <form class="searchForm col-md-12" action="{{route('station.search')}}"  enctype="multipart/form-data" method="post">
                                {{ csrf_field() }}
                                  <div class="row">
                                      <div class="location-select-row form-inline col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group searchLeft col-md-5 col-sm-12 col-xs-12">
                                              <input id="departPlace" name="departPlace" onmouseup="return false;" type="text" class="input-txt place ui-autocomplete-input" placeholder="Gõ vào tỉnh đi" accesskey="1" tabindex="1" autocomplete="off">
                                          </div>
                                          <div class="form-group switchButton-container hidden-xs hidden-sm col-md-2">
                 
                                                  <img class="switch-icon" src="{{url('images/icon-way.jpg')}}">
                                              </a>
                                          </div>
                                          <div class="form-group searchRight col-md-5 col-sm-12 col-xs-12">
                                              <input id="destination" name="destination" onmouseup="return false;" type="text" class="input-txt place ui-autocomplete-input" placeholder="Gõ vào tỉnh đến" accesskey="2" tabindex="2" autocomplete="off">
                                          </div>
                                      </div>
                                      <!--Endlocation-select-row-->
                                      <div class="date-select-row col-md-12 col-xs-12 form-inline">
                                          <div class="form-group col-md-5 col-sm-12 col-xs-12  pl0 select-date-container">
                                          
                                          <div class='input-group date' id='departDate'>
                                              <input type='' id="departDate" name="date_start"   placeholder="Chọn ngày đi" />
                                              <span class="input-group-addon ">
                                                  <span class="glyphicon glyphicon-calendar"></span>
                                              </span>
                                          </div><!--End#departDate-->
                                      </div>
                                  </div>
                                  <!--End#date-select-row-->
                                  <div class="form-inline col-md-6 col-md-offset-6 col-xs-12 clearfix search-submit-container">
                                      <button id="searchSubmit"  type="submit" class="submit-btn search-btn fr uppercase" tabindex="6">
                                          Tìm Vé Xe Rẻ
                                      </button>
                                  </div>
                                  <!--End#search-submit-container-->
                              </div>
                              <!--End#row-->
                          </form>
                      </div>
                      <!--End#home-search-ticket-panel-->
                  </div>
                  <!--End#row-->
                  <div class="row ">
                      <div class="col-md-12">
                          <h2 style="margin-bottom:0;margin-top:20px;">Đặt vé nhanh các tuyến đường của xe Hoàng Long</h2>
                      </div>
                      <div class="choose-bus-hl col-md-12 ">
                          <div class="row datve-hl title-bold">
                              <div class="col-md-3 col-sm-3 col-xs-3">
                                  <p> <strong> Tuyến đường </strong></p>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3 ">
                                  <p> <strong> Hãng xe </strong></p>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3 ">
                                  <p><strong> Giá vé</strong></p>
                              </div>
                          </div>
                          <!--End#row-->
                        @foreach($viewdata['path'] as $pa)
                          <div class="row datve-hl bus-gray">
                         
                              <div class="col-md-3 col-sm-3 col-xs-3 ">
                                
                                  <a href="#"> {{$pa->slg}}</a>
                                 
                              </div>
                             

                              <div class="col-md-3 col-sm-3 col-xs-3 ">
                                  <p> {{$pa->brand}} </p>
                              </div>
                              <div class="col-md-3 col-sm-3 col-xs-3 ">
                                  <p> {{$pa->ticket_fare}}<sup>đ</sup></p>
                              </div>

                              <div class="col-md-3 col-sm-3 col-xs-3  ">

                                <input type="text" class="ui-datepicker-trigger selectDate selectDate datetimepicker4 " name="startDate" style="
                                position: absolute;
                                left: 0;
                                z-index: 9;
                                opacity: 0;
                                cursor: pointer;
                                ">
                                <button type="button" class="ui-datepicker-trigger selectDate  " >Chọn ngày</button>

                            </div>
                        </div>
                        @endforeach
                        <!--End#row-->
       </div>
       <!--End#choose-bus-hl-->
   </div>
   <!--End#row-->
  </div>
  <!--End#right-colunm-->
  </div>
  <!--End#row-->
  </div>
  <!--End#container-->
  </div>
  <!--End#main-hl-tran-->
  <div class="bus-hl-content">
      <div class="container">
          <div class="row">
              <ul class="nav nav-tabs hidden-xs hidden-sm">
                  <li rel="tab1" class="active col-md-2 col-sm-3  col-xs-3 "><a>Bảng giá</a></li>
                  <li rel="tab2" class="col-md-2 col-xs-3 col-sm-3 "><a>Hình ảnh</a></li>
                  <li rel="" class="col-md-3 col-xs-3 col-sm-3 hidden-sm hidden-md hidden-lg"><a href="#">DT - DC</a></li>
                  <li rel="tab3" class="col-md-2 col-xs-3 col-sm-3 "><a>Đánh giá</a></li>
                  <li rel="tab4" class="col-md-3 col-sm-3  col-xs-3  hidden-xs"><a>Số điện thoại - địa chỉ</a></li>
                  <li rel="tab5" class="col-md-3 col-sm-3  col-xs-3 hidden-xs"><a>Vé xe Tết 2018</a></li>
              </ul>
              <div class="tab-container">
                  <div id ="tab1" class="tab-content hidden-sm hidden-xs">
                      <div class="tab-pane active" id="banggia">
                          <div class="row">
                              <div class="col-md-12">
                                  <h3 class="text-left operator-title">
                                      <b>
                                          Bảng giá vé xe xe  Hoàng Long mới nhất Tháng 6 năm 2017
                                      </b>
                                  </h3>
                              </div>
                          </div>
                          <!--End#row-->
                          <div class="row">
                              <div class="col-md-6 col-sm-10 col-xs-12">
                                  <div class="form-group">
                                      <label class="col-sm-3  col-md-3 col-xs-12  control-label label-vxr pl0-xs hidden-xs">Chọn nơi đi:</label>
                                      <div class="col-sm-5 col-md-5 col-xs-12 pl0-xs">
                                          <select class="form-control form-control-vxr no-radius state-filter">
                                              <option value="">Bấm vào để chọn </option>
                                              <option value="2">Bà Rịa-Vũng Tàu</option>
                                              <option value="3">Bắc Giang</option>
                                              <option value="6">Bắc Ninh</option>
                                              <option value="8">Bình Định</option>
                                              <option value="11">Bình Thuận</option>
                                              <option value="13">Cần Thơ</option>
                                              <option value="15">Đà Nẵng</option>
                                              <option value="19">Đồng Nai</option>
                                              <option value="23">Hà Nam</option>
                                              <option value="24">Hà Nội</option>
                                              <option value="25">Hà Tĩnh</option>
                                              <option value="26">Hải Dương</option>
                                              <option value="27">Hải Phòng</option>
                                              <option value="31">Hưng Yên</option>
                                              <option value="32">Khánh Hòa</option>
                                              <option value="37">Lạng Sơn</option>
                                              <option value="39">Long An</option>
                                              <option value="40">Nam Định</option>
                                              <option value="42">Ninh Bình</option>
                                              <option value="43">Ninh Thuận</option>
                                              <option value="41">Nghệ An</option>
                                              <option value="45">Phú Yên</option>
                                              <option value="46">Quảng Bình</option>
                                              <option value="47">Quảng Nam</option>
                                              <option value="49">Quảng Ninh</option>
                                              <option value="48">Quảng Ngãi</option>
                                              <option value="50">Quảng Trị</option>
                                              <option value="29">Sài Gòn</option>
                                              <option value="58">Tiền Giang</option>
                                              <option value="54">Thái Bình</option>
                                              <option value="55">Thái Nguyên</option>
                                              <option value="56">Thanh Hóa</option>
                                              <option value="57">Thừa Thiên-Huế</option>
                                              <option value="61">Vĩnh Long</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!--End#row-->
                          <div class="row">
                              <div class="col-md-12 col-xs-12 fare-table-wrapper">
                                  <div class="row datve-hl">
                                      <div class="col-md-2">
                                          <p><strong> Tuyến đường </strong> </p>
                                      </div>
                                      <!--End#col-md-2-->
                                      <div class="col-md-3">
                                          <p><strong> Hãng xe </strong> </p>
                                      </div>
                                      <!--End#col-md-3-->
                                      <div class="col-md-2">
                                          <p><strong> Loại xe </strong> </p>
                                      </div>
                                      <!--End#col-md-2-->
                                      <div class="col-md-2">
                                          <p><strong> Số chuyến </strong> </p>
                                      </div>
                                      <!--End#col-md-2-->
                                      <div class="col-md-1">
                                          <p><strong> Giá vé </strong> </p>
                                      </div>
                                      <!--End#col-md-2-->
                                      <div class="col-md-2">
                                      </div>
                                      <!--End#col-md-2-->
                                  </div>
                                  <!--End#row-->
                                  <div class="row datve-hl bus-gray">
                                      <div class="col-md-2">
                                          <a href="#"> Lê chân đi Hà Nội</a>
                                      </div>
                                      <!--End#col-md-2-->
                                      <div class="col-md-3">
                                          <p>Xe Hoàng Long tuyến Lê Chân-Hà Nội </p>
                                      </div>
                                      <!--End#col-md-3-->
                                      <div class="col-md-2">
                                          <p>Ghế ngồi 45 chỗ</p>
                                      </div>
                                      <!--End#col-md-2-->
                                      <div class="col-md-2">
                                          <p> 18 chuyến/ngày </p>
                                      </div>
                                      <!--End#col-md-2-->
                                      <div class="col-md-1">
                                          <p> 90.000<sup>đ</sup></p>
                                      </div>
                                      <!--End#col-md-2-->
                                      <div class="col-md-2">
                                        <input type="text" class="ui-datepicker-trigger selectDate selectDate datetimepicker4 " name="startDate" style="
                                        position: absolute;
                                        left: 0;
                                        z-index: 9;
                                        opacity: 0;
                                        cursor: pointer;
                                        ">
                                        <button type="button" class="ui-datepicker-trigger">Chọn ngày</button>
                                    </div>
                                    <!--End#col-md-2-->
                                </div>
                                <!--End#row-->
                                <div class="row datve-hl bus-white ">
                                  <div class="col-md-2">
                                      <a href="#"> Cát Bà đi Hà Nội</a>
                                  </div>
                                  <!--End#col-md-2-->
                                  <div class="col-md-3">
                                      <p>Xe Hoàng Long tuyến Cát Bà-Hà Nội </p>
                                  </div>
                                  <!--End#col-md-3-->
                                  <div class="col-md-2">
                                      <p>Ghế ngồi 45 chỗ</p>
                                  </div>
                                  <!--End#col-md-2-->
                                  <div class="col-md-2">
                                      <p> 4 chuyến/ngày </p>
                                  </div>
                                  <!--End#col-md-2-->
                                  <div class="col-md-1">
                                      <p> 250.000<sup>đ</sup></p>
                                  </div>
                                  <!--End#col-md-2-->
                                  <div class="col-md-2">
                                   <input type="text" class="ui-datepicker-trigger selectDate selectDate datetimepicker4 " name="startDate" style="
                                   position: absolute;
                                   left: 0;
                                   z-index: 9;
                                   opacity: 0;
                                   cursor: pointer;
                                   ">
                                   <button type="button" class="ui-datepicker-trigger">Chọn ngày</button>
                               </div>
                               <!--End#col-md-2-->
                           </div>
                           <!--End#row-->
                           <div class="row datve-hl bus-gray ">
                              <div class="col-md-2">
                                  <a href="#">Hà Nội đi Cát Bà</a>
                              </div>
                              <!--End#col-md-2-->
                              <div class="col-md-3">
                                  <p>Xe Hoàng Long tuyến Hà Nội-Cát Bà </p>
                              </div>
                              <!--End#col-md-3-->
                              <div class="col-md-2">
                                  <p>Ghế ngồi 45 chỗ</p>
                              </div>
                              <!--End#col-md-2-->
                              <div class="col-md-2">
                                  <p> 4 chuyến/ngày </p>
                              </div>
                              <!--End#col-md-2-->
                              <div class="col-md-1">
                                  <p> 270.000<sup>đ</sup></p>
                              </div>
                              <!--End#col-md-2-->
                              <div class="col-md-2">
                                  <input type="text" class="ui-datepicker-trigger selectDate selectDate datetimepicker4 " name="startDate" style="
                                  position: absolute;
                                  left: 0;
                                  z-index: 9;
                                  opacity: 0;
                                  cursor: pointer;
                                  ">
                                  <button type="button" class="ui-datepicker-trigger">Chọn ngày</button>
                              </div>
                              <!--End#col-md-2-->
                          </div>
                          <!--End#row-->
                          <div class="row datve-hl bus-white ">
                              <div class="col-md-2">
                                  <a href="#"> Sài Gòn đi Cẩm Phả</a>
                              </div>
                              <!--End#col-md-2-->
                              <div class="col-md-3">
                                  <p>Xe Hoàng Long tuyến Sài Gòn-Cẩm Phả </p>
                              </div>
                              <!--End#col-md-3-->
                              <div class="col-md-2">
                                  <p>Ghế nằm 39 chỗ</p>
                              </div>
                              <!--End#col-md-2-->
                              <div class="col-md-2">
                                  <p> 2 chuyến/ngày </p>
                              </div>
                              <!--End#col-md-2-->
                              <div class="col-md-1">
                                  <p> 900.000<sup>đ</sup></p>
                              </div>
                              <!--End#col-md-2-->
                              <div class="col-md-2">
                               <input type="text" class="ui-datepicker-trigger selectDate selectDate datetimepicker4 " name="startDate" style="
                               position: absolute;
                               left: 0;
                               z-index: 9;
                               opacity: 0;
                               cursor: pointer;
                               ">
                               <button type="button" class="ui-datepicker-trigger">Chọn ngày</button>
                           </div>
                           <!--End#col-md-2-->
                       </div>
                       <!--End#row-->
                       <div class="row datve-hl bus-gray ">
                          <div class="col-md-2">
                              <a href="#"> Lê chân đi Sài Gòn</a>
                          </div>
                          <!--End#col-md-2-->
                          <div class="col-md-3">
                              <p>Xe Hoàng Long tuyến Lê Chân-Sài Gòn </p>
                          </div>
                          <!--End#col-md-3-->
                          <div class="col-md-2">
                              <p>Giường nằm 39 chỗ</p>
                          </div>
                          <!--End#col-md-2-->
                          <div class="col-md-2">
                              <p> 2 chuyến/ngày </p>
                          </div>
                          <!--End#col-md-2-->
                          <div class="col-md-1">
                              <p> 950.000<sup>đ</sup></p>
                          </div>
                          <!--End#col-md-2-->
                          <div class="col-md-2">
                           <input type="text" class="ui-datepicker-trigger selectDate selectDate datetimepicker4 " name="startDate" style="
                           position: absolute;
                           left: 0;
                           z-index: 9;
                           opacity: 0;
                           cursor: pointer;
                           ">
                           <button type="button" class="ui-datepicker-trigger">Chọn ngày</button>
                       </div>
                       <!--End#col-md-2-->
                   </div>
                   <!--End#row-->
                   <div class="row datve-hl bus-white ">
                      <div class="col-md-2">
                          <a href="#"> Hà Nội đi Hưng Yên</a>
                      </div>
                      <!--End#col-md-2-->
                      <div class="col-md-3">
                          <p>Xe Hoàng Long tuyến Hà Nội-Hưng Yên </p>
                      </div>
                      <!--End#col-md-3-->
                      <div class="col-md-2">
                          <p>Ghế ngồi 45 chỗ</p>
                      </div>
                      <!--End#col-md-2-->
                      <div class="col-md-2">
                          <p> 11 chuyến/ngày </p>
                      </div>
                      <!--End#col-md-2-->
                      <div class="col-md-1">
                          <p> 300.000<sup>đ</sup></p>
                      </div>
                      <!--End#col-md-2-->
                      <div class="col-md-2">
                       <input type="text" class="ui-datepicker-trigger selectDate selectDate datetimepicker4 " name="startDate" style="
                       position: absolute;
                       left: 0;
                       z-index: 9;
                       opacity: 0;
                       cursor: pointer;
                       ">
                       <button type="button" class="ui-datepicker-trigger">Chọn ngày</button>
                   </div>
                   <!--End#col-md-2-->
               </div>
               <!--End#row-->
               <div class="row datve-hl bus-gray ">
                  <div class="col-md-2">
                      <a href="#">Hà Nội đi Móng Cái</a>
                  </div>
                  <!--End#col-md-2-->
                  <div class="col-md-3">
                      <p>Xe Hoàng Long tuyến Hà Nội-Móng Cái </p>
                  </div>
                  <!--End#col-md-3-->
                  <div class="col-md-2">
                      <p>Giường nằm 45 chỗ</p>
                  </div>
                  <!--End#col-md-2-->
                  <div class="col-md-2">
                      <p> 14 chuyến/ngày </p>
                  </div>
                  <!--End#col-md-2-->
                  <div class="col-md-1">
                      <p> 500.000<sup>đ</sup></p>
                  </div>
                  <!--End#col-md-2-->
                  <div class="col-md-2">
                   <input type="text" class="ui-datepicker-trigger selectDate selectDate datetimepicker4 " name="startDate" style="
                   position: absolute;
                   left: 0;
                   z-index: 9;
                   opacity: 0;
                   cursor: pointer;
                   ">
                   <button type="button" class="ui-datepicker-trigger">Chọn ngày</button>
               </div>
               <!--End#col-md-2-->
           </div>
           <!--End#row-->
           <div class="row datve-hl bus-white ">
              <div class="col-md-2">
                  <a href="#">Sài Gòn đi Hà Nội</a>
              </div>
              <!--End#col-md-2-->
              <div class="col-md-3">
                  <p>Xe Hoàng Long tuyến Sài Gòn-Hà Nội </p>
              </div>
              <!--End#col-md-3-->
              <div class="col-md-2">
                  <p>Giường nằm 55 chỗ</p>
              </div>
              <!--End#col-md-2-->
              <div class="col-md-2">
                  <p> 3 chuyến/ngày </p>
              </div>
              <!--End#col-md-2-->
              <div class="col-md-1">
                  <p> 1.000.000<sup>đ</sup></p>
              </div>
              <!--End#col-md-2-->
              <div class="col-md-2">
               <input type="text" class="ui-datepicker-trigger selectDate selectDate datetimepicker4 " name="startDate" style="
               position: absolute;
               left: 0;
               z-index: 9;
               opacity: 0;
               cursor: pointer;
               ">
               <button type="button" class="ui-datepicker-trigger">Chọn ngày</button>
           </div>
           <!--End#col-md-2-->
       </div>
       <!--End#row-->
   </div>
   <!--End#fare-table-wrapper-->
  </div>
  <!--End#row-->
  </div>
  <!--End#banggia-->
  <div class="page-next">
      <nav aria-label="Page navigation">
          <ul class="pagination pages-previous">
              <li>
                  <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                  </a>
              </li>
              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                  <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                  </a>
              </li>
          </ul>
      </nav>
  </div>
  <!--End#page-next-->
  </div>
  <!--End#tab-content-tab1-->
  <div id ="tab2" class="tab-content hidden-sm hidden-xs">
      <h3> Hình ảnh xe Hoàng Long </h3>
      <div class="jcarousel-main">
          <div class="jcarousel-wrapper">
              <div class="jcarousel" data-jcarousel="true">
                  <ul style="left: 0px; top: 0px;">
                      <li><img src="images/hl.jpg" width="1129" height="531" alt=""></li>
                      <li><img src="images/hl.jpg" width="1129" height="531" alt=""></li>
                      <li><img src="images/hl.jpg" width="1129" height="531" alt=""></li>
                      <li><img src="images/hl.jpg" width="1129" height="531" alt=""></li>
                      <li><img src="images/hl.jpg" width="1129" height="531" alt=""></li>
                      <li><img src="images/hl.jpg" width="1129" height="531" alt=""></li>
                  </ul>
              </div>
              <a href="#" class="jcarousel-control-prev inactive" data-jcarouselcontrol="true" style=" text-decoration: none;"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
              <a href="#" class="jcarousel-control-next" data-jcarouselcontrol="true" style="text-decoration: none;">
                  <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
              </div>
          </div>
      </div> <!--End#tab-content-tab2-->
      <div id ="tab3" class="tab-content hidden-sm hidden-xs">
          <div class="row">
              <div class="col-md-12">
                  <h3 class="operator-title"><b>Đánh giá tổng thể nhà xe <span class="from">Hoàng Long</span>  </b></h3>
              </div>
              <div class="col-md-4 col-lg-3 col-sm-5">
                  <div class="box-danhgia">
                      <h3 class="text-blue mt0 mb10"><b>4.0</b> <small style="font-size:14px;">trên <b>5.0</b><span class="visible-xs visible-sm"> / 183 hành khách đã đi</span></small></h3>

                      <ul class="list-inline list-star list-unstyled" data-value="4,021858">
                          <li class="star-y"><i class="glyphicon glyphicon-star"></i></li>
                          <li class="star-y"><i class="glyphicon glyphicon-star"></i></li>
                          <li class="star-y"><i class="glyphicon glyphicon-star"></i></li>
                          <li class="star-y"><i class="glyphicon glyphicon-star"></i></li>
                          <li class="star-s"><i class="glyphicon glyphicon-star"></i></li>
                      </ul>


                  </div> <!--End#box-danhgia-->
              </div> <!--col-sm-4-5-->
              <div class="col-md-8  col-sm-7 col-lg-9">
                  <div class="row">
                      <div class=" danhgiatp col-md-4 ">
                          <h6><small>Chất lượng:</small> <b class="pull-right">3.9</b></h6>
                      </div>
                      <div class=" danhgiatp col-md-4 ">
                          <h6><small>Đúng giờ:</small> <b class="pull-right">3.8</b></h6>
                      </div>
                      <div class=" danhgiatp col-md-4 ">
                          <h6><small>Phục vụ:</small> <b class="pull-right">3.7</b></h6>
                      </div>
                  </div> <!--End#row-->



                  <div class="text-danhgia">
                      <p> Đánh giá của <b> 183 hành khách đã đi chuyến xe này </b></p>
                      <button class="btn-vxr btn btn-md hidden-xs comment-btn-popup fl mt20"  type="button" data-toggle="modal" data-target="#myModal" >
                          <i class="glyphicon glyphicon-edit"></i> Viết đánh giá</button>

                          <div class="modal fade" id="myModal" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->

                                <div class="modal-content">
                                  <div class=" title-pop ">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                    <img class="pop-pen" src="images/pop-ico-pen.jpg" alt="">
                                    Viết đánh giá
                                    <img class="pop-logo hidden-xs" src="images/pop-logo.jpg" alt="">


                                </div> <!--modal-header-->
                                <div class=" pop-content-1 ">
                                    <form id="busrating" name="busrating" method="get" action="">
                                      <div class="left-col">
                                          <div class="nhaxe-hl">
                                              <p>nhà xe <b> Hoàng Long </b> </p>
                                              <p class="check-input-routes">
                                                  <span class="hidden-xs" >Tuyến đường*:</span>
                                                  <select name="RouteId" id="RouteId" class="selectRoute rating-input-item">
                                                      <option value="">Chọn tuyến đường</option>
                                                      <option value="9533">Lạng Sơn - Cần Thơ</option>
                                                      <option value="9538">Cần Thơ - Lạng Sơn</option>
                                                      <option value="9540">Hồ Chí Minh - Hà Nội</option>
                                                      <option value="9542">Hà Nội - Hồ Chí Minh</option>
                                                      <option value="9546">Hải Phòng - Hồ Chí Minh</option>
                                                      <option value="9547">Hồ Chí Minh - Hải Phòng</option>
                                                      <option value="9553">Hải Phòng - Vũng Tàu</option>
                                                      <option value="9554">Vũng Tàu - Hải Phòng</option>
                                                      <option value="9557">Móng Cái - Hồ Chí Minh</option>
                                                      <option value="9562">Hải Phòng - Hà Nội</option>
                                                      <option value="9563">Hồ Chí Minh - Thái Nguyên</option>
                                                      <option value="9564">Thái Nguyên - Hồ Chí Minh</option>
                                                      <option value="9565">Hà Nội - Hải Phòng</option>
                                                      <option value="290163">Hà Nội - Hải Phòng - Cát Bà</option>
                                                      <option value="290165">Cát Bà - Hải Phòng - Hà Nội</option>
                                                      <option value="426898">Hồ Chí Minh - Cửa Ông</option>
                                                      <option value="539800">Sài Gòn - Hà Nội</option>
                                                      <option value="539851">Sài Gòn - Hải Phòng</option>
                                                  </select>

                                              </p>
                                          </div><!--End#nhaxe-->

                                          <div class="form-nhaxe-hl clearfix">

                                              <div class="check-input-date">

                                                  <input id="departDate" name="DateOfJourney" class="departDate txt rating-input-item hasDatepicker" type="text" placeholder="Chọn ngày đi *">

                                              </div>
                                              <div class="clearfix"></div>
                                              <div class="check-input-name">

                                                  <input id="firstName" name="FirstName" class="txt rating-input-item" type="text" placeholder="Họ tên *">

                                              </div>
                                              <div class="clearfix"></div>
                                              <div class="check-input-email">

                                                  <input id="email" name="Email" class="txt rating-input-item" type="text" placeholder="Email: *">
                                              </div>
                                              <div class="clearfix"></div>
                                              <p>Viết đánh giá (tối thiểu 100 chữ)</p>
                                              <div class="check-input-cmt">
                                                  <textarea id="comment" class="rating-input-item" name="Comment" placeholder="Chia sẻ những trải nghiệm quý giá của bạn sẽ giúp cho các hành khách khác lựa chọn được chuyến đi tốt nhất."></textarea>
                                              </div>

                                          </div> <!--End#form-nhaxe-->

                                      </div> <!--End#left-col-->
                                      <div class="right-col">
                                          <img style="margin-right:7px;float: left;margin-top: 18px;" src="images/pop-ico-danhgia.jpg" alt="">
                                          <h6 class="hidden-xs" style="
                                          color: #585858;
                                          font-size: 15px;
                                          line-height: 1.4em;
                                          text-transform: uppercase;
                                          font-weight:bold;
                                          margin-top:24px;
                                          "> Đánh giá:
                                      </h6>

                                      <div class="alert-text">( Vui lòng bấm <img src="images/pop-star-silver.jpg" alt=""> để đánh giá)</div>

                                      <div class="pop-option-rates ">

                                         <p><span>Tổng quan:</span></p>

                                         <div class="stars">
                                          <select class="example">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="pop-option-rates">

                                 <p><span>Chất lượng:</span></p>
                                 <div class="stars">
                                  <select class="example">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>

                        </div>

                        <div class="pop-option-rates">

                         <p><span>Đúng giờ:</span></p>

                         <div class="stars">
                          <select  class="example">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                </div>

                <div class="pop-option-rates">

                 <p><span>Thái độ phục vụ:</span></p>

                 <div class="stars">
                  <select class="example">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

        </div>

    </div> <!--End#right-col-->
    <div class="pop-ckb-confirm">
      <ul class="list-checkbox">
          <li>
              <input type="checkbox" name="one" id="one" />
              <label for="one"></label>
          </li>

      </ul>
      <p>Tôi xác nhận rằng đánh giá này hoàn toàn dựa trên trải nghiệm cá nhân của tôi khi đi chuyến này và tôi không có mối quan hệ cá nhân hay kinh doanh với các hãng xe. Tôi hiểu rằng Vexere hoàn toàn không chấp nhận các đánh giá giả.</p>
  </div>
  <button class="btn-danhgia hidden-xs comment-btn-popup fl mt20" type="submit" >Gửi đánh giá</button>

  </form>



  </div> <!--End#pop-content-->
  <div class="">


  </div> <!--modal-content-->
  </div>

  </div> <!--End#modal-dialog-->
  </div> <!--End#modal-fade-->
  </div>

  </div> <!--End#col-md-8-->
  <div class="col-md-12">
      <h5 class="operator-title"><b>Đánh giá của từng khách hàng</b></h5>
      <div id="comments-container" class="hidden-xs hidden-sm comment-box">
          <div class="comments-list">
              <div class="comments-item">
                  <div class="row">
                     <div class="col-md-2">
                      <div class="rating with-num" itemprop="reviewRating" itemscope="" >
                          <span>
                              <meta itemprop="worstRating" content="1">
                              <strong class="font-14 or-txt" itemprop="ratingValue">
                                  3.0
                              </strong>/<strong class="font-14 or-txt" itemprop="bestRating">5.0</strong>
                          </span>

                          <ul class="list-inline pull-left rate-star" data-value="3">
                              <li><i class="glyphicon glyphicon-star text-yellow"></i></li>
                              <li><i class="glyphicon glyphicon-star text-yellow"></i></li>
                              <li><i class="glyphicon glyphicon-star text-yellow"></i></li>
                              <li><i class="glyphicon glyphicon-star text-gray"></i></li>
                              <li><i class="glyphicon glyphicon-star text-gray"></i></li>
                          </ul>


                      </div>
                      <ul class="rating-rank-list-small fl">
                          <li>Chất lượng: <span class="fl-r">3.0</span></li>
                          <li>Đúng giờ: <span class="fl-r">3.0</span></li>
                          <li>Phục vụ: <span class="fl-r">3.0</span></li>
                      </ul>


                  </div> <!--End#col-md-2-->
                  <div class="col-md-10">

                      <div class="comment-item-content clearfix">
                          <h6 class="comment-author" itemprop="author">
                              N. cuong
                              <em class="fl-r departureDate" itemprop="about">
                                  Chuyến đi ngày: 11/06/2017 - Đăng ngày: 11/06/2017
                              </em>
                          </h6>

                          <meta itemprop="datePublished" content="2017-06-11;">
                          <p class="rating-content" itemprop="description">Xe cũ chất lượng quá kém hay hỏng doc đường điều hoà ko mát lái xe hút thuốc trên xe nói chung là chất lượng qua kém .</p>
                          <div class="comment-footer ">
                              <p class="check fl">Được xác nhận bởi VeXeRe.com.</p>
                              <a class=" social-link share-zing" href="#" title="chia sẻ trên Zing"> <img src="images/icon-zing.png" alt="Vexegiare"> </a>
                              <a class="social-link share-gg" href="#" title="chia sẻ trên Google"> <img src="images/icon-google.png" alt="Vexegiare"> </a>

                              <a class="social-link share-fb" href="#" title="chia sẻ trên Facebook"> <img src="images/icon-fb.png" alt="Vexegiare"> </a>
                              <p class="share">
                                  Chia sẻ </p>
                              </p>
                          </div>
                      </div>

                  </div> <!--End#col-md-10-->
              </div> <!--End#row-->
          </div> <!--End#comments-item-->



          <div class="comments-item">
              <div class="row">
                 <div class="col-md-2">
                  <div class="rating with-num" itemprop="reviewRating" itemscope="" >
                      <span>
                          <meta itemprop="worstRating" content="1">
                          <strong class="font-14 or-txt" itemprop="ratingValue">
                              3.0
                          </strong>/<strong class="font-14 or-txt" itemprop="bestRating">5.0</strong>
                      </span>

                      <ul class="list-inline pull-left rate-star" data-value="3">
                          <li><i class="glyphicon glyphicon-star text-yellow"></i></li>
                          <li><i class="glyphicon glyphicon-star text-yellow"></i></li>
                          <li><i class="glyphicon glyphicon-star text-yellow"></i></li>
                          <li><i class="glyphicon glyphicon-star text-gray"></i></li>
                          <li><i class="glyphicon glyphicon-star text-gray"></i></li>
                      </ul>


                  </div>
                  <ul class="rating-rank-list-small fl">
                      <li>Chất lượng: <span class="fl-r">4.0</span></li>
                      <li>Đúng giờ: <span class="fl-r">4.0</span></li>
                      <li>Phục vụ: <span class="fl-r">3.0</span></li>
                  </ul>


              </div> <!--End#col-md-2-->
              <div class="col-md-10">

                  <div class="comment-item-content clearfix">
                      <h6 class="comment-author" itemprop="author">
                          Đ.Vĩ
                          <em class="fl-r departureDate" itemprop="about">
                              Chuyến đi ngày: 03/06/2017 - Đăng ngày: 05/06/2017
                          </em>
                      </h6>

                      <meta itemprop="datePublished" content="2017-06-11;">
                      <p class="rating-content" itemprop="description">Tôi cực kỳ thất vọng về chất lượng xe: quá tệ, xe bẩn, hôi, hàng hóa để dọc lối đi, leo lên leo xuống bằng chỗ gác tay của khách hàng để chất hàng lên ghế trống, NVS bị hư, ghé chỗ đi vệ sinh và ăn uống cho khách rất bẩn. Không có nước uống và khăn lạnh. Tôi cực kỳ thất vọng.</p>
                      <div class="comment-footer ">
                          <p class="check fl">Được xác nhận bởi VeXeRe.com.</p>

                          <a class=" social-link share-zing" href="#" title="chia sẻ trên Zing"> <img src="images/icon-zing.png" alt="Vexegiare"> </a>
                          <a class="social-link share-gg" href="#" title="chia sẻ trên Google"> <img src="images/icon-google.png" alt="Vexegiare"> </a>

                          <a class="social-link share-fb" href="#" title="chia sẻ trên Facebook"> <img src="images/icon-fb.png" alt="Vexegiare"> </a>
                          <p class="share">
                              Chia sẻ
                          </p>
                      </p>
                  </div>
              </div>

          </div> <!--End#col-md-10-->
      </div> <!--End#row-->
  </div> <!--End#comments-item-->




  </div> <!--End#comments-list-->
  <div class="page-next">
      <nav aria-label="Page navigation">
          <ul class="pagination pages-previous">
              <li>
                  <a href="#" aria-label="Previous">
                      <span aria-hidden="true">«</span>
                  </a>
              </li>
              <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                  <a href="#" aria-label="Next">
                      <span aria-hidden="true">»</span>
                  </a>
              </li>
          </ul>
      </nav>
  </div>
  </div> <!--end#comments-container#comment-box-->
  </div> <!--End#col-md-12-->

  </div> <!--End#row-->
  </div> <!--End#tab-content-tab3-->
  <div id ="tab4" class="tab-content hidden-sm hidden-xs">
      <div class="col-md-12">
          <h3 class="text-left operator-title">
              <b>Số điện thoại xe Hoàng Long </b>
          </h3>

      </div>

      <div class="row ">
          <div class="col-md-6 col-sm-10 col-xs-12 chonnoidi">
              <div class="form-group">
                  <label class="col-sm-3  col-md-3 col-xs-12  control-label label-vxr pl0-xs hidden-xs">Chọn nơi đi:</label>
                  <div class="col-sm-5 col-md-5 col-xs-12 pl0-xs">
                      <select class="form-control form-control-vxr no-radius state-filter">
                          <option value="">Bấm vào để chọn </option>
                          <option value="2">Bà Rịa-Vũng Tàu</option>
                          <option value="3">Bắc Giang</option>
                          <option value="6">Bắc Ninh</option>
                          <option value="8">Bình Định</option>
                          <option value="11">Bình Thuận</option>
                          <option value="13">Cần Thơ</option>
                          <option value="15">Đà Nẵng</option>
                          <option value="19">Đồng Nai</option>
                          <option value="23">Hà Nam</option>
                          <option value="24">Hà Nội</option>
                          <option value="25">Hà Tĩnh</option>
                          <option value="26">Hải Dương</option>
                          <option value="27">Hải Phòng</option>
                          <option value="31">Hưng Yên</option>
                          <option value="32">Khánh Hòa</option>
                          <option value="37">Lạng Sơn</option>
                          <option value="39">Long An</option>
                          <option value="40">Nam Định</option>
                          <option value="42">Ninh Bình</option>
                          <option value="43">Ninh Thuận</option>
                          <option value="41">Nghệ An</option>
                          <option value="45">Phú Yên</option>
                          <option value="46">Quảng Bình</option>
                          <option value="47">Quảng Nam</option>
                          <option value="49">Quảng Ninh</option>
                          <option value="48">Quảng Ngãi</option>
                          <option value="50">Quảng Trị</option>
                          <option value="29">Sài Gòn</option>
                          <option value="58">Tiền Giang</option>
                          <option value="54">Thái Bình</option>
                          <option value="55">Thái Nguyên</option>
                          <option value="56">Thanh Hóa</option>
                          <option value="57">Thừa Thiên-Huế</option>
                          <option value="61">Vĩnh Long</option>
                      </select>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-12">
          <h4 class="text-blue chondiemdi">
              <i class="glyphicon glyphicon-map-marker"></i>
              <a href="#" title="Số điện thoại và địa chỉ xe Hoàng Long ở Lạng Sơn">Lạng Sơn</a>
          </h4>
      </div>
      <div class="row benxe">
          <div class="col-xs-3 hidden-xs">
              <h5>
                  <a href="#">
                      <b>Bến Xe phía Bắc Lạng Sơn</b>
                  </a>
              </h5>
          </div>
          <div class="col-xs-9 hidden-xs">
              <div class="row">
                  <div class="col-md-12">
                      <p>
                          Địa chỉ:   Khối 1, TT Cao Lộc, Cao Lộc, Lạng Sơn, Lạng Sơn, Tỉnh Lạng Sơn</p>
                      </div>
                      <div class="col-md-12">
                          <a class="text-linkcall click-phone-link hidden-xs tooltipstered" data-branchname="Bến Xe phía Bắc Lạng Sơn" data-event="BrandshowNumber" is-clicked="false">
                              <i class="glyphicon glyphicon-earphone"></i>
                              <span style="font-size: 16px; cursor: pointer;" class="text-orange">Bấm để gọi Đặt vé</span>
                          </a>
                          <a class="text-linkcall click-phone-link hidden-xs tooltipstered" data-branchname="Bến Xe phía Bắc Lạng Sơn" data-event="BrandshowNumber" is-clicked="false">
                              <i class="glyphicon glyphicon-earphone"></i>
                              <span style="font-size: 16px; cursor: pointer;" class="text-orange">Bấm để gọi Gửi hàng</span>
                          </a>
                      </div>
                  </div>
              </div>
          </div>

      </div> <!--End#tab4-tab-content-->
      <div id ="tab5" class="tab-content hidden-sm hidden-xs">
          <div class="col-md-12">
              <h3 class="text-left operator-title">
                  <b>Vé xe Tết 2018 của xe Hoàng Long vào ngày 20/06/2017 </b>
              </h3>

          </div>
      </div> <!--End#tab5-tab-content-->

  </div> <!--End#tab-container-->
  </div>
  <!--End#row-->
  </div>
  <!--End#container-->
  </div>
  <!--End#bus-hl-content-->
  <div class="skyline-wrapper">
      <div class="container hidden-xs hidden-sm">
          <div class="intro-vxr-bus">
              <h4 class="mt20 mb10">VeXeRe.com là hệ thống bán vé xe giá rẻ lớn nhất và uy tín nhất tại Việt Nam</h4>
              <p>Với hơn 2000 nhà xe và 5000 tuyến đường, VeXeRe.com là đại lý vé xe duy nhất tại Việt Nam hỗ trợ hơn 1.5 triệu lượt tìm kiếm và đặt vé mỗi tháng. Quý khách có thể lựa chọn nhà xe và vị trí ghế ngồi của mình vô cùng dễ dàng, thanh toán vé trực tuyến an toàn và nhận vé ngay thông qua Email. Hãy đặt vé tại VeXeRe.com ngay hôm nay và tận hưởng một chuyến du lịch với nhiều kỉ niệm đáng nhớ...</p>
          </div>
          <!--End#intro-vrx-bus-->
      </div>
      <div class="bus-img">
          <img src="images/xechay.jpg" class="img-responsive">
      </div>
      <!--End#bus-img-->
  </div>
  <!--End#skyline-wrapper-->
  </div> <!--End#hl-->



  @stop