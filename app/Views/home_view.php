<?= $this->extend('base\base_layout'); ?>

<?= $this->section('content'); ?>
<?php
    $rows ??= [];
    $item??= [];
    $item['id'] ??= -1;
    ?>
    
<main class="container m-lg-6">
    <div class="row p-lg-5 gap-2">
    <div class="col-12 order-1 order-md-5">
                <div class="d-flex justify-content-center">
                    <div class="d-flex container border-0 border-top border-3 border-primary py-2 rounded mx-3" style="background-color: rgb(185, 232, 250);">
                        <h5 class="ms-3">
                            <?php
                            if (sizeof($rows) > 0) {
                                echo "Records Found: " . sizeof($rows);
                            } else {
                                echo "No Results Found";
                            }
                            ?>
                        </h5>
                    </div>
                </div>
            </div>
        <div class="col-lg-5 bg-dark bg-gradient text-white-50 p-3 rounded-3 fw-bold mx-4">
            <form action="/" method="post">
                <input type="hidden" name="id" value="<?= isset($id)?$id:"" ;?>">

                <label for="fn" class="form-label">First name</label>
                <input type="text" name="first_name" id="fn" value="<?= isset($fname)?$fname:"" ;?>" class="form-control">

                <label for="ln" class="form-label">Last name</label>
                <input type="text" name="last_name" id="ln" value="<?= isset($lname)?$lname:"" ;?>" class="form-control">
                
                <div class="d-grid mt-3 mb-3">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>
            </form>
        </div>
        <div class="col-lg-5 mx-4 bg-dark bg-gradient p-1 rounded-3">
            <div class="table-responsive">
                <table class="table table-striped table-dark table-hover table-bordered m-auto">
                    <thead>
                        <tr>
                            <th>FIRST NAME</th>
                            <th>LAST NAME</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows as $item) : ?>
                            <tr>
                                <td><?= $item['first_name']; ?></td>
                                <td><?= $item['last_name']; ?></td>
                                <td class="text-center">
                                    <a class="link-warning link-offset-2" href="/home/update/<?= $item['id'] ;?>">EDIT</a>
                                    <a class="link-danger link-offset-2" href="/home/delete/<?= $item['id'] ;?>">DELETE</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>