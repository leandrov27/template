<div class="row">
    <div v-for="role in roles.data" :key="role.id" class="col-sm-4 col-md-4 col-lg-4">
        <div class="card border bordered p-3 animated fadeIn">
            <h6 class="d-flex justify-content-between align-items-center">
                <span class="text-primary">
                    <i class="fa-solid fa-wallet"></i>

                    Cartera 1

                    <span class="badge bg-info rounded-pill">
                        2 Prestamos
                    </span>
                </span>

                <span class="badge bg-primary rounded-pill">
                    RD$ 50.000
                </span>
            </h6>

            <small class="text-muted">
                <i class="fi fi-rr-calendar"></i>

                F. Creación: <strong class="text-primary">Sept. 25, 2023</strong>
            </small>

            <div class="d-flex justify-content-end align-items-center">
                <a href="ver-cartera" class="btn btn-primary light btn-xs sharp me-2">
                    <i class="fas fa-eye"></i>
                </a>

                <button class="btn btn-danger light btn-xs sharp me-1">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
        </div>
    </div>

    <?php include "resources/components/paginator.php" ?>
</div>