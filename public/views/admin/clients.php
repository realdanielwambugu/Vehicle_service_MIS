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
                       <i class="fa fa-users"></i> users List
                    </h3>
                    <!-- <a href="/user" class="no-line">
                      <h4><i class="fa fa-plus"></i> Add New user</43>
                    </a> -->
                </div>

                <div class="bgColor-1 py-4">

                    <div class="w-11/12 m-0-auto">
                        <table class="w-full table-auto bgColor-trans border-separate">
                            <thead>
                                <tr>
                                    <th class=" py-2 color-pri">S.NO</th>
                                    <th class=" py-2 color-pri">FullName</th>
                                    <th class=" py-2 color-pri">Email Address</th>
                                    <th class=" py-2 color-pri">Phone Number</th>
                                    <th class=" py-2 color-pri">Reg Date</th>
                                    <th class=" py-2 color-pri">Status</th>
                                    <th class=" py-2 color-pri">type</th>
                                </tr>
                            </thead>

                            <tbody class="txt-h-c">

                                <?php foreach ($users as $user): ?>

                                <tr class="bgColor-1 border-0 shadow">
                                    <td class="py-1 color-sec-800 border-0"> <?= $user->id ?> </td>
                                    <td class="py-1 color-sec-800 border-0"> <?= $user->fullName ?> </td>
                                    <td class="py-1 color-sec-800 border-0"> <?= $user->email ?> </td>
                                    <td class="py-1 color-sec-800 border-0"> <?= $user->phone ?> </td>
                                    <td class="py-1 color-sec-800 border-0"> <?= $user->created_at ?> </td>
                                    <td class="py-1 color-sec-800 border-0"> <?= $user->status ?> </td>
                                    <td class="py-1 color-sec-800 border-0"> <?= $user->type ?> </td>
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
