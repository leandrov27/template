<?php $data = 10; ?>

<div class="card">
    <div class="card-header d-flex justify-content-between p-2 m-2">
        <h6 class="mt-2">
            <i class="fa-regular fa-user"></i>
            Clientes
        </h6>

        <a href="registrar-cliente" class="btn btn-xs btn-primary">
            <i class="fa-regular fa-user me-2"></i>

            Registrar Cliente
        </a>

    </div>

    <div class="card-body pt-0 pb-3 pe-3 ps-3">

        <div class="d-flex justify-content-center mb-3">
            <div class="btn-group">
                <button type="button" class="btn btn-primary light px-3"><i class="fa-solid fa-list"></i></button>
                <button type="button" class="btn btn-primary light px-3"><i class="fa-solid fa-table-columns"></i></button>
            </div>
        </div>

        <?php include "resources/components/filters.php" ?>

        <?php

            if ($data > 0) {

                include "resources/demo/clientes_table.php";
            } else {

                echo '<div class="card ps-3 pt-3 pe-3">';

                    include "resources/components/alert.php";

                echo '</div>';
            }

        ?>

    </div>

</div>