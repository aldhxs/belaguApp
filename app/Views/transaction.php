<?= $this->extend('template/nav'); ?>


<?= $this->section('content'); ?>

<!-- CONTENT -->
<div class="container mx-auto w-full relative">
    <div class="flex flex-wrap w-full p-4 mb-5">
        <div class="w-full mb-5">
            <p class="text-white">Transaction History</p>
        </div>
        <div class="overflow-x-auto w-full">
            <table class="table w-full">
                <!-- head -->
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Ticket Name</th>
                        <th>Transaction Date</th>
                        <th>Transaction Code</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <?php $i = 1;
                    foreach ($transaction as $tr) : ?>
                        <tr class="hover">
                            <th><?= $i++; ?></th>
                            <td><?= $tr->nama_konser; ?></td>
                            <td><?= $tr->tgl; ?></td>
                            <td><label for="my-modal-3" class="btn btn-primary"><?= $tr->kode; ?></label></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php foreach ($transaction as $tr) : ?>
    <input type="checkbox" id="my-modal-3" class="modal-toggle" />
    <div class="modal modal-bottom sm:modal-middle">
        <div class="modal-box lg:w-20">
            <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
            <h3 class="font-bold text-lg mb-5">QR Code</h3>
            <img id='barcode' src="https://api.qrserver.com/v1/create-qr-code/?data=<?= $tr->kode; ?>&amp;size=500x500" alt="" title="Invoice Pembayaran" width="500" height="500" />
        </div>
    </div>
<?php endforeach; ?>
<?= $this->endSection('content'); ?>