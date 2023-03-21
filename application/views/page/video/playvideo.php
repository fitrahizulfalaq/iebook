<!-- App Capsule -->
<div id="appCapsule">

    <div class="section mt-2">
        <!-- <figure>
			<img src="<?= base_url() ?>/assets/img/sample/photo/3.jpg" alt="image" class="imaged img-fluid">
		</figure> -->
        <h2>
            <?= $link["judul-".substr($this->uri->segment("3"),0,1)] ?>
        </h2>
        <h1>
            <?= $link["materi-".$this->uri->segment("3")] ?>
        </h1>
    </div>

    <div class="section mt-2">
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/<?= $link[$this->uri->segment("3")] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <hr>
    </div>
</div>
<!-- * App Capsule -->