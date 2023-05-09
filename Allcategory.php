<?php

include ('admin_header.php');

include ('config.php');

?>
<?php

$qurrey = "SELECT * FROM categories";

// $qurrey = "SELECT * FROM categories WHERE category_status = 'active'";

$resultes = mysqli_query($db,$qurrey);

?>


 <div class="container-fluid pt-4 px-4">
    <div class="maddy">
<div class="row g-4">
<div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">All Categories</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Active</th>
                                            <!-- <th scope="col">Country</th>
                                            <th scope="col">ZIP</th>
                                            <th scope="col">Status</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                    foreach($resultes as $result){



                                    ?>



                                        <tr>
                                            <th scope="row"><?php echo $result['category_id']; ?></th>
                                            <td><?php echo $result['category_name']; ?></td>
                                            <td><?php echo $result['category_status']; ?></td>
                                            

                                        
                                      
                                            
<td>

                          <a href="edite.php?id=<?php echo $result['category_id'] ?>">
                          <button type="button" class="btn btn-outline-success">Edit</button>
                        </a>

                        <a href="delect.php?id=<?php echo $result['category_id'] ?>">
            <button type="button" class="btn btn-danger">Delete</button>
          </a>
</td>

                                        </tr>


                                        <?php }?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <?php

include ('admin_footer.php');
?>