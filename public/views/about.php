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
                           <h2 class="color-pri"> ABOUT US.</h2>
                       </div>

                       <p>
                           <?= app_name() ?> has grown up to be one of the most
                            reputable Motor Vehicle Workshops in Nairobi County
                            with proven track record in Motor vehicle and
                            Machinery repairs.
                       </p>

                       <p class="pt-2">
                          The <?= app_name() ?> focuses heavily on training for our technicians
                          and management to ensure that we provide you with cutting-edge diagnostic and
                          repair work and the best customer service in the business.
                      </p>

                      <p class="py-2">
                          When your car is out of commission, you want only industry experts working on it who will
                          ensure your vehicle is in pristine condition so you can safely get back on the road.
                          Below are our experienced professionals.
                      </p>

                   </div>
               </div>

               <div class="w-1/2 h-auto">
                    <img class="w-full h-full "
                    src="<?= images_path('img_3.jpg') ?>" alt="mechanic">
               </div>
           </div>
       </div>

    </div>

     <div class="w-10/12 m-0-auto txt-h-c ls-wide lh-relaxed pb-10">
         <h2 class="color-pri py-8">OUR EXPERTS</h2>
         <div class="w-full fx fx-j-a">

            <?php foreach ($mechanics as $mechanic): ?>

                <div class="w-1/5 bgColor-1 ml-2 px-2 py-4 ">
                    <div class="w-full h-auto py-2">
                         <img class="w-full h-full "
                         src="<?= images_path('mechanic/' . $mechanic->photo) ?>" alt="mechanic">
                    </div>
                    <h3 class="color-pri"> <?= $mechanic->fullName ?> </h3>
                    <h4> <?= $mechanic->title ?>  </h4>
                </div>

            <?php endforeach; ?>
            
         </div>
     </div>

     <?php require_once view('includes/bottom_nav'); ?>

</body>

<?php require_once view('includes/footer'); ?>
