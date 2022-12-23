<?= $this->extend('template/nav'); ?>


<?= $this->section('content'); ?>

<!-- CONTENT -->
<div class="container mx-auto w-full relative">
    <div class="flex flex-wrap w-full">
        <div class="lg:w-3/4">
            <!-- Welcome Section -->
            <section id="welcome">
                <div class="container mx-auto text-white p-4 w-full">
                    <div class="flex flex-wrap w-full">
                        <div class="p-4 rounded-lg shadow-md bg-comColor mb-5 lg:w-2/3" data-aos="fade-zoom-in" data-aos-duration="1000">
                            <div class="flex flex-wrap">
                                <div class="w-full self-center lg:w-1/2">
                                    <img src="/img/logo.png" class="max-w-full object-cover h-48 w-96">
                                </div>
                                <div class="w-full self-center lg:w-1/2">
                                    <h1 class="text-2xl">Hello, Ferguso!</h1>
                                    <p class="font-light mb-10 text-slate-400">Welcome Back to BeLagu Muziek!</p>
                                    <a href="" class="btn btn-success font-extralight hover:bg-green-600 animate-bounce">Get
                                        Started</a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5 h-56 overflow-y-auto overflow-x-hidden lg:w-1/3 w-full lg:p-4 lg:pt-0 flex flex-wrap">
                            <div class="w-full bg-comColor rounded-lg sticky top-0 z-30 mb-2">
                                <h3 class="float-left pl-2">Top 3 Rated</h3>
                            </div>
                            <?php $i = 1;
                            foreach ($ticket as $t) : $i++; ?>
                                <?php if ($i == 5) {
                                    break;
                                } ?>
                                <a href="/ticket/<?= $t->id_ticket; ?>" id="card-rated-animation" class="p-2 rounded-lg w-full" data-aos="fade-right">
                                    <img src="/img/<?= $t->gambar; ?>" class="max-w-full object-cover h-20 w-38 rounded-3xl float-left">
                                    <div class="float-left pl-4 gap-y-2">
                                        <p class="font-light"><?= character_limiter($t->nama_konser, 10);; ?></p>
                                        <p class="font-light text-sm text-slate-400"><?= $t->jumlah_tiket; ?> Ticket</p>
                                        <p class="font-light text-sm">
                                        <div class="badge badge-accent"><?= $t->nama_local; ?></div>
                                        </p>
                                    </div>
                                </a>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </section>
            <!-- End Welcome Section -->
            <!-- Ticket Section -->
            <section id="ticket">
                <div class="container mx-auto w-full flex flex-wrap">
                    <div class="w-full mx-5 mb-5 overflow-auto flex flex-wrap indicator">
                        <a href="#" class="float-left text-white hover:text-slate-400 pr-4">Your
                            Location!</a>
                        <?php foreach ($local as $l) : ?>
                            <a href="/rating/<?= $l['id_local'] ?>" class="float-left hover:text-white pr-5"><?= $l['nama_local']; ?></a>
                        <?php endforeach; ?>
                    </div>
                    <?php foreach ($ticket as $t) : ?>
                        <a href="/ticket/<?= $t->id_ticket; ?>" id="card-ticket-animation" class="card card-compact w-48 bg-base-100 shadow-xl mx-5 mb-5 items" data-aos="zoom-in">
                            <figure><img src="/img/<?= $t->gambar; ?>" alt="Gambar Festival" /></figure>
                            <div class="card-body">
                                <h3 class="text-white"><?= $t->nama_konser; ?></h3>
                                <p class="text-slate-400 text-xs"><?= $t->nama_local; ?></p>
                                <p class="text-slate-400 text-xs"><?= date("d M Y", strtotime($t->tgl)) ?></p>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </section>
            <!-- End Ticket Section -->
        </div>

        <div class="lg:w-1/4 p-4">
            <section id="konser-new">
                <div class="container">
                    <div class="p-4 mb-5 rounded-lg shadow-md w-full bg-comColor overflow-auto h-128 z-40 text-white" data-aos="fade-up" data-aos-duration="1000">
                        <div class="container mx-auto w-full flex flex-wrap">
                            <h3 class="float-left mb-2">Closest Concert Date</h3>
                            <table class="w-full text-sm text-left text-gray-400">
                                <tbody>
                                    <?php foreach ($ticket as $t) : ?>
                                        <a href="/ticket/<?= $t->id_ticket; ?>">
                                            <tr class="border-b bg-comColor border-slate-700 hover:bg-slate-500">
                                                <td class="flex items-center py-4 font-medium whitespace-nowrap text-white">
                                                    <img class="w-10 h-10 rounded-full" src="/img/<?= $t->gambar; ?>" alt="Jese image">
                                                    <div class="pl-3">
                                                        <div class="text-sm"><?= $t->nama_konser; ?></div>
                                                        <p class="text-xs text-slate-400"><?= $t->tgl; ?></p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </a>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>