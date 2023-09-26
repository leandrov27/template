<?php $data = 10; ?>

<div class="card">
    <div class="card-header d-flex justify-content-between p-2 m-2">
        <h6 class="mt-2">
            <i class="fa-regular fa-comment"></i>
            Solicitudes
        </h6>

        <a href="registrar-solicitud" class="btn btn-xs btn-primary">
            <i class="fa-regular fa-comment me-2"></i>

            Nueva Solicitud

        </a>

    </div>

    <div class="card-body pt-3 pb-3 pe-3 ps-3">

        <?php include "resources/components/filters.php" ?>

        <?php

            if ($data > 0) {

                include "resources/demo/solicitudes_table.php";

            } else {

                echo '<div class="card ps-3 pt-3 pe-3">';

                    include "resources/components/alert.php";

                echo '</div>';
            }

        ?>

    </div>

</div>