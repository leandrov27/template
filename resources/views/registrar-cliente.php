<div class="row">
    <div class="col-xl-9 col-xxl-12">
        <div class="card">

            <div class="card-body pt-4 pb-0">

                <div class="row g-2">
                    <div class="text-center mb-2 mt-0">
                        <div>
                            <small> Haz <strong class="text-primary">click en la imagen</strong> para seleccionar.</small>

                            <br />

                            <label class="mt-2" for="file">
                                <img src="images/profile/profile.png" class="img-fluid rounded-circle rounded-image" draggable="false" style="width: 120px;" />
                            </label>

                            <input class="d-none" type="file" ref="file" id="file" />

                            <span class="badge rounded-pill bg-danger position-absolute text-white reset animated fadeInLeft" style="cursor: pointer;">
                                <i class="bi-x"></i>
                            </span>
                        </div>

                    </div>

                </div>

                <div class="row g-2">

                    <div class="col-6 col-sm-12 col-lg-3 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Tipo
                            <span class="text-danger">*</span>
                        </label>

                        <select class="form-control form-select" name="" id="">
                            <option value="null" selected>Seleccione tipo...</option>
                            <option value="0">Persona</option>
                            <option value="1">Empresa</option>
                            <option value="2">Vehiculo</option>
                        </select>
                    </div>

                    <div class="col-6 col-sm-12 col-lg-3 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Nombre
                            <span class="text-danger">*</span>
                        </label>

                        <input type="text" class="form-control" id="" name="">
                    </div>

                    <div class="col-6 col-sm-12 col-lg-3 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Apellido
                            <span class="text-danger">*</span>
                        </label>

                        <input type="text" class="form-control" id="" name="">
                    </div>

                    <div class="col-6 col-sm-12 col-lg-3 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            No. Identificación
                            <span class="text-danger">*</span>
                        </label>

                        <input type="text" class="form-control" id="" name="">
                    </div>

                </div>

                <div class="row g-2">

                    <div class="col-6 col-sm-12 col-lg-3 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Genero
                        </label>

                        <select class="form-control form-select" name="" id="">
                            <option value="null" selected>Seleccione genero...</option>
                            <option value="0">Masculino</option>
                            <option value="1">Femenino</option>
                            <option value="2">Otro</option>
                        </select>
                    </div>

                    <div class="col-6 col-sm-12 col-lg-3 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Nacionalidad
                        </label>

                        <select class="form-control form-select" name="" id="">
                            <option value="null" selected>Seleccione nacionalidad...</option>
                            <option value="0">Paraguayo</option>
                            <option value="1">Argentino</option>
                            <option value="2">Cubano</option>
                        </select>
                    </div>

                    <div class="col-12 col-sm-12 col-lg-3 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Celular
                            <span class="text-danger">*</span>
                        </label>

                        <input type="text" class="form-control" id="" name="">
                    </div>

                    <div class="col-12 col-sm-12 col-lg-3 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Teléfono
                            <span class="text-danger">*</span>
                        </label>

                        <input type="text" class="form-control" id="" name="">
                    </div>

                </div>

                <hr>

                <div class="row g-2">

                    <div class="col-6 col-sm-12 col-lg-3 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Vivienda
                        </label>

                        <select class="form-control form-select" name="" id="">
                            <option value="null" selected>Seleccione vivienda...</option>
                            <option value="0">Propia</option>
                            <option value="1">Alquiler</option>
                            <option value="2">Familiar</option>
                            <option value="3">Otra</option>
                        </select>
                    </div>

                    <div class="col-6 col-sm-12 col-lg-3 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Situacion Laboral
                        </label>

                        <select class="form-control form-select" name="" id="">
                            <option value="null" selected>Seleccione...</option>
                            <option value="0">Empleado</option>
                            <option value="1">Desempleado</option>
                            <option value="2">Estudiante</option>
                            <option value="3">Independiente</option>
                            <option value="4">Pensionado</option>
                            <option value="5">Otro</option>
                        </select>
                    </div>

                    <div class="col-6 col-sm-12 col-lg-3 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Estado Civil
                        </label>

                        <select class="form-control form-select" name="" id="">
                            <option value="null" selected>Seleccione...</option>
                            <option value="0">Soltero</option>
                            <option value="1">Casado</option>
                            <option value="2">Union Libre</option>
                            <option value="3">Divorciado</option>
                            <option value="4">Viudo</option>
                        </select>
                    </div>

                    <div class="col-6 col-sm-12 col-lg-3 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Ingreso
                        </label>

                        <input type="text" class="form-control" id="" name="">
                    </div>

                </div>

                <hr />

                <div class="row g-2">

                    <div class="col-12 col-sm-12 col-lg-5 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Direccion
                        </label>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="" name="">
                            <button class="btn btn-primary" type="button">
                                <i class="fa-solid fa-location-dot"></i>
                                Geolocalizacion
                            </button>
                        </div>

                    </div>

                    <div class="col-12 col-sm-12 col-lg-5 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Direccion 2
                        </label>

                        <input type="text" class="form-control" id="" name="">
                    </div>

                    <div class="col-6 col-sm-12 col-lg-2 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Codigo Postal
                        </label>

                        <input type="text" class="form-control" id="" name="">
                    </div>

                    <div class="col-6 col-sm-12 col-lg-2 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Fecha de Nacimiento
                        </label>

                        <input name="datepicker" class="datepicker-default form-control" id="datepicker">

                    </div>

                    <div class="col-12 col-sm-12 col-lg-3 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Correo
                        </label>

                        <input type="text" class="form-control" id="" name="">
                    </div>

                    <div class="col-6 col-sm-12 col-lg-3 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Ruta
                        </label>

                        <select class="form-control form-select" name="" id="">
                            <option value="null" selected>Seleccione ruta...</option>
                            <option value="0">Persona</option>
                            <option value="1">Empresa</option>
                            <option value="2">Vehiculo</option>
                        </select>
                    </div>

                    <div class="col-6 col-sm-12 col-lg-4 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Dependientes
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
                    Registrar Cliente
                </button>
            </div>

        </div>

    </div>
</div>

<div class="row g-2">
    <div class="col-xl-6 col-xxl-6">

        <div class="card">
            <div class="d-flex justify-content-between p-2 m-2">
                <h6 class="mt-2">
                    <i class="icon"></i>
                    Adjuntos
                </h6>

                <button class="btn btn-xs btn-primary">
                    <i class="fa-solid fa-plus"></i>
                    Agregar
                </button>
            </div>
        </div>
    </div>

    <div class="col-xl-9 col-xxl-6">

        <div class="card">
            <div class="d-flex justify-content-between p-2 m-2">
                <h6 class="mt-2">
                    <i class="icon"></i>
                    Referencias
                </h6>

                <button class="btn btn-xs btn-primary" data-bs-toggle="modal" data-bs-target="#theModal">
                    <i class="fa-solid fa-plus"></i>
                    Agregar
                </button>
            </div>
        </div>
    </div>
</div>

<?php include "resources/demo/referencia_modal.php" ?>