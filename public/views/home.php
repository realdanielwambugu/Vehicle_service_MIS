<?php require_once view('includes/header'); ?>

<body class="bgColor-2">

    <div style=' background-image:url("<?= basePath() ?>/public/assets/images/bg_4.jpg")'
    class="bg-no-repeat bg-cover color-1">

       <?php require_once view('includes/top_navbar'); ?>

        <div class="w-full bgColor-3-700">
           <div class="w-10/12 m-0-auto fx fx-j-a">
               <div class="w-1/2 h-auto">
                    <img class="w-full h-full "
                    src="<?= images_path('img_1.jpg') ?>" alt="mechanic">
               </div>

               <div class="w-1/2 mt-8 ff-pri">
                   <div class="w-10/12 m-0-auto ls-wide lh-relaxed">
                       <div class="py-2 fx">
                           <h2 class="color-1">HIGH QUALITY</h2>
                           <h2 class="color-pri pl-2">CAR MAINTAINCE</h2>
                       </div>

                       <h3 class="py-4">Welcome to our <?= app_name() ?> .
                           The best Car repair service.</h3>
                       <p class="color ">
                           We are full service automotive repair shop, providing complete
                           automotive repair solutions to our customers. Make your
                           car last longer and attractive.
                       </p>

                       <div class="py-6 mt-3">
                           <a  href="/signup" class="w-full bgColor-pri rounded py-3 color-1 px-4
                           border-0 fw-bold hover:bgColor-pri-700 outline-0 pointer no-line">
                           Schedule Appointment
                           </a>
                       </div>
                   </div>
               </div>
           </div>
       </div>

    </div>

     <div class="w-10/12 m-0-auto txt-h-c ls-wide lh-relaxed pb-10">
         <h2 class="color-pri py-8">WHY CHOOSE US?</h2>
         <div class="w-full fx fx-j-a">
            <div class="w-1/4 bgColor-1 ml-2 px-2 py-4 ">
                <h3 class="color-pri">Our Experience</h3>
                <div class="w-full h-auto py-2">
                     <img class="w-full h-full "
                     src="<?= images_path('w1.jpg') ?>" alt="mechanic">
                </div>
                <p>
                    The mechanics at our shop have over 35 years of experience between them.
                    They are dedicated to providing high-quality repairs to keep you safe and
                    happy. Honest quality service is our top priority.
                 </p>
            </div>

            <div class="w-1/4 bgColor-1 ml-2 px-2 py-4 ">
                <h3 class="color-pri">Best Price Guarantee</h3>
                <div class="w-full h-auto py-2">
                     <img class="w-full h-full "
                     src="<?= images_path('w2.png') ?>" alt="mechanic">
                </div>
                <p>
                    Whether you're coming in for a routine inspection or a repair service,
                    we promise that you will be completely satisfied with our work
                 </p>
            </div>

            <div class="w-1/4 bgColor-1 ml-2 px-2 py-4 ">
                <h3 class="color-pri">Easy Access</h3>
                <div class="w-full h-auto py-2">
                     <img class="w-full h-full "
                     src="<?= images_path('w3.jpg') ?>" alt="mechanic">
                </div>
                <p>
                    Booking appointments at our mechanic shop is easy as doing 2-3 clicks.
                 </p>
            </div>

            <div class="w-1/4 bgColor-1 ml-2 px-2 py-4 ">
                <h3 class="color-pri">QUALITY PROMISE</h3>
                <div class="w-full h-auto py-2">
                     <img class="w-full h-full "
                     src="<?= images_path('w5.png') ?>" alt="mechanic">
                </div>
                <p>
                     We clearly communicate with the customer to make sure all
                     necessary repairs are explained and accurately quoted. Our shop only uses parts
                     from reputable brands to ensure that your vehicle is always ready to drive.
                 </p>
            </div>
         </div>
     </div>

     <?php require_once view('includes/bottom_nav'); ?>

</body>

<?php require_once view('includes/footer'); ?>
