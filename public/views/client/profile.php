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
                   <i class="fa fa-user"></i> My Account Details.
                </h3>

                <div class="w-full bgColor-1 py-4">

                    <form id="update_form" class="w-11/12 fx fx-j-btw m-0-auto txt-h-l"
                        action="update_profile" method="post">
                        <div class="w-7/12">

                            <div class="w-11/12 fw-600 mb-2">
                                <label for="Full" class="block py-2 fs-sm color-sec-600">Full Name</label>
                                <div class="bgColor-sec-200 py-2 px-2">
                                    <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                    focus:b-color-sec outline-0"
                                    type="text" name="fullName" value="<?= $user->fullName ?>">
                                </div>
                            </div>

                            <div class="w-11/12 fw-600 mb-2">
                                <label for="phone" class="block py-2 fs-sm color-sec-600">Phone Number</label>
                                <div class="bgColor-sec-200 py-2 px-2">
                                    <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                    focus:b-color-sec outline-0"
                                    type="text" name="phone" value="<?= $user->phone ?>">
                                </div>
                            </div>

                            <div class="w-11/12 fw-600 mb-2">
                                <label for="email" class="block py-2 fs-sm color-sec-600">Email</label>
                                <div class="bgColor-sec-200 py-2 px-2">
                                    <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                    focus:b-color-sec outline-0"
                                    type="text" name="email" value="<?= $user->email ?>">
                                </div>
                            </div>

                        </div>
                        <div class="w-6/12 pt-4">

                            <div class="w-11/12 fw-600 mb-2">
                                <label for="status" class="block py-2 fs-sm color-sec-600">Status</label>
                                <div class="bgColor-sec-200 py-2 px-2">
                                    <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                    focus:b-color-sec outline-0"
                                    type="text" name="status" value="<?= $user->status ?>" disabled>
                                </div>
                            </div>
                            <div class="fw-600 mb-2">
                                <label for="Name" class="block py-2 fs-sm color-sec-600">New Password</label>
                                <div class="bgColor-sec-200 py-2 px-2">
                                    <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                    focus:b-color-sec outline-0"
                                    type="text" name="password" placeholder="eg: 123456">
                                </div>
                            </div>

                            <div class="fw-600 mb-2">
                                <label for="confirmPassword" class="block py-2 fs-sm color-sec-600">Confirm Password</label>
                                <div class="bgColor-sec-200 py-2 px-2">
                                    <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                    focus:b-color-sec outline-0"
                                    type="text" name="confirmPassword" placeholder="eg: 123456">
                                </div>
                            </div>

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
                                    Update account
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
