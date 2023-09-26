<div class="modal fade" id="agregar_pago_modal" ref="agregar_pago_modal">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i>moda_icon</i>
                    modal_title
                </h5>
                <button type="button" class="btn-close rounded" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2 pb-0">

                <div class="btn-group d-flex justify-content-center p-0" role="presentation">
                    <button type="button" class="btn btn-primary" onclick="showTab('tablist1')" aria-selected="true" role="tab">Cuota Completa</button>
                    <button type="button" class="btn btn-primary" onclick="showTab('tablist2')" aria-selected="false" role="tab" tabindex="-1">Abono Capital</button>
                    <button type="button" class="btn btn-primary" onclick="showTab('tablist3')" aria-selected="false" role="tab" tabindex="-1">Pago Parcial</button>
                </div>

                <div class="custom-tab-1 p-0">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="tablist1" role="tabpanel">
                            <div class="row g-2 pt-2">
                                <div class="col-6 col-sm-12 col-lg-6 mb-2">
                                    <select class="form-control form-select" name="" id="">
                                        <option value="0">1 Cuota Pendiente</option>
                                        <option value="1">2 Cuotas Pendientes</option>
                                    </select>

                                    <div class="form-check toggle-switch text-end form-switch ms-2">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Solo Interes</label>
                                        <input checked="" class="form-check-input switch" type="checkbox" id="flexSwitchCheckDefault">
                                    </div>
                                </div>

                                <div class="col-6 col-sm-12 col-lg-6 mb-2">
                                    <input name="datepicker" class="datepicker-default form-control" id="datepicker">
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="tablist2" role="tabpanel">
                            <div class="row g-2 pt-2">
                                <div class="col-6 col-sm-12 col-lg-6 mb-2">
                                    <select class="form-control form-select" name="" id="">
                                        <option value="0">Abono Capital</option>
                                        <option value="1">2 Capital Actual</option>
                                    </select>
                                </div>

                                <div class="col-6 col-sm-12 col-lg-6 mb-2">
                                    <input name="datepicker" class="datepicker-default form-control" id="datepicker">
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="tablist3" role="tabpanel">
                            <div class="row g-2 pt-2">
                                <div class="col-6 col-sm-12 col-lg-6 mb-2">
                                    <select class="form-control form-select" name="" id="">
                                        <option value="0">Parcial</option>
                                        <option value="1">Interes</option>
                                        <option value="2">Pendiente</option>
                                    </select>

                                    <div class="form-check toggle-switch text-end form-switch ms-2">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Cerrar Cuota</label>
                                        <input checked="" class="form-check-input switch" type="checkbox" id="flexSwitchCheckDefault">
                                    </div>
                                </div>

                                <div class="col-6 col-sm-12 col-lg-6 mb-2">
                                    <input name="datepicker" class="datepicker-default form-control" id="datepicker">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <hr class="m-0">

                <div class="d-flex justify-content-between align-items-center text-center ps-2 pe-2 pt-2 pb-2">
                    <div class="user-info">
                        <h6 class="fs-16 font-w600 mb-0">Pendiente</h6>
                        <span class="badge light badge-primary">RD$ <strong>1.275</strong></span>
                    </div>

                    <div class="user-info">
                        <h6 class="fs-16 font-w600 mb-0">Cuota</h6>
                        <span class="badge light badge-primary">RD$ <strong>1.280</strong></span>
                    </div>

                    <div class="user-info">
                        <h6 class="fs-16 font-w600 mb-0">Interes</h6>
                        <span class="badge light badge-primary">RD$ <strong>135.323</strong></span>
                    </div>

                </div>

                <div class="format-slider p-4" style="border-radius: 20px; border: 2px solid var(--primary);">
                    <input class="form-control amount-input" title="Formatted number" id="input-format">
                    <div id="slider-format"></div>
                </div>

                <div class="row g-2">

                    <div class="col-6 col-sm-12 col-lg-6 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Mora
                        </label>

                        <input type="text" class="form-control" name="" id="" value="RD$ 2,688">
                    </div>

                    <div class="col-6 col-sm-12 col-lg-6 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Descuento
                        </label>

                        <input type="text" class="form-control" name="" id="" value="0">
                    </div>

                    <div class="col-12 col-sm-12 col-lg-6 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Forma de Pago
                            <span class="text-danger">*</span>
                        </label>

                        <select class="form-control form-select" name="" id="">
                            <option value="null" selected>Seleccione Forma de Pago...</option>
                            <option value="0">Efectivo</option>
                            <option value="1">Transferencia</option>
                            <option value="2">Deposito</option>
                            <option value="3">Tarjeta</option>
                        </select>
                    </div>

                    <div class="col-12 col-sm-12 col-lg-6 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Caja
                            <span class="text-danger">*</span>
                        </label>

                        <select class="form-control form-select" name="" id="">
                            <option value="null" selected>Seleccione Caja...</option>
                            <option value="0" selected>Ninguna</option>
                        </select>
                    </div>

                    <div class="col-12 col-sm-12 col-lg-12 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Comentario
                        </label>

                        <textarea class="form-control" rows="2" id="comment"></textarea>
                    </div>

                    <div class="col-12 col-sm-12 col-lg-12 mb-2">
                        <label for="formFileSm" class="form-label">
                            <i class="icon"></i>
                            Adjuntar
                        </label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>
                </div>

            </div>
            <div class="modal-footer p-2 justify-content-between">

                <strong class="text-success"><strong class="text-dark">Total: </strong>RD$ 519,465.75</strong>

                <button class="btn btn-primary btn-xs">
                    <i class="spinner-border spinner-border-sm custom-spinner-sm"></i>
                    Agregar Pago
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function showTab(tabId) {
        // Hide all tabs
        document.querySelectorAll(".tab-pane").forEach((tab) => {
            tab.classList.remove("active", "show");
        });

        // Show the selected tab
        document.getElementById(tabId).classList.add("active", "show");
    }
</script>