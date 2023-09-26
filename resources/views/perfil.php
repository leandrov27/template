<div class="row">
    <div class="col-xl-9 col-xxl-12">
        <div class="card">

            <div class="card-header d-flex justify-content-between p-2 m-2">
                <h6 class="mt-2">
                    <i class="fa-regular fa-user"></i>
                    Mi Perfil
                </h6>

            </div>

            <div class="card-body pt-4 pb-0">

                <div class="row g-2">
                    <div class="text-center mb-2 mt-0">
                        <div>
                            <small> Haz <strong class="text-primary">click en la imagen</strong> para seleccionar una firma digital</small>

                            <br />

                            <label class="mt-2" for="file">
                                <img src="images/qr.png" class="img-fluid rounded-circle rounded-image" draggable="false" style="width: 120px;" />
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
                            Nombres
                        </label>

                        <input type="text" class="form-control" id="" name="">
                    </div>

                    <div class="col-6 col-sm-12 col-lg-3 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Apellidos
                        </label>

                        <input type="text" class="form-control" id="" name="">
                    </div>

                    <div class="col-12 col-sm-12 col-lg-3 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Correo
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

                    <div class="col-6 col-sm-12 col-lg-3 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Color de UI
                        </label>

                        <select class="form-control form-select" name="" id="">
                            <option value="null" selected>Seleccione caja...</option>
                            <option value="0" selected>#49b5ac</option>
                            <option value="1">#212d3e</option>
                        </select>
                    </div>

                    <div class="col-6 col-sm-12 col-lg-3 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Caja por Defecto
                        </label>

                        <select class="form-control form-select" name="" id="">
                            <option value="null" selected>Seleccione caja...</option>
                            <option value="0" selected>Ninguna</option>
                        </select>
                    </div>

                    <div class="col-12 col-sm-12 col-lg-3 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Usuario
                        </label>

                        <input type="text" class="form-control" id="" name="">
                    </div>

                    <div class="col-12 col-sm-12 col-lg-3 mb-2">
                        <label for="">
                            <i class="icon"></i>
                            Actualizar Contrasenha
                        </label>

                        <input type="password" class="form-control" id="" name="" value="password">
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

    </div>
</div>