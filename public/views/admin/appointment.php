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

                <h3 class="pb-5">
                   <i class="fa fa-calendar"></i> Appointment Details
                </h3>

                <div class="bgColor-1 py-4">

                    <div class="w-9/12 pl-4 mb-10">
                        <form id="update_form" action="update_appointment" method="post">

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

                               <input type="hidden" name="appointment_id" value="<?= $appointment->id ?>">
                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        Admin Remarks:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <textarea class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                        focus:b-color-sec outline-0" rows="5" type="text" name="admin_remarks"></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        Serviced By:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <select class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                        focus:b-color-sec outline-0"
                                        type="text" name="mechanic_id">

                                        <option value="<?= $appointment->id ?>"><?= $appointment->mechanic->fullName ?? ''  ?></option>

                                        <?php foreach (App\Models\Mechanic::all() as $mechanic): ?>

                                            <option value="<?= $mechanic->id ?>"><?= $mechanic->fullName  ?></option>

                                        <?php endforeach; ?>

                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        Service Charge:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                        focus:b-color-sec outline-0"
                                        type="text" name="service_charges" value="<?= $appointment->service_charges ?>">
                                    </td>
                                </tr>

                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        Parts Charge:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                        focus:b-color-sec outline-0"
                                        type="text" name="parts_charges" value="<?= $appointment->parts_charges ?>">
                                    </td>
                                </tr>

                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        Additional Charges:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                        focus:b-color-sec outline-0"
                                        type="text" name="additional_charges" value="<?= $appointment->additional_charges ?>">
                                    </td>
                                </tr>

                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        Status:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <select class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                        focus:b-color-sec outline-0"
                                        type="text" name="status">
                                            <option value="<?= $appointment->status ?>">
                                                <?= $appointment->status ?>
                                            </option>
                                            <option value="accepted">Accepted</option>
                                            <option value="rejected">Rejected</option>
                                            <option value="completed">Completed</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        Update Service Request:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">

                                        <p id="response"  class="w-full txt-h-c pb-1"></p>

                                        <div class="w-1/3 m-0-auto">

                                            <button id="update_btn" class="bgColor-pri
                                            rounded-full px-5 py-3 color-1 border-0 fw-500
                                            hover:bgColor-sec-700 outline-0 pointer rounded fs-sm"
                                            type="button" name="button"
                                            onclick="(new Ajax).form('update_form')
                                                               .loader('update_btn')
                                                               .flush('response')
                                                               .send();">
                                                Update now
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                        </table>
                    </form>

                    </div>

                </div>
        </div>
    </main>

</body>

<?php require_once view('includes/footer'); ?>
