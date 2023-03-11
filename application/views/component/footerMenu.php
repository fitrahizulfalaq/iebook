<!-- App Bottom Menu -->
<div class="appBottomMenu">
    <a href="<?= base_url("page/profil") ?>" class="item <?= $this->uri->segment(2) == 'profil' ? "active" : "" ?>">
        <div class="col">
            <ion-icon name="person-circle-outline"></ion-icon>
        </div>
    </a>
    <a href="<?= base_url("page/video") ?>" class="item <?= $this->uri->segment(2) == 'video' ? "active" : "" ?>">
        <div class="col">
            <ion-icon name="videocam-outline"></ion-icon>
        </div>
    </a>

    <a href="<?= base_url("") ?>" class="item <?= $this->uri->segment(1) == '' ? "active" : "" ?>">
        <div class="col">
            <ion-icon name="home-outline"></ion-icon>
            <!-- <strong>Home</strong> -->
        </div>
    </a>

    <a href="<?= base_url("page/materi/") ?>" class="item <?= $this->uri->segment(2) == 'materi' ? "active" : "" ?>">
        <div class="col">
            <ion-icon name="book-outline"></ion-icon>
        </div>
    </a>
    <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
        <div class="col">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
    </a>
</div>
<!-- * App Bottom Menu -->