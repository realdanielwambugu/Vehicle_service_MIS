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
                   <i class="fa fa-wrench"></i> New Service.
                </h3>

                <div class="w-full bgColor-1 py-4">

                    <form id="service" class="w-11/12 fx fx-j-btw m-0-auto txt-h-l"
                        action="service" method="post">
                        <div class="w-7/12">

                            <div class="w-11/12 fw-600 mb-2">
                                <label for="name" class="block py-2 fs-sm color-sec-600">Service Name</label>
                                <div class="bgColor-sec-200 py-2 px-2">
                                    <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                    focus:b-color-sec outline-0"
                                    type="text" name="name">
                                </div>
                            </div>

                            <div class="w-11/12 fw-600 mb-2">
                                <label for="charge" class="block py-2 fs-sm color-sec-600">Average Charge</label>
                                <div class="bgColor-sec-200 py-2 px-2">
                                    <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                    focus:b-color-sec outline-0"
                                    type="text" name="charge">
                                </div>
                            </div>

                            <div class="w-11/12 fw-600 mb-2">
                                <label for="photo" class="block py-2 fs-sm color-sec-600">Photo</label>
                                <div class="bgColor-sec-200 py-2 px-2">
                                    <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                    focus:b-color-sec outline-0"
                                    type="file" name="photo">
                                </div>
                            </div>
                        </div>

                        <div class="w-7/12">

                            <div class="w-11/12 fw-600 mb-2">
                                <label for="charge" class="block py-2 fs-sm color-sec-600">Description</label>
                                <div class="bgColor-sec-200 py-2 px-2">
                                    <textarea class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                    focus:b-color-sec outline-0" rows="8" type="text" name="description"></textarea>
                                </div>
                            </div>

                            <p id="response"  class="w-full txt-h-c pb-1"></p>

                            <div class="w-1/3 m-0-auto">
                                <button id="btn" class="bgColor-pri
                                rounded-full px-5 py-3 color-1 border-0 fw-500
                                hover:bgColor-sec-700 outline-0 pointer rounded fs-sm"
                                type="button" name="button"
                                onclick="(new Ajax).form('service')
                                                   .loader('btn')
                                                   .flush('response')
                                                   .send();">
                                    Add Service
                                </button>
                            </div>

                        </div>

                    </form>

               </div>
            </div>
        </div>
    </main>

</body>

<?php require_once view('includes/footer'); ?>
