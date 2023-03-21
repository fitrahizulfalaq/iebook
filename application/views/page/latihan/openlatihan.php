<!-- App Capsule -->
<div id="appCapsule">

    <div class="section mt-2">
        <h1>
            <?= $link["judul-" . substr($this->uri->segment("3"), "0", "1")] ?>
        </h1>
    </div>
    <?php if (substr($this->uri->segment("3"), "2", "1") != "3") { ?>
        <div class="section mt-2">
            <iframe src="https://docs.google.com/forms/d/e/<?= $link[$this->uri->segment("3")] ?>/viewform?embedded=true" width="100%" height="597" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            <hr>
        </div>
    <?php } else { ?>
        <div class="section mt-2">
            <a href="<?= $link[$this->uri->segment("3")] ?>" target="_blank" class="btn btn-block btn-info">تحميل الوظيفة</a>
            <hr>
        </div>
    <?php } ?>
</div>
<!-- * App Capsule -->