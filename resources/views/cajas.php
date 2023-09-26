<?php $data = 10; ?>

<div class="card">
    <div class="card-header d-flex justify-content-between p-2 m-2">
        <h6 class="mt-2">
            <i class="fa-solid fa-cash-register"></i>
            Cajas
        </h6>

        <button class="btn btn-xs btn-primary" data-bs-toggle="modal" data-bs-target="#registrar_caja_modal">
            <i class="fa-solid fa-cash-register me-2"></i>

            Registrar Caja
        </button>
    </div>

    <div class="card-body pt-3 pb-3 pe-3 ps-3">

        <?php include "resources/components/filters.php" ?>

        <?php

            if ($data > 0) {

                include "resources/demo/cajas_table.php";

            } else {

                echo '<div class="card ps-3 pt-3 pe-3">';

                    include "resources/components/alert.php";

                echo '</div>';
            }

        ?>

    </div>

</div>

<?php include "resources/demo/cajas_modal.php" ?>