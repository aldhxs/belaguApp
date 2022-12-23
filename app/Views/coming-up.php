<?= $this->extend('template/nav'); ?>


<?= $this->section('content'); ?>

<!-- CONTENT -->
<div class="container mx-auto w-full relative">
    <div class="flex flex-wrap w-full">
        <!-- Ticket Section -->
        <section id="ticket">
            <div class="container mx-auto w-full flex flex-wrap">
                <div class="w-full mx-5 mb-5">
                    <p class="text-white">Closest Concert Date</p>
                </div>

                <?php foreach ($coming as $c) : ?>
                    <div id="card-ticket-animation" class="card card-compact w-52 bg-base-100 shadow-xl mx-5 mb-5 items" data-aos="zoom-in">
                        <figure><img src="/img/<?= $c->gambar; ?>" alt="Gambar Festival" /></figure>
                        <div class="card-body">
                            <h3 class="text-white"><?= $c->nama_konser; ?></h3>
                            <p class="text-slate-400 text-xs"><?= $c->nama_local; ?></p>
                            <p class="text-slate-400 text-xs"><?= date("d M Y", strtotime($c->tgl)) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <!-- End Ticket Section -->
    </div>
</div>
<?= $this->endSection('content'); ?>