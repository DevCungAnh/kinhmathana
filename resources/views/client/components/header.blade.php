<section class="py-0">
  <div class="container-small">
    <div class="ecommerce-topbar">
      <nav class="navbar navbar-expand-lg navbar-light px-0">
        <div class="row gx-0 gy-2 w-100 flex-between-center">
          <div class="col-auto"><a class="text-decoration-none" href="/">
              <div class="d-flex align-items-center"><img src="{{ asset('v1/assets/img/icons/logo.png') }}" alt="phoenix" width="27" />
                <h5 class="logo-text ms-2">phoenix</h5>
              </div>
            </a></div>
          <div class="col-auto order-md-1">
            <ul class="navbar-nav navbar-nav-icons flex-row me-n2">
              <li class="nav-item d-flex align-items-center">
                <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme" style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label></div>
              </li>
              <li class="nav-item"><a class="nav-link px-2 icon-indicator icon-indicator-primary" href="{{ url('cart') }}" role="button"><span class="text-body-tertiary" data-feather="shopping-cart" style="height:20px;width:20px;"></span><span class="icon-indicator-number">3</span></a></li>
              <li class="nav-item dropdown"><a class="nav-link px-2 icon-indicator icon-indicator-sm icon-indicator-danger" id="navbarTopDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="text-body-tertiary" data-feather="bell" style="height:20px;width:20px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret mt-2" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                  <div class="card position-relative border-0">
                    <div class="card-header p-2">
                      <div class="d-flex justify-content-between">
                        <h5 class="text-body-emphasis mb-0">Notifications</h5><button class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark all as read</button>
                      </div>
                    </div>
                    <div class="card-body p-0">
                      <div class="scrollbar-overlay" style="height: 27rem;">
                        <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('v1/assets/img/team/40x40/30.webp') }}" alt="" /></div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                                <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span></p>
                                <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:41 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                              <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3">
                                <div class="avatar-name rounded-circle"><span>J</span></div>
                              </div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs-9 text-body-emphasis">Jane Foster</h4>
                                <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>📅</span>Created an event.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">20m</span></p>
                                <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:20 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                              <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle avatar-placeholder" src="{{ asset('v1/assets/img/team/40x40/avatar.webp') }}" alt="" /></div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs-9 text-body-emphasis">Jessie Samson</h4>
                                <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">1h</span></p>
                                <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:30 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                              <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('v1/assets/img/team/40x40/57.webp') }}" alt="" /></div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs-9 text-body-emphasis">Kiera Anderson</h4>
                                <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>💬</span>Mentioned you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                                <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">9:11 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                              <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="px-2 px-sm-3 py-3 notification-card position-relative unread border-bottom">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('v1/assets/img/team/40x40/59.webp') }}" alt="" /></div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs-9 text-body-emphasis">Herman Carter</h4>
                                <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👤</span>Tagged you in a comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                                <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:58 PM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                              <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                            </div>
                          </div>
                        </div>
                        <div class="px-2 px-sm-3 py-3 notification-card position-relative read ">
                          <div class="d-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex">
                              <div class="avatar avatar-m status-online me-3"><img class="rounded-circle" src="{{ asset('v1/assets/img/team/40x40/58.webp') }}" alt="" /></div>
                              <div class="flex-1 me-sm-3">
                                <h4 class="fs-9 text-body-emphasis">Benjamin Button</h4>
                                <p class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal"><span class='me-1 fs-10'>👍</span>Liked your comment.<span class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10"></span></p>
                                <p class="text-body-secondary fs-9 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">10:18 AM </span>August 7,2021</p>
                              </div>
                            </div>
                            <div class="dropdown notification-dropdown"><button class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                              <div class="dropdown-menu py-2"><a class="dropdown-item" href="#!">Mark as unread</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer p-0 border-top border-translucent border-0">
                      <div class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85"><a class="fw-bolder" href="/pages/notifications.html">Notification history</a></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link px-2" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span class="text-body-tertiary" data-feather="user" style="height:20px;width:20px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border mt-2" aria-labelledby="navbarDropdownUser">
                  <div class="card position-relative border-0">
                    <div class="card-body p-0">
                      <div class="text-center pt-4 pb-3">
                        <div class="avatar avatar-xl ">
                          <img class="rounded-circle " src="{{ asset('v1/assets/img/team/72x72/57.webp') }}" alt="" />
                        </div>
                        <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                      </div>
                      <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
                    </div>
                    <div class="overflow-auto scrollbar" style="height: 10rem;">
                      <ul class="nav d-flex flex-column mb-2 pb-1">
                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user"></span><span>Profile</span></a></li>
                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"><span class="me-2 text-body align-bottom" data-feather="pie-chart"></span>Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="lock"></span>Posts &amp; Activity</a></li>
                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="help-circle"></span>Help Center</a></li>
                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="globe"></span>Language</a></li>
                      </ul>
                    </div>
                    <div class="card-footer p-0 border-top border-translucent">
                      <ul class="nav d-flex flex-column my-3">
                        <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="user-plus"></span>Add another account</a></li>
                      </ul>
                      <hr />
                      <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"> <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                      <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-12 col-md-6">
            <div class="search-box ecommerce-search-box w-100">
              <form class="position-relative"><input class="form-control search-input search form-control-sm" type="search" placeholder="Search" aria-label="Search" />
                <span class="fas fa-search search-box-icon"></span>
              </form>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div><!-- end of .container-->
