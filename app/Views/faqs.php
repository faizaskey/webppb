<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<section class="layanan">
    <div class="container pb-5">
        <h1 class="text-uppercase mb-5 text-center">frequently asked question</h1>
        <div class="row">
            <div class="col-md-12">
                <?php foreach ($data_faqs as $faq) : ?>
                    <h2 class="h2"><?= $faq['question'] ?></h2>
                    <p><?= $faq['answer'] ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</section>


<?= $this->endSection() ?>