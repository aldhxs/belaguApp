<?= $this->extend('template/nav'); ?>

<?= $this->section('content'); ?>
<div class="container mx-auto w-full relative">
    <!-- Ticket Section -->
    <section id="ticket">
        <div class="w-full mx-5">
            <p class="text-white text-2xl"><?= $ticket['nama_konser']; ?></p>
        </div>

        <div class="container w-full flex flex-wrap mx-auto p-4">
            <div class="w-full lg:w-1/3 mb-5">
                <figure>
                    <img src="/img/<?= $ticket['gambar']; ?>" alt="Gambar Festival" class="rounded-lg h-56 mb-5" />
                </figure>
                <p class="text-white text-xl mb-5">Waktu Tersisa <i class="fas fa-clock"></i></p>
                <div class="grid grid-flow-col gap-5 text-center auto-cols-max">
                    <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
                        <span class="countdown font-mono text-5xl">
                            <span style="--value:15;"></span>
                        </span>
                        days
                    </div>
                    <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
                        <span class="countdown font-mono text-5xl">
                            <span style="--value:10;"></span>
                        </span>
                        hours
                    </div>
                    <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
                        <span class="countdown font-mono text-5xl">
                            <span style="--value:24;"></span>
                        </span>
                        min
                    </div>
                    <div class="flex flex-col p-2 bg-neutral rounded-box text-neutral-content">
                        <span class="countdown font-mono text-5xl">
                            <span style="--value:0;"></span>
                        </span>
                        sec
                    </div>
                </div>
            </div>
            <div class="p-4 rounded-lg shadow-md bg-comColor mb-5 lg:w-2/3 h-96" data-aos="fade-zoom-in" data-aos-duration="1000">
                <div class="flex flex-wrap">
                    <div class="w-full self-center">
                        <h1 class="text-white text-2xl">Guest Star</h1>
                        <p class="mb-5"><?= $ticket['nama_artist']; ?></p>
                        <table class="w-full text-xl text-left">
                            <tr height="40">
                                <td>
                                    <p class="font-light text-white">Date and Time</p>
                                </td>
                                <td>
                                    <p class="font-light text-slate-400">: <?= date("d M Y", strtotime($ticket['tgl'])) ?></p>
                                </td>
                            </tr>
                            <tr height="40">
                                <td>
                                    <p class="font-light text-white">Location</p>
                                </td>
                                <td>
                                    <p class="font-light text-slate-400">: <?= $ticket['location']; ?></p>
                                </td>
                            </tr>
                            <tr height="40">
                                <td>
                                    <p class="font-light text-white">Local</p>
                                </td>
                                <td>
                                    <p class="font-light text-slate-400">: <?= $ticket['nama_local']; ?></p>
                                </td>
                            </tr>
                            <tr height="40">
                                <td>
                                    <p class="font-light text-white">Genre</p>
                                </td>
                                <td>
                                    <p class="font-light text-slate-400">: <?= $ticket['nama_genre']; ?></p>
                                </td>
                            </tr>
                            <tr height="40">
                                <td>
                                    <p class="font-light text-white">
                                    <div class="badge badge-accent"><?= $ticket['jumlah_tiket']; ?> Ticket</div>
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="mb-5 w-full" data-aos="fade-zoom-in" data-aos-duration="1000" data-aos-offset="0">
                <div class="w-full">
                    <p class="text-white text-xl mb-5">Harga dan Ketentuan</p>
                    <div class="card bg-comColor shadow-xl mb-5">
                        <div class="card-body">
                            <p class="text-white text-2xl">Tiket Regular <button class="btn gap-2">
                                    Tersisa
                                    <div class="badge badge-secondary">342</div>
                                </button></p>
                            <div class="flex flex-wrap">
                                <div class="card-actions justify-start w-1/2 mb-5">
                                    <p class="text-xl">Rp. 80.000</p>
                                </div>
                                <div class="card-actions justify-end w-1/2">
                                    <label for="my-modal-3" class="btn btn-primary">Buy Now</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-comColor shadow-xl mb-5">
                        <div class="card-body">
                            <p class="text-white text-2xl">Tiket Premium <button class="btn gap-2">
                                    Tersisa
                                    <div class="badge badge-secondary">120</div>
                                </button></p>
                            <div class="flex flex-wrap">
                                <div class="card-actions justify-start w-1/2 mb-5">
                                    <p class="text-xl">Rp. 160.000</p>
                                </div>
                                <div class="card-actions justify-end w-1/2">
                                    <label for="my-modal-3" class="btn btn-primary">Buy Now</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-comColor shadow-xl mb-5">
                        <div class="card-body">
                            <p class="text-white text-2xl">Tiket Proplayer <button class="btn gap-2">
                                    Tersisa
                                    <div class="badge badge-secondary">41</div>
                                </button></p>
                            <div class="flex flex-wrap">
                                <div class="card-actions justify-start w-1/2 mb-5">
                                    <p class="text-xl">Rp. 300.000</p>
                                </div>
                                <div class="card-actions justify-end w-1/2">
                                    <label for="my-modal-3" class="btn btn-primary">Buy Now</label>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Ticket Section -->
</div>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="my-modal-3" class="modal-toggle" />
<div class="modal modal-bottom sm:modal-middle">
    <div class="modal-box">
        <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <h3 class="font-bold text-lg mb-5">Choose Payment Method</h3>
        <form action="/transaction/save" method="get">
            <input type="hidden" name="id_ticket" value="<?= $ticket['id_ticket'] ?>">
            <input type="hidden" name="id_ticket" value="<?= $ticket['id_ticket'] ?>">
            <button type="submit" class="py-4 p-4 mb-5 w-full bg-slate-600 rounded-lg text-white hover:bg-slate-500">Gopay</button>
        </form>
        <form action="/transaction/save" method="get">
            <input type="hidden" name="id_ticket" value="<?= $ticket['id_ticket'] ?>">
            <button type="submit" class="py-4 p-4 mb-5 w-full bg-slate-600 rounded-lg text-white hover:bg-slate-500">OVO</button>
        </form>
        <form action="/transaction/save" method="get">
            <input type="hidden" name="id_ticket" value="<?= $ticket['id_ticket'] ?>">
            <button type="submit" class="py-4 p-4 mb-5 w-full bg-slate-600 rounded-lg text-white hover:bg-slate-500">Dana</button>
        </form>
    </div>
</div>

<?= $this->endSection('content'); ?>