<div class="card">
    <div class="card-header d-flex justify-content-between p-2 m-2">
        <h6 class="mt-2">
            <i class="fa-regular fa-handshake"></i>
            Nuevo Prestamo
        </h6>

        <button class="btn btn-xs btn-primary" data-bs-toggle="modal" data-bs-target="#theModal">
            <i class="fa-solid fa-calculator me-2"></i>

            Amortización
        </button>

    </div>

    <div class="card-body pt-3 pb-3 pe-3 ps-3">

        <div class="row g-2">

            <div class="col-6 col-sm-12 col-lg-3 mb-2">
                <label for="">
                    <i class="icon"></i>
                    Cliente
                </label>

                <select class="form-control form-select" name="" id="">
                    <option value="null" selected>Seleccione cliente...</option>
                    <option value="0">Cliente 1</option>
                </select>
            </div>

            <div class="col-6 col-sm-12 col-lg-3 mb-2">
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

            <div class="col-6 col-sm-12 col-lg-3 mb-2">
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

            <div class="col-6 col-sm-12 col-lg-3 mb-2">
                <label for="">
                    <i class="icon"></i>
                    Monto a prestar
                    <span class="text-danger">*</span>
                </label>

                <input type="text" class="form-control" id="" name="">
            </div>

        </div>

        <div class="row g-2">

            <div class="col-6 col-sm-12 col-lg-3 mb-2">
                <label for="">
                    <i class="icon"></i>
                    Cuotas
                    <span class="text-danger">*</span>
                </label>

                <input type="text" class="form-control" id="" name="">
            </div>

            <div class="col-6 col-sm-12 col-lg-3 mb-2">
                <label for="">
                    <i class="icon"></i>
                    % Interes Mensual
                    <span class="text-danger">*</span>
                </label>

                <input type="text" class="form-control" id="" name="">
            </div>

            <div class="col-6 col-sm-12 col-lg-3 mb-2">
                <label for="">
                    <i class="icon"></i>
                    Monto Cuotas
                </label>

                <input type="text" class="form-control" id="" name="">
            </div>

            <div class="col-6 col-sm-12 col-lg-3 mb-2">
                <label for="">
                    <i class="icon"></i>
                    Caja
                </label>

                <select class="form-control form-select" name="" id="">
                    <option value="null" selected>Seleccione caja...</option>
                    <option value="0">Caja 1</option>
                </select>
            </div>

        </div>

        <hr>

        <div class="row g-2">

            <div class="col-6 col-sm-12 col-lg-3 mb-2">
                <label for="">
                    <i class="icon"></i>
                    Fecha
                    <span class="text-danger">*</span>
                </label>

                <input name="datepicker" class="datepicker-default form-control" id="fecha">
            </div>

            <div class="col-6 col-sm-12 col-lg-3 mb-2">
                <label for="">
                    <i class="icon"></i>
                    Fecha Primer Pago
                    <span class="text-danger">*</span>
                </label>

                <input name="datepicker" class="datepicker-default form-control" id="primer_pago">
            </div>

            <div class="col-6 col-sm-12 col-lg-2 mb-2">
                <label for="">
                    <i class="icon"></i>
                    Codigo de Referencia
                </label>

                <input type="text" class="form-control" id="" name="">
            </div>

            <div class="col-6 col-sm-12 col-lg-2 mb-2">
                <label for="">
                    <i class="icon"></i>
                    Gastos Legales
                </label>

                <input type="text" class="form-control" id="" name="">
            </div>

            <div class="col-12 col-sm-12 col-lg-2 mb-2">
                <label for="">
                    <i class="icon"></i>
                    % de Mora
                </label>

                <input type="text" class="form-control" id="" name="">
            </div>

        </div>

        <div class="row g-2">

            <div class="col-6 col-sm-12 col-lg-3 mb-2">
                <label for="">
                    <i class="icon"></i>
                    % de Comision
                </label>

                <input type="text" class="form-control" id="" name="">
            </div>

            <div class="col-6 col-sm-12 col-lg-3 mb-2">
                <label for="">
                    <i class="icon"></i>
                    Cartera
                </label>

                <select class="form-control form-select" name="" id="">
                    <option value="null" selected>Seleccione cartera...</option>
                    <option value="0">Cartera 1</option>
                </select>
            </div>

            <div class="col-6 col-sm-12 col-lg-3 mb-2">
                <label for="">
                    <i class="icon"></i>
                    Monto Seguro
                </label>

                <input type="text" class="form-control" id="" name="">
            </div>

            <div class="col-6 col-sm-12 col-lg-3 mb-2">
                <label for="">
                    <i class="icon"></i>
                    Inicial
                </label>

                <input type="text" class="form-control" id="" name="">
            </div>
        </div>

        <hr>

        <h6 class="text-center text-primary mt-4">CO-DEUDOR</h6>

        <div class="row g-2">

            <div class="col-8 col-sm-12 col-lg-3 mb-2">
                <label for="">
                    <i class="icon"></i>
                    Nombres
                </label>

                <input type="text" class="form-control" id="" name="">
            </div>

            <div class="col-4 col-sm-12 col-lg-3 mb-2">
                <label for="">
                    <i class="icon"></i>
                    Nro. Identif.
                </label>

                <input type="text" class="form-control" id="" name="">
            </div>

            <div class="col-12 col-sm-12 col-lg-3 mb-2">
                <label for="">
                    <i class="icon"></i>
                    Telefono
                </label>

                <input type="text" class="form-control" id="" name="">
            </div>

            <div class="col-12 col-sm-12 col-lg-3 mb-2">
                <label for="">
                    <i class="icon"></i>
                    Direccion
                </label>

                <input type="text" class="form-control" id="" name="">
            </div>
        </div>
    </div>

    <div class="card-footer d-flex justify-content-between pt-2 pb-2">
        <small class="me-auto mt-2">
            <i>Campos con (<i class="text-danger">*</i>) son obligatorios.</i>
        </small>

        <button class="btn btn-primary btn-xs">
            <i class="spinner-border spinner-border-sm custom-spinner-sm"></i>
            <i class="bi bi-check2-circle"></i>
            Guardar
        </button>
    </div>

</div>

<?php include "resources/demo/calculadora_modal.php" ?>