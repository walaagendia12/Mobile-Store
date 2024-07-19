 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">
         All Mobile Brands Managment
         <a href='#' class='btn btn-primary float-right' data-bs-toggle="modal" data-bs-target="#exampleModal">
             <i class='fas fa-plus'></i> Add New
         </a>
     </h1>

     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-fullscreen-sm-down">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <form class="row g-3">
                         <div class="col-md-6">
                             <label for="inputEmail4" class="form-label">First Name</label>
                             <input type="text" class="form-control" id="inputEmail4">
                         </div>
                         <div class="col-md-6">
                             <label for="inputEmail4" class="form-label">Last Name</label>
                             <input type="text" class="form-control" id="inputEmail4">
                         </div>
                         <div class="col-md-6">
                             <label for="inputEmail4" class="form-label">Email</label>
                             <input type="text" class="form-control" id="inputEmail4">
                         </div>
                         <div class="col-md-6">
                             <label for="inputPassword4" class="form-label">Password</label>
                             <input type="text" class="form-control" id="inputPassword4">
                         </div>
                         <div class="col-md-6">
                             <label for="inputEmail4" class="form-label">Contact Numeber</label>
                             <input type="text" class="form-control" id="inputEmail4">
                         </div>
                         <div class="col-md-6">
                             <label for="inputEmail4" class="form-label">city</label>
                             <input type="text" class="form-control" id="inputEmail4">
                         </div>
                         <div class="col-md-6">
                             <label for="inputEmail4" class="form-label">Country</label>
                             <input type="text" class="form-control" id="inputEmail4">
                         </div>
                         <div class="col-md-6">
                             <label for="inputEmail4" class="form-label">Postal Code</label>
                             <input type="text" class="form-control" id="inputEmail4">
                         </div>

                         <div class="col-12">
                             <label for="inputAddress" class="form-label">Address</label>
                             <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
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
                             <th>Email</th>
                             <th>Contact No</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tfoot>
                         <tr>
                             <th>Name</th>
                             <th>Email</th>
                             <th>Contact No</th>
                             <th>Action</th>
                         </tr>
                     </tfoot>
                     <tbody>
                         <?php
                            $query = 'SELECT * FROM `user`';
                            $result = mysqli_query($db, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                                extract($row);
                                echo '<tr>';
                                echo "<td>$first_name . $last_name</td>";
                                echo "<td>$email</td>";
                                echo "<td>$contact_no</td>";
                                echo "<td>
                                    <button type='button' data-bs-toggle='modal' data-bs-target='#update-user$user_id' class='btn btn-success btn-circle'>
                                        <i class='fas fa-edit'></i>
                                    </button>
                                    <a href='#' class='btn btn-danger btn-circle'>
                                        <i class='fas fa-trash'></i>
                                    </a>
                                </td>";
                                echo '</tr>';
                            }
                            ?>
                     <tbody>
                 </table>
             </div>
         </div>
     </div>

    <!-- Modal -->
     <?php
        $query = "SELECT * FROM `user`";
        $result = mysqli_query($db, $query);

        while ($row = mysqli_fetch_assoc($result)) :
            extract($row);
        ?>

         <div class="modal fade" id="update-user<?= $user_id ?>" tabindex="-1" aria-labelledby="update-user-heading<?= $user_id ?>" aria-hidden="true">
             <div class="modal-dialog modal-fullscreen-sm-down">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="update-user-heading<?= $user_id ?>"><?= $user_id ?></h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                         <form class="row g-3">
                             <div class="col-md-6">
                                 <label for="inputEmail4" class="form-label">First Name</label>
                                 <input type="text" class="form-control" id="inputEmail4"name="first_name" value="<?=$first_name?>">
                             </div>
                             <div class="col-md-6">
                                 <label for="inputEmail4" class="form-label">Last Name</label>
                                 <input type="text" class="form-control" id="inputEmail4"name="last_name" value="<?=$last_name?>">
                             </div>
                             <div class="col-md-6">
                                 <label for="inputEmail4" class="form-label">Email</label>
                                 <input type="text" class="form-control" id="inputEmail4"name="email" value="<?=$email?>">
                             </div>
                             <div class="col-md-6">
                                 <label for="inputPassword4" class="form-label">Password</label>
                                 <input type="text" class="form-control" id="inputPassword4"name="password" value="<?=$password?>">
                             </div>
                             <div class="col-md-6">
                                 <label for="inputEmail4" class="form-label">Contact Numeber</label>
                                 <input type="text" class="form-control" id="inputEmail4"name="contact_no" value="<?=$contact_no?>">
                             </div>
                             <div class="col-md-6">
                                 <label for="inputEmail4" class="form-label">city</label>
                                 <input type="text" class="form-control" id="inputEmail4" name="city" value="<?=$city?>">
                             </div>
                             <div class="col-md-6">
                                 <label for="inputEmail4" class="form-label">Country</label>
                                 <input type="text" class="form-control" id="inputEmail4" name="country" value="<?=$country?>">
                             </div>
                             <div class="col-md-6">
                                 <label for="inputEmail4" class="form-label">Postal Code</label>
                                 <input type="text" class="form-control" id="inputEmail4" name="postal_code" value="<?=$postal_code?>">
                             </div>

                             <div class="col-12">
                                 <label for="inputAddress" class="form-label">Address</label>
                                 <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"name="address" value="<?=$address?>">
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
     </ </div>