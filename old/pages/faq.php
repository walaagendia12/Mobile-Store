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
                         <div class="col-12">
                             <label for="inputAddress" class="form-label">Question</label>
                             <input type="text" class="form-control" id="inputAddress" placeholder="Enter a question">
                         </div>

                         <div class="col-12">
                             <label for="inputAddress" class="form-label">Answer</label>
                             <input type="text" class="form-control" id="inputAddress" placeholder="Enter answer">
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
                             <th>Question</th>
                             <th>Answer</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tfoot>
                         <tr>
                             <th>Question</th>
                             <th>Answer</th>
                             <th>Action</th>
                         </tr>
                     </tfoot>
                     <tbody>
                         <?php
                            $query = 'SELECT * FROM `faq`';
                            $result = mysqli_query($db, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                                extract($row);
                                echo '<tr>';
                                echo "<td>$question</td>";
                                echo "<td>$answer</td>";
                                echo "<td>
                                    <button type='button' data-bs-toggle='modal' data-bs-target='#update-faq$faq_id' class='btn btn-success btn-circle'>
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
     <?php
        $query = "SELECT * FROM `faq`";
        $result = mysqli_query($db, $query);

        while ($row = mysqli_fetch_assoc($result)) :
            extract($row);
        ?>
         <div class="modal fade" id="update-faq<?= $faq_id ?>" tabindex="-1" aria-labelledby="update-faq-heading<?= $faq_id ?>" aria-hidden="true">
             <div class="modal-dialog modal-fullscreen-sm-down">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="update-faq-heading<?= $faq_id ?>"><?= $faq_id ?></h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                         <form class="row g-3">
                             <div class="col-12">
                                 <label for="inputAddress" class="form-label">Question</label>
                                 <input type="text"
                                  class="form-control" id="inputAddress" placeholder="Enter a question" name="question" value="<?=$question?>">
                             </div>

                             <div class="col-12">
                                 <label for="inputAddress" class="form-label">Answer</label>
                                 <input type="text" class="form-control" id="inputAddress" placeholder="Enter answer"name="answerr" value="<?=$answer?>">
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