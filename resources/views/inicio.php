<div class="row">

    <div class="col-xl-6 col-xxl-12">
        <div class="row invoice-card-row">

            <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                        <div class="media ai-icon">
                            <span class="me-3 bgl-primary text-primary">
                                <!-- <i class="ti-user"></i> -->
                                <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </span>
                            <div class="media-body">
                                <p class="mb-1">Clientes Activos</p>
                                <span class="badge badge-primary light">48 de 61</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                        <div class="media ai-icon">
                            <span class="me-3 bgl-warning text-warning">
                                <svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                            </span>
                            <div class="media-body">
                                <p class="mb-1">Préstamos Activos</p>
                                <span class="badge badge-warning light">48 de 50</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body  p-4">
                        <div class="media ai-icon">
                            <span class="me-3 bgl-success text-danger">
                                <svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather text-success feather-dollar-sign">
                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                            </span>
                            <div class="media-body">
                                <p class="mb-1">Total Prestado (RD$)</p>
                                <span class="badge badge-success light">1,200,858.88</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                        <div class="media ai-icon">
                            <span class="me-3 bgl-info text-info">
                                <svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
                                    <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                    <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                                    <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                </svg>
                            </span>
                            <div class="media-body">
                                <p class="mb-1">Total Interés (RD$)</p>
                                <span class="badge badge-info light">1,200,858.88</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-lg-12 col-sm-12">
                <div class="card p-3">
                    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center">

                        <select class="default-select dashboard-select mb-2 mb-sm-0" id="box">
                            <option value="0" selected>Hoy</option>
                            <option value="1">Ayer</option>
                            <option value="2">Mes</option>
                            <option value="3">Año</option>
                        </select>

                        <div class="d-flex align-items-end me-4">
                            <div class="d-flex align-items-end me-4 mb-2">
                                <img src="images/svg/ic_stat2.svg" height="22" width="22" class="me-2 mb-1" alt="">
                                <div>
                                    <small class="text-dark fs-14">Ingreso</small>
                                    <h3 class="font-w600 mb-0">RD$<span class="counter">41,512</span>k</h3>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-end">
                            <div class="d-flex align-items-end me-4 mb-2">
                                <img src="images/svg/ic_stat1.svg" height="22" width="22" class="me-2 mb-1" alt="">
                                <div>
                                    <small class="text-dark fs-14">Egreso</small>
                                    <h3 class="font-w600 mb-0">RD$<span class="counter">41,512</span>k</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 col-xxl-6 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-header border-0 pb-0 d-flex justify-content-between">
                        <h5 class="card-title">Cuentas por cobrar</h5>

                        <div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-search"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-filter"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-calendar"></i></a>
                        </div>
                    </div>
                    <div class="card-body p-2 dlab-scroll" id="DZ_W_Todo2">

                        <div id="DZ_W_Todo2" class="dlab-scroll height320">

                            <ul class="timeline">

                                <li class="mb-3">

                                    <div id="accordion-one" class="accordion style-1">
                                        <div class="accordion-item">
                                            <div class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#default_collapseOne1" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <div class="profile-image">
                                                        <img src="images/avatar/1.jpg" alt="">
                                                    </div>
                                                    <div class="user-info">
                                                        <h6 class="fs-16 font-w700 mb-0"><a href="javascript:void(0)">RAMON ALBERTO SOLANO</a></h6>
                                                        <span class="fs-14">(pendiente)</span>
                                                    </div>
                                                </div>
                                                <span>Junio 5, 2020, 08:22 AM</span>
                                                <span>RD$: 20,000</span>
                                            </div>
                                            <div id="default_collapseOne1" class="accordion_body collapse" data-bs-parent="#accordion-one" style="">
                                                <div class="payment-details accordion-body-text">
                                                    <div class="me-3 mb-3">
                                                        <p class="fs-12 mb-2">Balance pendiente</p>
                                                        <span class="font-w500">RD$: 20,000</span>
                                                    </div>
                                                    <div class="me-3 mb-3">
                                                        <p class="fs-12 mb-2">Cuotas pagadas</p>
                                                        <span class="font-w500">4/6</span>
                                                    </div>
                                                    <div class="me-3 mb-3">
                                                        <p class="fs-12 mb-2">Cuotas pendientes</p>
                                                        <span class="font-w500">14</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </li>

                                <li class="mb-3">
                                    <div id="accordion-two" class="accordion style-1">
                                        <div class="accordion-item">
                                            <div class="accordion-header collapsed" data-bs-toggle="collapse" data-bs-target="#default_collapse2" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <div class="profile-image">
                                                        <img src="images/avatar/2.jpg" alt="">
                                                    </div>
                                                    <div class="user-info">
                                                        <h6 class="fs-16 font-w700 mb-0"><a href="javascript:void(0)">MARIA ANTONIETA DE LAS NIEVES</a></h6>
                                                        <span class="fs-14">(pendiente)</span>
                                                    </div>
                                                </div>
                                                <span>Agosto 25, 2023, 08:22 AM</span>
                                                <span>RD$: 10,000</span>
                                            </div>
                                            <div id="default_collapse2" class="accordion_body collapse" data-bs-parent="#accordion-two" style="">
                                                <div class="payment-details accordion-body-text">
                                                    <div class="me-3 mb-3">
                                                        <p class="fs-12 mb-2">Balance pendiente</p>
                                                        <span class="font-w500">RD$: 10,000</span>
                                                    </div>
                                                    <div class="me-3 mb-3">
                                                        <p class="fs-12 mb-2">Cuotas pagadas</p>
                                                        <span class="font-w500">5/6</span>
                                                    </div>
                                                    <div class="me-3 mb-3">
                                                        <p class="fs-12 mb-2">Cuotas pendientes</p>
                                                        <span class="font-w500">10</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <span class="text-primary">Total Balance Pendiente:</span> <strong class="text-success">RD$ 519,465.75</strong>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-xxl-6 col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h3 class="card-title">Ingresos</h3>

                        <div>
                            <select class="default-select dashboard-select me-3">
                                <option>2023</option>
                                <option>2021</option>
                                <option>2020</option>
                            </select>

                            <button class="btn btn-primary btn-xxs mt-2"><i class="fa-solid fa-download"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="chartBar2" class="bar-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>