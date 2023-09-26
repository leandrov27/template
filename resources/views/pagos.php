<?php $data = 10; ?>

<div class="card h-auto">
    <div class="card-header d-flex justify-content-between p-2 m-2">
        <h6 class="mt-2">
            <i class="fa-solid fa-dollar-sign"></i>

            Pagos
        </h6>

        <span class="badge badge-xs badge-primary">15 de 392</span>

    </div>

    <div class="card-body pt-3 pb-3 pe-3 ps-3">

        <?php include "resources/components/filters.php" ?>

        <?php

            if ($data > 0) {

                include "resources/demo/pagos_table.php";

            } else {

                echo '<div class="card ps-3 pt-3 pe-3">';

                    include "resources/components/alert.php";

                echo '</div>';
            }

        ?>

    </div>

</div>