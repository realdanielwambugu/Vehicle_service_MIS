<?php require_once view('includes/header'); ?>

<body class="bgColor-2">

    <main class="fx fx-j-btw ff-pri">
        <div class="w-1/5">
            <?php require_once view('client/includes/sidebar'); ?>
        </div>

         <div class="w-10/12">

            <div class="h-16">
                <?php require_once view('client/includes/topnavbar'); ?>
            </div>

            <div class="w-11/12 h-48 m-0-auto mt-10">

                <h3 class="pb-5">
                   <i class="fa fa-calendar"></i> Appointment Details
                </h3>

                <div class="bgColor-1 py-4">

                    <div class="w-9/12 pl-4">

                        <table class="w-full border b-solid b-color-3 border-collapse">
                            <tr>
                                <th class="border b-solid b-color-3 p-2 txt-h-l">
                                    S.No:
                                </th>
                                <td class="border b-solid b-color-3 p-2 txt-h-l">
                                    <?= $appointment->id ?>
                                </td>
                            </tr>

                            <tr>
                                <th class="border b-solid b-color-3 p-2 txt-h-l">
                                    Client Name
                                </th>
                                <td class="border b-solid b-color-3 p-2 txt-h-l">
                                    <?= $appointment->user->fullName ?>
                                </td>
                            </tr>

                            <tr>
                                <th class="border b-solid b-color-3 p-2 txt-h-l">
                                    Client Email:
                                </th>
                                <td class="border b-solid b-color-3 p-2 txt-h-l">
                                    <?= $appointment->user->email ?>
                                </td>
                            </tr>

                            <tr>
                                <th class="border b-solid b-color-3 p-2 txt-h-l">
                                    Vehicle Reg.No:
                                </th>
                                <td class="border b-solid b-color-3 p-2 txt-h-l">
                                    <?= $appointment->vehicle_reg_no ?>
                                </td>
                            </tr>

                            <tr>
                                <th class="border b-solid b-color-3 p-2 txt-h-l">
                                    Vehicle Brand:
                                </th>
                                <td class="border b-solid b-color-3 p-2 txt-h-l">
                                    <?= $appointment->vehicle_brand ?>
                                </td>
                            </tr>

                            <tr>
                                <th class="border b-solid b-color-3 p-2 txt-h-l">
                                    Vehicle Model:
                                </th>
                                <td class="border b-solid b-color-3 p-2 txt-h-l">
                                    <?= $appointment->vehicle_model ?>
                                </td>
                            </tr>

                            <tr>
                                <th class="border b-solid b-color-3 p-2 txt-h-l">
                                    Service Date:
                                </th>
                                <td class="border b-solid b-color-3 p-2 txt-h-l">
                                    <?= $appointment->service_date ?>
                                </td>
                            </tr>

                            <tr>
                                <th class="border b-solid b-color-3 p-2 txt-h-l">
                                    Service Time:
                                </th>
                                <td class="border b-solid b-color-3 p-2 txt-h-l">
                                    <?= $appointment->service_time ?>
                                </td>
                            </tr>



                            <form class="" action="index.html" method="post">

                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        Admin Remarks:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <textarea class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                        focus:b-color-sec outline-0" rows="5" type="text" name="remarks" disabled>

                                        <?= $appointment->remarks ?>

                                    </textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        Serviced By:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <?= $appointment->mechanic->fullName ?? '' ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        Service Charge:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <?= $appointment->service_charge ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        Parts Charge:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <?= $appointment->parts_charge ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        Additional Charges:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <?= $appointment->additional_charges ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        Status:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <?= $appointment->status ?? 'pending' ?>
                                    </td>
                                </tr>

                            </form>
                        </table>
                    </div>

                </div>
        </div>
    </main>

</body>

<?php require_once view('includes/footer'); ?>
