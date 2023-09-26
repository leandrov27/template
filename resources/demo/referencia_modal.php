<div class="modal fade" id="theModal" ref="theModal">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i>modal_icon</i>
                    modal_title
                </h5>
                <button type="button" class="btn-close rounded" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body pt-2 pb-0">
                <div class="row g-2">

                    <div class="col-5 col-sm-12 col-lg-5 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Tipo
                            <span class="text-danger">*</span>
                        </label>

                        <select class="form-control form-select" name="" id="">
                            <option value="null" selected>Seleccione tipo...</option>
                            <option value="0">Personal</option>
                            <option value="1">Comercial</option>
                        </select>
                    </div>

                    <div class="col-7 col-sm-12 col-lg-7 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Nombre Completo
                            <span class="text-danger">*</span>
                        </label>

                        <input type="text" class="form-control" id="" name="">
                    </div>

                    <div class="col-12 col-sm-12 col-lg-6 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Telefono
                            <span class="text-danger">*</span>
                        </label>

                        <input type="text" class="form-control" id="" name="">
                    </div>

                    <div class="col-12 col-sm-12 col-lg-6 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Parentesco
                            <span class="text-danger">*</span>
                        </label>

                        <select class="form-control form-select" name="" id="">
                            <option value="null" selected>Seleccione parentesco...</option>
                            <option value="0">Padre</option>
                            <option value="1">Hijo</option>
                        </select>
                    </div>

                </div>

            </div>
            <div class="modal-footer p-2 justify-content-center">
                <button class="btn btn-primary btn-xs">
                    <i class="spinner-border spinner-border-sm custom-spinner-sm"></i>
                    <i class="bi bi-check2-circle"></i>
                    Guardar
                </button>
            </div>
        </div>
    </div>
</div>