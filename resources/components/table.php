<div class="card p-3">
    <div class="table-responsive">
        <table class="table table-responsive-md">
            <thead>
                <tr>
                    <th style="width:50px;">
                        <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                            <input type="checkbox" class="form-check-input" id="checkAll" required="">
                            <label class="form-check-label" for="checkAll"></label>
                        </div>
                    </th>
                    <th><strong>Estado</strong></th>
                    <th><strong>Fecha</strong></th>
                    <th><strong>Solicitante</strong></th>
                    <th><strong>Monto</strong></th>
                    <th><strong>Cuotas</strong></th>
                    <th><strong>Modalidad</strong></th>
                    <th><strong>No. Identificacion</strong></th>
                    <th><strong>Telefono</strong></th>
                    <th><strong>Aprobado</strong></th>
                    <th><strong>Agentes</strong></th>
                    <th class="text-end"><strong>Operaciones</strong></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                            <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                            <label class="form-check-label" for="customCheckBox2"></label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center"><i class="fa fa-circle text-warning me-1"></i> Pending</div>
                    </td>
                    <td>01 Agosto, 2023</td>
                    <td>
                        <div class="d-flex align-items-center"><img src="images/avatar/2.jpg" class="rounded-lg me-2" width="24" alt=""> <span class="w-space-no">Dra. Juliet</span></div>
                    </td>
                    <td><strong>542.000</strong></td>
                    <td>
                        <div class="d-flex align-items-center"><img src="images/avatar/1.jpg" class="rounded-lg me-2" width="24" alt=""> <span class="w-space-no">Dr. Jackson</span></div>
                    </td>
                    <td>Presencial </td>
                    <td><strong>#AB627S</strong></td>
                    <td><strong>+595 (971) 123-456</strong></td>
                    <td><strong>Lorem Ipsum</strong></td>
                    <td>
                        <div class="d-flex align-items-center"><i class="fa fa-circle text-success me-1"></i> true</div>
                    </td>
                    <td class="text-end">
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                            <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include "resources/components/paginator.php" ?>