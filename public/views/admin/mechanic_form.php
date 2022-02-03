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
                   <i class="fa fa-user-plus"></i> Add New Mechanic.
                </h3>

                <div class="w-full bgColor-1 py-4">

                    <form id="mechanic" class="w-11/12 fx fx-j-btw m-0-auto txt-h-l"
                        action="mechanic" method="post">

                        <div class="w-7/12">

                            <div class="w-11/12 fw-600 mb-2">
                                <label for="national_id" class="block py-2 fs-sm color-sec-600">National ID</label>
                                <div class="bgColor-sec-200 py-2 px-2">
                                    <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                    focus:b-color-sec outline-0"
                                    type="number" name="national_id">
                                </div>
                            </div>

                            <div class="w-11/12 fw-600 mb-2">
                                <label for="fullName" class="block py-2 fs-sm color-sec-600">Full Name</label>
                                <div class="bgColor-sec-200 py-2 px-2">
                                    <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                    focus:b-color-sec outline-0"
                                    type="text" name="fullName">
                                </div>
                            </div>

                            <div class="w-11/12 fw-600 mb-2">
                                <label for="title" class="block py-2 fs-sm color-sec-600">Title</label>
                                <div class="bgColor-sec-200 py-2 px-2">
                                    <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                    focus:b-color-sec outline-0"
                                    type="text" name="title">
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
                                <label for="email" class="block py-2 fs-sm color-sec-600">Email</label>
                                <div class="bgColor-sec-200 py-2 px-2">
                                    <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                    focus:b-color-sec outline-0"
                                    type="text" name="email">
                                </div>
                            </div>

                            <div class="w-11/12 fw-600 mb-2">
                                <label for="phone" class="block py-2 fs-sm color-sec-600">Phone Number</label>
                                <div class="bgColor-sec-200 py-2 px-2">
                                    <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                    focus:b-color-sec outline-0"
                                    type="text" name="phone">
                                </div>
                            </div>

                            <div class="w-11/12 fw-600 mb-2">
                                <label for="gender" class="block py-2 fs-sm color-sec-600">Gender</label>
                                <div class="bgColor-sec-200 py-2 px-2">
                                    <select class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                    focus:b-color-sec outline-0"
                                    type="text" name="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>

                            <p id="response"  class="w-full txt-h-c pb-1"></p>

                            <div class="w-1/3 m-0-auto">
                                <button id="btn" class="bgColor-pri
                                rounded-full px-5 py-3 color-1 border-0 fw-500
                                hover:bgColor-sec-700 outline-0 pointer rounded fs-sm"
                                type="button" name="button"
                                onclick="(new Ajax).form('mechanic')
                                                   .loader('btn')
                                                   .flush('response')
                                                   .send();">
                                    Add Mechanic
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
