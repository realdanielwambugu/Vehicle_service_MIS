<div class="w-full h-16 bgColor-1 ff-pri fixed">
    <div class="w-10/12 h-16 m-0-auto fx fx-j-btw fx-i-c">
         <h2 class="color-sec">Adminstrator Area</h2>
         <div class="fx fx-i-c">
            <div class="w-8 h-8">
                <img class="w-full h-full cover"
                src="<?= images_path("default/" . auth()->user()->photo); ?>"
                alt="logged_in_user_pic">
            </div>
            <h3 class="px-2"> <?= auth()->user()->fullName ?></h3>
         </div>
    </div>
</div>
