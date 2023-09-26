<div class="modal fade" id="registrar_gasto_modal" ref="registrar_gasto_modal">
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

                    <div class="col-6 col-sm-6 col-lg-6 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Fecha
                            <span class="text-danger">*</span>
                        </label>

                        <input name="datepicker" class="datepicker-default form-control" id="datepicker">
                    </div>

                    <div class="col-6 col-sm-6 col-lg-6 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Categoria
                        </label>

                        <select class="form-control form-select" name="" id="">
                            <option value="null" selected>Seleccione Forma de Pago...</option>
                            <option value="0">Ninguna</option>
                            <option value="1">Comestible</option>
                            <option value="2">Gastos Diversos</option>
                            <option value="3">Nomina</option>
                        </select>
                    </div>

                    <div class="col-6 col-sm-6 col-lg-6 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Concepto
                            <span class="text-danger">*</span>
                        </label>

                        <input class="form-control" id="" name="">
                    </div>

                    
                    <div class="col-6 col-sm-6 col-lg-6 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Caja
                        </label>

                        <select class="form-control form-select" name="" id="">
                            <option value="null" selected>Seleccione Caja...</option>
                            <option value="0" selected>Ninguna</option>
                        </select>
                    </div>

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

                    <div class="col-12 col-sm-12 col-lg-12 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Comentario
                        </label>

                        <textarea class="form-control" rows="2" id="comment"></textarea>
                    </div>

                </div>

            </div>
            <div class="modal-footer p-2 justify-content-center">
                <button class="btn btn-primary btn-xs">
                    <i class="spinner-border spinner-border-sm custom-spinner-sm"></i>
                    Guardar
                </button>
            </div>
        </div>
    </div>
</div>