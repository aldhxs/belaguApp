<?= $this->extend('template/login-nav'); ?>


<?= $this->section('content'); ?>
<div class="mx-auto w-full h-screen bg-opacity-80 bg-slate-800">
    <div class="flex flex-wrap w-full h-screen">
        <div class="lg:w-1/4">

        </div>
        <div class="lg:w-1/2">
            <!-- Sign In Section -->
            <section id="sign-in">
                <div class="container mx-auto text-white p-10 w-full mt-10 mb-10">
                    <div class="flex flex-wrap w-full">
                        <div class="p-10 w-full text-center">
                            <div class="flex flex-wrap">
                                <div class="w-full">
                                    <h1 class="text-2xl">Sign Up</h1>
                                    <p class="font-light text-slate-400">Buat Akun Disini</p>
                                    <input type="text" placeholder="Email" class="input w-full max-w-xs my-7 rounded-full" />
                                    <input type="password" placeholder="Password" class="input w-full max-w-xs mb-7 rounded-full" />
                                    <a href="" class="btn btn-success font-extralight hover:bg-green-600 w-full max-w-xs rounded-full">Sign
                                        Up</a>

                                    <div class="mt-2">
                                        <p class="text-slate-400">Have Account? <a href="/" class="text-white hover:text-thirdColor">Sign In</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Sign In Section -->
        </div>

    </div>
</div>
<?= $this->endSection(); ?>