<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>


<section class="layanan">
    <div class="container">
        <h1 class="text-uppercase text-center">contact us</h1>
        <form action="" class="form">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">
                            <h3>Name*</h3>
                        </label>
                        <input type="email" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">
                            <h3>Email*</h3>
                        </label>
                        <input type="email" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email">
                            <h3>Subject*</h3>
                        </label>
                        <input type="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">
                            <h3>Message*</h3>
                        </label>
                        <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Kirim" class="btn btn-primary w-100">
                    </div>


                </div>
            </div>
        </form>
    </div>
</section>


<?= $this->endSection() ?>