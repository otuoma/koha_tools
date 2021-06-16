<?= $this->extend('base') ?>

<?= $this->section('main-content') ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2"><span class="fa fa-share-alt-square"></span> Branches</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <form method="post" action="<?php echo base_url(); ?>/index.php/branches/index" class="mr-2" enctype="multipart/form-data" id="upload-form">
                <?= csrf_field() ?>
                <input type="file" class="btn btn-sm btn-outline-secondary" accept=".csv" name="upload_file" required="required" />
                <button class="btn btn-sm btn-outline-secondary">Upload</button>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <?php if (count($branches) > 0){ ?>
            <table class="table" id="branches-table">
                <thead>
                    <th>Code</th><th>Name</th><th>Address</th><th>ZIP code</th><th>City</th><th>State</th><th>Country</th><th>Phone</th><th>Email</th><th>URL</th><th>IP</th><th>Notes</th>
                </thead>
                <?php foreach ($branches as $branch) {?>
                    <tr>
                        <td><?php echo $branch->branchcode; ?></td>
                        <td><?php echo $branch->branchname; ?></td>
                        <td><?php echo $branch->branchaddress1; ?></td>
                        <td><?php echo $branch->branchzip; ?></td>
                        <td><?php echo $branch->branchcity; ?></td>
                        <td><?php echo $branch->branchstate; ?></td>
                        <td><?php echo $branch->branchcountry; ?></td>
                        <td><?php echo $branch->branchphone; ?></td>
                        <td><?php echo $branch->branchemail; ?></td>
                        <td><?php echo $branch->branchurl; ?></td>
                        <td><?php echo $branch->branchip; ?></td>
                        <td><?php echo $branch->branchnotes; ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php } ?>
    </div>
<?= $this->endSection() ?>