<?php require_once view('includes/header'); ?>

<body class="bgColor-2">

    <div style=' background-image:url("<?= basePath() ?>/public/assets/images/bg_4.jpg")'
    class="bg-no-repeat bg-cover color-1">

       <?php require_once view('includes/top_navbar'); ?>

        <div class="w-full bgColor-3-700">
           <div class="w-10/12 m-0-auto fx fx-j-a">

               <div class="w-1/2 mt-8 ff-pri">
                   <div class="w-10/12 m-0-auto ls-wide lh-relaxed">
                       <div class="py-2">
                           <h2 class="color-pri"> OUR SERVICES.</h2>
                           <h2 class="color-1">WE CARE ABOUT YOUR CAR.</h2>
                       </div>

                       <h3 class="py-4"><?= app_name() ?> .
                           Onstop Shop For All Auto Repairs</h3>
                       <p class="color ">
                           We are your full service automotive repair shop. We proudly service
                           all makes and models, minor and major repairs. We take all major insurance
                           and work to make the process as simple as possible for you
                       </p>

                       <h3 class="py-4">
                           Check Our Affordable Services List Below.
                        </h3>
                   </div>
               </div>

               <div class="w-1/2 h-auto">
                    <img class="w-full h-full "
                    src="<?= images_path('img_2.jpg') ?>" alt="mechanic">
               </div>
           </div>
       </div>

    </div>

     <div class="w-10/12 m-0-auto txt-h-c ls-wide lh-relaxed pb-10">
         <h2 class="color-pri py-8">WHAT WE OFFER.</h2>
         <div class="w-full fx fx-j-a">

            <?php foreach ($services as $service): ?>

                <div class="w-1/4 bgColor-1 ml-2 px-2 py-4 ">
                    <h3 class="color-pri"> <?= $service->name ?> </h3>
                    <div class="w-full h-auto py-2">
                         <img class="w-full h-full "
                         src="<?= images_path('service/' . $service->photo ) ?>"
                         alt="mechanic">
                    </div>
                    <p>
                        <?= $service->description ?>
                     </p>
                </div>

            <?php endforeach; ?>

         </div>
     </div>

     <?php require_once view('includes/bottom_nav'); ?>

</body>

<?php require_once view('includes/footer'); ?>
