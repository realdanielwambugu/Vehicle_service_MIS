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
                       <i class="fa fa-user-plus"></i> Mechanics
                    </h3>
                    <a href="/mechanic" class="no-line">
                      <h4><i class="fa fa-plus"></i> Add New Mechanic</43>
                    </a>
                </div>

                <div class="bgColor-1 py-4">

                    <div class="w-11/12 m-0-auto">
                        <table class="w-full table-auto bgColor-trans border-separate">
                            <thead>
                                <tr>
                                    <th class=" py-2 color-pri">S.NO</th>
                                    <th class=" py-2 color-pri">FullName</th>
                                    <th class=" py-2 color-pri">Title</th>
                                    <th class=" py-2 color-pri">Gender</th>
                                    <th class="py-2 color-pri">Action</th>
                                </tr>
                            </thead>

                            <tbody class="txt-h-c">

                                <?php foreach ($mechanics as $mechanic): ?>

                                <tr class="bgColor-1 border-0 shadow">
                                    <td class="py-1 color-sec-800 border-0"> <?= $mechanic->id ?> </td>
                                    <td class="py-1 color-sec-800 border-0"> <?= $mechanic->fullName ?> </td>
                                    <td class="py-1 color-sec-800 border-0"> <?= $mechanic->title ?></td>
                                    <td class="py-1 color-sec-800 border-0"> <?= $mechanic->gender ?> </td>
                                    <td class="px-2 py-1 color-pri">
                                        <a href="/mechanic/<?= $mechanic->id ?>" class="no-line">
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
