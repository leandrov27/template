<?php $data = 10; ?>

<div class="card">
    <div class="card-header d-flex justify-content-between p-2 m-2">
        <h6 class="mt-2">
            <i class="fa-solid fa-location-dot"></i>
            Rutas
        </h6>

        <button class="btn btn-xs btn-primary" data-bs-toggle="modal" data-bs-target="#registrar_rutas_modal">
            <i class="fa-solid fa-location-dot me-2"></i>

            Nueva Ruta
        </button>
    </div>

    <div class="card-body pt-3 pb-3 pe-3 ps-3">

        <?php

            if ($data > 0) {

                include "resources/demo/rutas_table.php";

            } else {

                echo '<div class="card ps-3 pt-3 pe-3">';

                    include "resources/components/alert.php";

                echo '</div>';
            }

        ?>

    </div>

</div>

<?php include "resources/demo/rutas_modal.php" ?>