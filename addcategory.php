<?php

include ('admin_header.php');

include ('config.php');

?>

<?php

if(isset($_POST['btnadd'])){
   
    $categories_name = $_POST['category_name'];
    $categories_status = $_POST['category_status'];


    $query = "INSERT INTO categories(category_name,category_status) VALUES('$categories_name','$categories_status')";
    
    $result = mysqli_query($db,$query );

    if($result){
        
        $results = "category Add Sucessfully ";
    }else{

        $results = "category does not Add Sucessfully";
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
                            <h6 class="mb-4">Add category</h6>
                            



                                <div class="mb-3">






                            

                                    <label for="exampleInputEmail1" class="form-label"></label>
                                    <input type="text" class="form-control" name="category_name" value  placeholder="Enter Category Name"   required>
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div> -->
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label"></label>
                                    <input type="text" class="form-control"  name="category_status"  placeholder="Enter Category Status"   required>
                                </div>
                                <!-- <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> -->
                                <button type="submit" name="btnadd" class="btn btn-primary">Add category</button>
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