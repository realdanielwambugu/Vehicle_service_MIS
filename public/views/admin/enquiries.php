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
                       <i class="fa fa-question-circle"></i> Enquiry History
                    </h3>
<!--
                    <a href="/enquiry" class="no-line">
                      <h4><i class="fa fa-plus"></i> Submit New Enquiry</43>
                    </a> -->
                </div>

                <div class="bgColor-1 py-4">

                    <div class="w-11/12 m-0-auto">
                        <table class="w-full table-auto bgColor-trans border-separate">
                            <thead>
                                <tr>
                                    <th class="py-2 color-pri">S.NO</th>
                                    <th class="py-2 color-pri">Client Name</th>
                                    <th class="py-2 color-pri">Client Email</th>
                                    <th class="py-2 color-pri">Enquiry Subject</th>
                                    <th class="py-2 color-pri">Date</th>
                                    <th class="py-2 color-pri">Action</th>
                                </tr>
                            </thead>

                            <tbody class="txt-h-c">

                                <?php foreach ($enquiries as $enquiry): ?>

                                <tr class="bgColor-1 border-0 shadow">

                                    <td class="py-1 color-sec-800 border-0"> <?= $enquiry->id ?> </td>
                                    <td class="py-1 color-sec-800 border-0"> <?= $enquiry->user->fullName ?> </td>
                                    <td class="py-1 color-sec-800 border-0"> <?= $enquiry->user->email ?> </td>
                                    <td class="py-1 color-sec-800 border-0"> <?= $enquiry->subject ?> </td>
                                    <td class="py-1 color-sec-800 border-0"> <?= $enquiry->created_at ?> </td>
                                    <td class="px-2 py-1 color-pri">
                                        <a href="/enquiry/<?= $enquiry->id ?>" class="no-line">
                                            Open Message
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
