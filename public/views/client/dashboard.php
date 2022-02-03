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
                    <i class="fa fa-home"></i>
                    Client Dashboard
                </h3>

                <div class="w-full bgColor-1">
                    <h3 class="py-4 px-4">
                        Hi! Welcome <span class="color-pri-800">
                        <?= auth()->user()->fullName ?>. </span>
                        This is your <span class="color-pri-800"> <?= app_name() ?>
                        </span> client area.
                   </h3>
               </div>

               <div class="w-full h-56 mt-4">
                    <img class="w-full h-full cover"
                    src="<?= images_path('img_5.png') ?>" alt="mechanic">
               </div>

            </div>
        </div>
    </main>

</body>

<?php require_once view('includes/footer'); ?>
