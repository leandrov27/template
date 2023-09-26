<div class="d-flex flex-column flex-lg-row">
    <div class="mb-3 me-lg-3 flex-grow-1">
        <div class="input-group input-primary">
            <i class="input-group-text bi-search"></i>

            <input class="form-control text-primary search" type="search" name="search" autocomplete="off" placeholder="Buscar..." />
        </div>
    </div>

    <div class="d-flex flex-row justify-content-center mb-3">
        <div class="dropdown filterDropdown mt-2 me-3">
            <button type="button" class="btn btn-primary light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true">
                <span class="badge badge-primary badge-xs">0</span>

                <i class="bi-filter me-1"></i>

                <b class="caret m-l-5"></b>
            </button>

            <div class="dropdown-menu text-center" style="width: 300px" data-popper-placement="bottom-end">
                <h6 class="text-primary mt-2">
                    <i class="fa-solid fa-filter"></i>
                    Filtros Disponibles
                </h6>

                <hr />

                <div class="row px-3">
                    <div class="col-sm-12 mb-3">
                        <small class="text-primary">Estado</small>
                        <select class="form-control form-select">
                            <option value="0" selected>Pendiente</option>
                            <option value="1">Aprobado</option>
                            <option value="2">Rechazado</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>

        <div v-if="activeFiltersCount > 0" class="mt-2 animated fadeIn">
            <button @click="$emit('reset')" type="button" class="btn light btn-danger fw-bold">
                <i class="bi-trash3"></i>

                Limpiar Filtros
            </button>
        </div>
    </div>
</div>