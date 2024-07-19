<?php
if (isset($_POST['add'])) {
    extract($_POST);
    // $_FILES[];
    // $tags = json_encode($tags);
    if (strlen($_FILES["company_logo"]["name"]) > 10) {
        $company_logo = ((strlen($name) > 10) ? substr($name, 0, 9) : $name) . (time() - 1681919233) . substr($_FILES["company_logo"]["name"], -6, 6);
    } else $company_logo = ((strlen($name) > 10) ? substr($name, 0, 9) : $name) . (time() - 1681919233) . $_FILES["company_logo"]["name"];
    if ($_FILES["company_logo"]["size"] / 1024 / 1024 > 5) {
?>
        <script type="text/javascript">
            alert("File size is more then 5 MB upload again");
            window.history.back();
        </script>
    <?php
        die();
    } else
                            if (explode("/", $_FILES["company_logo"]["type"])[0] != "image") {
    ?>
        <script type="text/javascript">
            alert("Please choose image for company logo");
            window.history.back();
        </script>
        <?php
        die();
    } else {

        if (move_uploaded_file($_FILES["company_logo"]["tmp_name"], "../assets/img/" . $company_logo)) {
            $query = "INSERT INTO `listings`
                                    (`name`, `company`, `country`, `state`, `description`, `tags`, `phone`, `email`, `site_url`, `company_logo`) VALUES 
                                    ('$name','$company','$country','$state','$description','$tags','$phone','$email','$site_url','$company_logo')";
            mysqli_query($db, $query)
                or die(mysqli_error($db));
        } else {
        ?>
            <script type="text/javascript">
                alert("Server Error! Try again");
                window.history.back();
            </script>
<?php
            die();
        }
    }
    break;
} elseif (isset($_POST['edit'])) {
} elseif (isset($_POST['delete'])) {
}
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        All Mobile Brands Managment
        <a href='#' class='btn btn-primary float-right' data-bs-toggle="modal" data-bs-target="#add-brand">
            <i class='fas fa-plus'></i> Add New
        </a>
    </h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Brands List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Logo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Logo</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $query = 'SELECT * FROM `brand`';
                        $result = mysqli_query($db, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            extract($row);
                            echo '<tr>';
                            echo "<td>$name</td>";
                            echo "<td><img src='./assets/img/brands/$logo' alt='$name' style='width: 100px' /></td>";
                            echo "<td>
                                        <button type='button' data-bs-toggle='modal' data-bs-target='#update-brand$brand_id' class='btn btn-success btn-circle'>
                                            <i class='fas fa-edit'></i>
                                        </button>
                                        <a href='#' class='btn btn-danger btn-circle'>
                                            <i class='fas fa-trash'></i>
                                        </a>
                                     </td>";
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="add-brand" tabindex="-1" aria-labelledby="add-brand-heading" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-sm-down">
            <div class="modal-content">
                <form action="?page=brands" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="add-brand-heading">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row">
                        <div class="col-12">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                        </div>
                        <div class="col-12">
                            <label for="logo" class="form-label">Logo: <br />
                                <img src="../assets/img/empty_image.png" style="width: 150px" id="preview-img" />
                            </label>
                            <input type="file" onchange="previewImage(this, 'preview-img')" accept="image/*" class="form-control" id="logo" name="logo" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="add">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    $query = 'SELECT * FROM `brand`';
    $result = mysqli_query($db, $query);

    while ($row = mysqli_fetch_assoc($result)) :
        extract($row);
    ?>
        <!-- Modal -->
        <div class="modal fade" id="update-brand<?= $brand_id ?>" tabindex="-1" aria-labelledby="update-brand-heading<?= $brand_id ?>" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-sm-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="update-brand-heading<?= $brand_id ?>"><?= $brand_id ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3">
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">Name</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Enter Name" name="name" value="<?= $name ?>">
                            </div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">Logo</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="" name="logo" value="<?= $logo ?>">
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check me out
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile ?>
</div>