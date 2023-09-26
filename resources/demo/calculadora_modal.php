<div class="modal fade" id="theModal" ref="theModal">
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
                <div class="row g-2">

                    <div class="col-12 col-sm-12 col-lg-12 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Monto
                            <span class="text-danger">*</span>
                        </label>

                        <div class="format-slider p-4" style="border-radius: 20px; border: 2px solid var(--primary);">
                            <input class="form-control amount-input" title="Formatted number" id="input-format">
                            <div id="slider-format"></div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-lg-6 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Interes
                            <span class="text-danger">*</span>
                        </label>

                        <input type="text" class="form-control" id="" name="">
                    </div>

                    <div class="col-12 col-sm-12 col-lg-6 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Cuotas
                            <span class="text-danger">*</span>
                        </label>

                        <input type="text" class="form-control" id="" name="">
                    </div>

                </div>

                <div class="row g-2">

                    <div class="col-6 col-sm-12 col-lg-6 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Amortización 
                            <span class="text-danger">*</span>
                        </label>

                        <select class="form-control form-select" name="" id="">
                            <option value="null" selected>Seleccione Amortización ...</option>
                            <option value="0">Disminuir Cuota</option>
                            <option value="1">Cuota Fija</option>
                            <option value="2">Interes Fijo</option>
                            <option value="3">Capital Al Final</option>
                        </select>
                    </div>

                    <div class="col-6 col-sm-12 col-lg-6 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Modalidad
                            <span class="text-danger">*</span>
                        </label>

                        <select class="form-control form-select" name="" id="">
                            <option value="null" selected>Seleccione Modalidad...</option>
                            <option value="0">Diario</option>
                            <option value="1">Semanal</option>
                            <option value="2">Bisemanal</option>
                            <option value="2">Quincenal</option>
                            <option value="2">15 y fin de mes</option>
                            <option value="2">Mensual</option>
                            <option value="2">Anual</option>
                        </select>
                    </div>

                </div>

                <div class="row g-2">

                    <div class="col-6 col-sm-12 col-lg-6 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Primer Pago
                            <span class="text-danger">*</span>
                        </label>

                        <input name="datepicker" class="datepicker-default form-control" id="primer_pago">
                    </div>

                    <div class="col-6 col-sm-12 col-lg-6 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Monto Cuotas
                        </label>

                        <input type="text" class="form-control" id="" name="">
                    </div>

                </div>
            </div>
            <div class="modal-footer p-2 justify-content-between">
                <button class="btn btn-primary btn-xs">
                    <i class="spinner-border spinner-border-sm custom-spinner-sm"></i>
                    Usar Valores
                </button>

                <button class="btn btn-primary btn-xs">
                    <i class="spinner-border spinner-border-sm custom-spinner-sm"></i>
                    Calcular
                </button>
            </div>
        </div>
    </div>
</div>