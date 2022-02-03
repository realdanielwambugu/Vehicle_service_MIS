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

            <div class="w-11/12 h-48 m-0-auto mt-10 ">

                <h3 class="pb-5">
                   <i class="fa fa-question-circle"></i> Enquiry Details
                </h3>

                <div class="bgColor-1 py-4">

                    <div class="w-10/12 pl-4 mb-10">

                        <form id="update_form" action="update_enquiry" method="post">

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

                                <input type="hidden" name="enquiry_id" value="<?= $enquiry->id ?>">
                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        Status:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <select class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                        focus:b-color-sec outline-0"
                                        type="text" name="status">
                                            <option value="<?= $enquiry->status ?>">
                                                <?= $enquiry->status ?? 'pending' ?>
                                            </option>
                                            <option value="answered">Answered</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        Admin Response:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <textarea class="w-full rounded b-color-sec-300 border-2 p-0
                                        focus:b-color-sec outline-0" rows="8" type="text" name="response" >

                                        <?= $enquiry->response ?>

                                    </textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        Send a response:
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
                                                Send now
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
