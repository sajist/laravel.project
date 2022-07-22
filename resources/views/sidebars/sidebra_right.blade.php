
  <section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
          </div>

          <div class="nav notify-row" id="top_menu">
              <!--  notification start -->
              <ul class="nav top-menu">
                  <!-- settings start -->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <i class="icon-tasks"></i>
                          <span class="badge bg-success">6</span>
                      </a>
                      <ul class="dropdown-menu extended tasks-bar">
                          <div class="notify-arrow notify-arrow-green"></div>
                          <li>
                              <p class="green">شما 6 وظیفه در دستور کار دارید</p>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="task-info">
                                      <div class="desc">داشبورد</div>
                                      <div class="percent">40%</div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                          <span class="sr-only">40% تکمیل (موفقیت)</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="task-info">
                                      <div class="desc">آپدیت دیتابیس</div>
                                      <div class="percent">60%</div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                          <span class="sr-only">60% Complete (خطر)</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="task-info">
                                      <div class="desc">توسعه آیفون</div>
                                      <div class="percent">87%</div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                          <span class="sr-only">87% کامل</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="task-info">
                                      <div class="desc">اپلکیشن موبایل</div>
                                      <div class="percent">33%</div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                          <span class="sr-only">33% کامل (اخطار)</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="task-info">
                                      <div class="desc">مشتریان</div>
                                      <div class="percent">45%</div>
                                  </div>
                                  <div class="progress progress-striped active">
                                      <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                          <span class="sr-only">45% کامل</span>
                                      </div>
                                  </div>

                              </a>
                          </li>
                          <li class="external">
                              <center>
                               <a href="#">مشاهده تمام وظیفه ها</a>
                              </center>
                          </li>
                      </ul>
                  </li>
                  <!-- settings end -->
                  <!-- inbox dropdown start-->
                  <li id="header_inbox_bar" class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <i class="icon-envelope-alt"></i>
                          <span class="badge bg-important">5</span>
                      </a>
                      <ul class="dropdown-menu extended inbox">
                          <div class="notify-arrow notify-arrow-red"></div>
                          <li>
                              <p class="red">شما 5 پیام جدید دارید</p>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="photo"><img alt="avatar" src="img/avatar-mini.jpg"></span>
                                  <span class="subject">
                                  {{-- <span class="from">{{ auth()->user()->lastname }}</span> --}}
                                  {{-- <span>{{  auth()->user()->lastname }}</span> --}}
                                  <span class="time">همین الان</span>
                                  </span>
                                  <span class="message">
                                    سلام این یک پیام تست است.
                                  </span>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="photo"><img alt="avatar" src="img/avatar-mini2.jpg"></span>
                                  <span class="subject">
                                  <span class="from">علی</span>
                                  <span class="time">10 دقیقه پیش</span>
                                  </span>
                                  <span class="message">
                                   سلام ، علی هستم ، حال شما خوب است؟
                                  </span>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="photo"><img alt="avatar" src="img/avatar-mini3.jpg"></span>
                                  <span class="subject">
                                  <span class="from">سارا</span>
                                  <span class="time">3 ساعت پیش</span>
                                  </span>
                                  <span class="message">
                                      سایت شما بسیار عالی است.
                                  </span>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="photo"><img alt="avatar" src="img/avatar-mini4.jpg"></span>
                                  <span class="subject">
                                  <span class="from">محمد</span>
                                  <span class="time">هفته گذشته</span>
                                  </span>
                                  <span class="message">
                                      سلام به سایت بیشتر سر بزنید.
                                  </span>
                              </a>
                          </li>
                          <li>
                                  <center>
                                  <a href="#">مشاهده تمام پیام ها</a>
                                  </center>
                            </li>
                      </ul>
                  </li>
                  <!-- inbox dropdown end -->
                  <!-- notification dropdown start-->
                  <li id="header_notification_bar" class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                          <i class="icon-bell-alt"></i>
                          <span class="badge bg-warning">7</span>
                      </a>
                      <ul class="dropdown-menu extended notification">
                          <div class="notify-arrow notify-arrow-yellow"></div>
                          <li>
                              <p class="yellow">شما 7 اعلان جدید دارید</p>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="label label-danger"><i class="icon-bolt"></i></span>
                                  سرور دوباره راه اندازی شد.
                                  <span class="small italic">34 دقیقه پیش</span>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="label label-warning"><i class="icon-bell"></i></span>
                                  سرور 10 در دسترس نیست.
                                  <span class="small italic">1 ساعت پیش</span>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="label label-danger"><i class="icon-bolt"></i></span>
                                  دیتابیس لود گردید..
                                  <span class="small italic">4 ساعت پیش</span>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="label label-success"><i class="icon-plus"></i></span>
                                  یک کاربر جدید عضو شد.
                                  <span class="small italic">هم اکنون</span>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                  اپلکیشن ارور داد.
                                  <span class="small italic">10 دقیقه پیش</span>
                              </a>
                          </li>
                          <li>
                                  <center>
                                  <a href="#">مشاهده تمام اعلان ها</a>
                                  </center>
                          </li>
                      </ul>
                  </li>
                  <!-- notification dropdown end -->
              </ul>
              <!--  notification end -->
          </div>
          <div class="top-nav ">
              <!--search & user info start-->
              <ul class="nav pull-right top-menu">
                  <li>
                      <input type="text" class="form-control search" placeholder="Search">
                  </li>
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <img alt="" src="img/avatar1_small.jpg">

                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                          <li><a href="#"><i class=" icon-suitcase"></i>پروفایل</a></li>
                          <li><a href="#"><i class="icon-cog"></i> تنظیمات</a></li>
                          <li><a href="#"><i class="icon-bell-alt"></i> اعلان ها</a></li>
                          <li><a href="login.html"><i class="icon-key"></i>خروج</a></li>
                      </ul>
                  </li>
                  <!-- user login dropdown end -->
              </ul>
              <!--search & user info end-->
          </div>
      </header>
    <!--header end-->

        </div>
  <!--sidebar start-->
   <aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="active">
                <a class="" href="index.html">
                    <i class="icon-home"></i>
                    <span>داشبورد</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon-user"></i>
                    <span> کاربران </span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{ route('users.index') }}">لیست کاربران </a></li>
                    <li><a class="" href="{{ route('users.create') }}"> اضافه کردن کاربران </a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class=" icon-file-text"></i>
                    <span>دسته بندی ها</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{ route('categories.index')  }}">صفحه اصلی دسته نندی</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class=" icon-file-text"></i>
                    <span> پست ها</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{ route('posts.index')  }}">صفحه اصلی پست</a></li>
                    <li><a class="" href="{{ route('posts.create') }}">اذسال پست</a></li>
                </ul>
            </li>


            <li>
                <a class="" href="{{ route('welcame')}}">
                    <i class="icon-user"></i>
                    <span>ورود به سایت</span>
                </a>
            </li>
        </ul>
    </div>
   </aside>
  </section>

        <!-- sidebar menu end-->
