<?php require_once view('includes/header'); ?>

<body class="bgColor-2">

    <main class="fx fx-j-btw ff-pri">

        <div class="w-1/5">
            <?php require_once view('admin/includes/sidebar'); ?>
        </div>

        <div class="w-10/12">

            <div class="h-16">
                <?php require_once view('admin/includes/topnavbar'); ?>
            </div>

            <div class="w-11/12 h-48 m-0-auto mt-10">

                <div class="fx fx-j-btw">
                    <h3 class="pb-5">
                       <i class="fa fa-calendar"></i> Appointment History
                    </h3>
                </div>

                <div class="bgColor-1 py-4">

                    <div class="w-11/12 m-0-auto">
                        <table class="w-full table-auto bgColor-trans border-separate">
                            <thead>
                                <tr>
                                    <th class=" py-2 color-pri">S.NO</th>
                                    <th class=" py-2 color-pri">Client</th>
                                    <th class=" py-2 color-pri">Service</th>
                                    <th class=" py-2 color-pri">Vehicle REG.NO</th>
                                    <th class=" py-2 color-pri">Service Date</th>
                                    <th class=" py-2 color-pri">Service Time</th>
                                    <th class=" py-2 color-pri">Action</th>
                                </tr>
                            </thead>

                            <tbody class="txt-h-c">

                                <?php foreach ($appointments as $appointment): ?>

                                <tr class="bgColor-1 border-0 shadow">

                                    <td class="py-1 color-sec-800 border-0"> <?= $appointment->id ?> </td>
                                    <td class="py-1 color-sec-800 border-0"> <?= $appointment->user->fullName ?> </td>
                                    <td class="py-1 color-sec-800 border-0"> <?= $appointment->service->name ?> </td>
                                    <td class="py-1 color-sec-800 border-0"> <?= $appointment->vehicle_reg_no ?> </td>
                                    <td class="py-1 color-sec-800 border-0"> <?= $appointment->service_date ?> </td>
                                    <td class="py-1 color-sec-800 border-0"> <?= $appointment->service_time ?> </td>
                                    <td class="py-1 color-pri">
                                        <a href="/appointment/<?= $appointment->id ?>" class="no-line">
                                            view details
                                        </a>
                                    </td>
                                </tr>

                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>

               </div>
            </div>
        </div>
    </main>

</body>

<?php require_once view('includes/footer'); ?>
