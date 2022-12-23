<?= $this->extend('template/nav'); ?>


<?= $this->section('content'); ?>
<!-- content -->

<div class="container mx-auto w-full relative">
    <div class="flex flex-wrap w-full">
        <!-- Ticket Section -->
        <section id="ticket">
            <div class="container mx-auto w-full flex flex-wrap">
                <div class="w-full mx-5 mb-5 overflow-auto flex flex-wrap indicator">
                    <a href="#" class="float-left text-white hover:text-slate-400 pr-4">Your
                        Location!</a>
                    <?php foreach ($local as $l) : ?>
                        <a href="/rating/<?= $l['id_local']; ?>" class="float-left hover:text-white pr-5"><?= $l['nama_local']; ?></a>
                    <?php endforeach; ?>
                </div>

                <?php foreach ($rating as $r) : ?>
                    <a href="/ticket/<?= $r->id_ticket; ?>" id="card-ticket-animation" class="card card-compact w-52 bg-base-100 shadow-xl mx-5 mb-5 items" data-aos="zoom-in">
                        <figure><img src="/img/<?= $r->gambar; ?>" alt="Gambar Festival" /></figure>
                        <div class="card-body">
                            <h3 class="text-white"><?= $r->nama_konser; ?></h3>
                            <p class="text-slate-400 text-xs"><?= $r->nama_local; ?></p>
                            <p class="text-slate-400 text-xs"><?= date("d M Y", strtotime($r->tgl)) ?></p>
                            <div class="badge badge-accent"><?= $r->jumlah_tiket; ?> Ticket</div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>
        <!-- End Ticket Section -->
    </div>
</div>

<?= $this->endSection('content'); ?>