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
                   <i class="fa fa-calendar"></i> Enquiry Details
                </h3>

                <div class="bgColor-1 py-4">

                    <div class="w-9/12 pl-4">
                        <table class="w-full border b-solid b-color-3 border-collapse">
                            <tr>
                                <th class="border b-solid b-color-3 p-2 txt-h-l">
                                    S.NO:
                                </th>
                                <td class="py-1 color-sec-800 border-0">
                                    <?= $enquiry->id ?>
                                </td>
                            </tr>

                            <tr>
                                <th class="border b-solid b-color-3 p-2 txt-h-l">
                                    Subject:
                                </th>
                                <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <?= $enquiry->subject ?>
                                </td>
                            </tr>

                            <tr>
                                <th class="border b-solid b-color-3 p-2 txt-h-l">
                                    Submission Date:
                                </th>
                                <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <?= $enquiry->created_at ?>
                                </td>
                            </tr>

                            <tr>
                                <th class="border b-solid b-color-3 p-2 txt-h-l">
                                    Status:
                                </th>
                                <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <?= $enquiry->status ?? 'pending' ?>
                                </td>
                            </tr>

                            <tr>
                                <th class="border b-solid b-color-3 p-2 txt-h-l">
                                    Message:
                                </th>
                                <td class="border b-solid b-color-3 p-2 txt-h-l">
                                    <textarea class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                    focus:b-color-sec outline-0" rows="5" type="text" name="desription" disabled>

                                    <?= $enquiry->description ?>

                                </textarea>
                                </td>
                            </tr>

                            <tr>
                                <th class="border b-solid b-color-3 p-2 txt-h-l">
                                    Admin Response:
                                </th>
                                <td class="border b-solid b-color-3 p-2 txt-h-l">
                                    <textarea class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                    focus:b-color-sec outline-0" rows="5" type="text" name="response" disabled>

                                    <?= $enquiry->response ?>

                                </textarea>
                                </td>
                            </tr>

                        </table>
                    </div>

                </div>
        </div>
    </main>

</body>

<?php require_once view('includes/footer'); ?>
