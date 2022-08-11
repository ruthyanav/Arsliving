<?php 

include 'includes/header.php';
include 'function/myfunction.php';

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>User</h4>
                </div>
                   <div class="card-body" id="category_table">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>User Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $user = getAll("user_form");

                                if(mysqli_num_rows($user) > 0 )
                                {
                                    foreach($user as $userdata)
                                    {
                                        ?>
                                            <tr>
                                            <td><?= $userdata['id']; ?></td>
                                            <td><?= $userdata['name']; ?></td>
                                            <td><?= $userdata['email']; ?></td>
                                            <td><?= $userdata['phone_number']; ?></td>
                                            <td><?= $userdata['user_type']; ?></td>
                                            </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No records found";
                                }
                            ?>
                            
                        </tbody>

                    </table>
                </div> 
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php")?>