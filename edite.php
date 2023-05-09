<?php

include ('admin_header.php');

include ('config.php');

?>

<?php

if(isset($_GET['id'])){
   
$id =$_GET['id'];


   $query_edit = "SELECT * FROM categories WHERE category_id ='$id'";
    
    $result = mysqli_query($db,$query_edit);

    foreach($result as $value){
        $name= $value['category_name'];
        $status = $value['category_status'];
        $category_id = $value['category_id'];
    }
}

?>

<?php 
if(isset($_POST['btnadd'])){

    $category_id = $_POST['category_id'];
    $category_name = $_POST['category_name'];
    $category_status = $_POST['category_status'];


    $qurrey_update = "UPDATE categories SET category_name ='$category_name',category_status ='$category_status' WHERE category_id ='$category_id'";

    $resulter = mysqli_query($db,$qurrey_update);

    if($resulter){
        $resulter = "category update sucessfully";

        // header("location:Allcategory.php");
    }else{
        $resulter = "category not update sucessfully";
    }
}



?>





<!-- <center> -->
 <div class="container-fluid pt-4 px-4">
    <div class="LAP">
                <div class="row g-4">
                <form action="" method="POST">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Edit category</h6>
                            

                            <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"></label>
                                    <input type="hidden" class="form-control" name="category_id"   placeholder="Enter Category id"   value="<?php echo $id;?>">
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div> -->
                                </div>


                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"></label>
                                    <input type="text" class="form-control" name="category_name"   placeholder="Enter Category Name"   value="<?php echo $name;?>">
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div> -->
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label"></label>
                                    <input type="text" class="form-control"  name="category_status"  placeholder="Enter Category Status"   value="<?php echo $status; ?>">
                                </div>
                                <!-- <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> -->
                                <button type="submit" name="btnadd" class="btn btn-primary">Edit category</button>
                            </form>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    
                    <!-- </center> -->
<?php

include ('admin_footer.php');
?>