</section>
<nav class="navbar-responsive-navitems navbar-expand navbar-light bg-body-emphasis justify-content-between">
  <div class="container-small d-flex flex-between-center" data-navbar="data-navbar">
    <div class="dropdown"><button class="btn text-body ps-0 pe-5 text-nowrap dropdown-toggle dropdown-caret-none" data-category-btn="data-category-btn" data-bs-toggle="dropdown"><span class="fas fa-bars me-2"></span>Category</button>
      <div class="dropdown-menu border border-translucent py-0 category-dropdown-menu">
        <div class="card border-0 scrollbar" style="max-height: 657px;">
          <div class="card-body p-6 pb-3">
            <div class="row gx-7 gy-5 mb-5">
              <div class="col-12 col-sm-6 col-md-4">
                <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="pocket" style="stroke-width:3;"></span>
                  <h6 class="text-body-highlight mb-0 text-nowrap">Collectibles &amp; Art</h6>
                </div>
                <div class="ms-n2"><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Collectibles</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Antiques</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Sports memorabilia </a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Art</a></div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="home" style="stroke-width:3;"></span>
                  <h6 class="text-body-highlight mb-0 text-nowrap">Home &amp; Gardan</h6>
                </div>
                <div class="ms-n2"><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Yard, Garden &amp; Outdoor</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Crafts</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Home Improvement</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Pet Supplies</a></div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="globe" style="stroke-width:3;"></span>
                  <h6 class="text-body-highlight mb-0 text-nowrap">Sporting Goods</h6>
                </div>
                <div class="ms-n2"><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Outdoor Sports</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Team Sports</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Exercise &amp; Fitness</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Golf</a></div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="monitor" style="stroke-width:3;"></span>
                  <h6 class="text-body-highlight mb-0 text-nowrap">Electronics</h6>
                </div>
                <div class="ms-n2"><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Computers &amp; Tablets</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Camera &amp; Photo</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">TV, Audio &amp; Surveillance</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Cell Ohone &amp; Accessories</a></div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="truck" style="stroke-width:3;"></span>
                  <h6 class="text-body-highlight mb-0 text-nowrap">Auto Parts &amp; Accessories</h6>
                </div>
                <div class="ms-n2"><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">GPS &amp; Security Devices</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Rader &amp; Laser Detectors</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Care &amp; Detailing</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Scooter Parts &amp; Accessories</a></div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="codesandbox" style="stroke-width:3;"></span>
                  <h6 class="text-body-highlight mb-0 text-nowrap">Toys &amp; Hobbies</h6>
                </div>
                <div class="ms-n2"><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Radio Control</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Kids Toys</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Action Figures</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Dolls &amp; Bears</a></div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="watch" style="stroke-width:3;"></span>
                  <h6 class="text-body-highlight mb-0 text-nowrap">Fashion</h6>
                </div>
                <div class="ms-n2"><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Women</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Men</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Jewelry &amp; Watches</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Shoes</a></div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="music" style="stroke-width:3;"></span>
                  <h6 class="text-body-highlight mb-0 text-nowrap">Musical Instruments &amp; Gear</h6>
                </div>
                <div class="ms-n2"><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Guitar</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Pro Audio Equipment</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">String</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Stage Lighting &amp; Effects</a></div>
              </div>
              <div class="col-12 col-sm-6 col-md-4">
                <div class="d-flex align-items-center mb-3"><span class="text-primary me-2" data-feather="grid" style="stroke-width:3;"></span>
                  <h6 class="text-body-highlight mb-0 text-nowrap">Other Categories</h6>
                </div>
                <div class="ms-n2"><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Video Games &amp; Consoles</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Health &amp; Beauty</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Baby</a><a class="text-body-emphasis d-block mb-1 text-decoration-none bg-body-highlight-hover px-2 py-1 rounded-2" href="#!">Business &amp; Industrial</a></div>
              </div>
            </div>
            <div class="text-center border-top border-translucent pt-3"><a class="fw-bold" href="#!">See all Categories<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a></div>
          </div>
        </div>
      </div>
    </div>
    <ul class="navbar-nav justify-content-end align-items-center">
      <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link ps-0 active" href="homepage.html">Home</a></li>
      <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="favourite-stores.html">My Favourite Stores</a></li>
      <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="{{ route('client.product.index') }}">Products</a></li>
      <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="wishlist.html">Wishlist</a></li>
      <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="shipping-info.html">Shipping Info</a></li>
      <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="../admin/add-product.html">Be a vendor</a></li>
      <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link" href="order-tracking.html">Track order</a></li>
      <li class="nav-item" data-nav-item="data-nav-item"><a class="nav-link pe-0" href="checkout.html">Checkout</a></li>
      <li class="nav-item dropdown" data-nav-item="data-nav-item" data-more-item="data-more-item"><a class="nav-link dropdown-toggle dropdown-caret-none fw-bold pe-0" href="javascript: void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-boundary="window" data-bs-reference="parent"> More<span class="fas fa-angle-down ms-2"></span></a>
        <div class="dropdown-menu dropdown-menu-end category-list" aria-labelledby="navbarDropdown" data-category-list="data-category-list"></div>
      </li>
    </ul>
  </div>
</nav>