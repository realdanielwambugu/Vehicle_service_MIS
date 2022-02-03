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
                   <i class="fa fa-question-circle"></i> Submit an enquiry.
                </h3>

                <div class="w-full bgColor-1 py-4">

                    <form id="form" class="w-11/12 fx fx-j-btw m-0-auto txt-h-l"
                        action="enquiry" method="post">
                        <div class="w-7/12">
                           <input type="hidden" name="user_id" value="<?= auth()->id() ?>">
                            <div class="w-11/12 fw-600 mb-2">
                                <label for="subject" class="block py-2 fs-sm color-sec-600">Subject</label>
                                <div class="bgColor-sec-200 py-2 px-2">
                                    <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                    focus:b-color-sec outline-0"
                                    type="text" name="subject">
                                </div>
                            </div>

                            <div class="w-11/12 fw-600 mb-2">
                                <label for="Full" class="block py-2 fs-sm color-sec-600">Message</label>
                                <div class="bgColor-sec-200 py-2 px-2">
                                    <textarea class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                    focus:b-color-sec outline-0" rows="10" type="text" name="description"></textarea>
                                </div>
                            </div>

                            <p id="response"  class="w-full txt-h-c pb-1"></p>

                            <div class="w-1/3 m-0-auto">
                                <button id="btn" class="bgColor-pri
                                rounded-full px-5 py-3 color-1 border-0 fw-500
                                hover:bgColor-sec-700 outline-0 pointer rounded fs-sm"
                                type="button" name="button"
                                onclick="(new Ajax).form('form')
                                                   .loader('btn')
                                                   .flush('response')
                                                   .send();">
                                    Submit now
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
