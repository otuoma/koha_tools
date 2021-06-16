<?= $this->extend('base') ?>

<?= $this->section('main-content') ?>
    <ul class="nav flex-column" style="margin-top: 42px;">
        <li class="nav-item">
            <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                Branches <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/branches/"><span data-feather="file"></span> Add Branches</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/files/branches_template.csv"><span data-feather="file"></span> Download template</a>
        </li>
    </ul>
<?= $this->endSection() ?>