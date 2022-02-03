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
                   <i class="fa fa-calendar"></i> Mechanic Details
                </h3>

                <div class="bgColor-1 py-4">

                    <div class="w-9/12 pl-4 mb-10">

                        <form id="update_form" action="update_mechanic" method="post">

                        <table class="w-full border b-solid b-color-3 border-collapse">

                               <input type="hidden" name="mechanic_id" value="<?= $mechanic->id ?>">
                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        National ID:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                        focus:b-color-sec outline-0"
                                        type="text" name="national_id" value="<?= $mechanic->national_id ?>">
                                    </td>
                                </tr>

                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        FullName:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                        focus:b-color-sec outline-0"
                                        type="text" name="fullName" value="<?= $mechanic->fullName ?>">
                                    </td>
                                </tr>

                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        Title:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                        focus:b-color-sec outline-0"
                                        type="text" name="title" value="<?= $mechanic->title ?>">
                                    </td>
                                </tr>

                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        Email:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                        focus:b-color-sec outline-0"
                                        type="text" name="email" value="<?= $mechanic->email ?>">
                                    </td>
                                </tr>

                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        gender:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">
                                        <select class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                        focus:b-color-sec outline-0"
                                        type="text" name="gender" disabled>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </td>

                                    <tr>
                                        <th class="border b-solid b-color-3 p-2 txt-h-l">
                                            Joined On:
                                        </th>
                                        <td class="border b-solid b-color-3 p-2 txt-h-l">
                                            <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                            focus:b-color-sec outline-0"
                                            type="text" disabled value="<?= $mechanic->created_at ?>">
                                        </td>
                                    </tr>
                                </tr>

                                <tr>
                                    <th class="border b-solid b-color-3 p-2 txt-h-l">
                                        Update mechanic details:
                                    </th>
                                    <td class="border b-solid b-color-3 p-2 txt-h-l">

                                        <p id="response"  class="w-full txt-h-c pb-1"></p>

                                        <div class="w-full  fx fx-j-btw">
                                            <button id="update_btn" class="bgColor-pri
                                            rounded-full px-5 py-3 color-1 border-0 fw-500
                                            hover:bgColor-sec-700 outline-0 pointer rounded fs-sm"
                                            type="button" name="button"
                                            onclick="(new Ajax).form('update_form')
                                                               .loader('update_btn')
                                                               .flush('response')
                                                               .send();">
                                                Update now
                                            </button>

                                            <a href="delete_mechanic/<?= $mechanic->id ?>" class="bgColor-sec
                                            rounded-full px-5 py-3 color-1 border-0 fw-500 no-line
                                            hover:bgColor-sec-700 outline-0 pointer rounded fs-sm">
                                                Remove Mechanic
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                        </table>
                    </form>

                    </div>

                </div>
        </div>
    </main>

</body>

<?php require_once view('includes/footer'); ?>
