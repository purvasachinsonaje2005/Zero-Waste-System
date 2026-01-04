<?php include 'head.php'; ?>
<?php include 'aaside.php'; ?>

<div class="page-wrapper">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="btn-list">
                    <a href="assets1.php?user=<?php echo $_SESSION['username']; ?>"><button type="button" class="btn waves-effect waves-light btn-rounded btn-success">New Collection</button></a>
                    <a href="assets2.php?user=<?php echo $_SESSION['username']; ?>"><button type="button" class="btn waves-effect waves-light btn-rounded btn-success">View Collection</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <?php 
                $sq = mysqli_query($con, "SELECT * FROM clients");
            ?>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Client Collection Information</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Pay Type</th>
                                    <th>Category</th>
                                    <th>Waste Type</th>
                                    <th>Address</th>
                                    <th>Contact</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                    $k = 1;
                                    while ($hk = mysqli_fetch_array($sq)) { 
                                ?>
                                    <tr>
                                        <td><?php echo $k; ?></td>
                                        <td><a href="assets.php?id=<?php echo $hk['id']; ?>" class="text-success"><?php echo $hk['names']; ?></a></td>
                                        <td><?php echo $hk['pay_type']; ?></td>
                                        <td><?php echo $hk['client_type']; ?></td>
                                        <td><?php echo $hk['gabage_type']; ?></td>
                                        <td><?php echo $hk['location']; ?></td>
                                        <td><?php echo $hk['contact']; ?></td>
                                        <td><?php echo $hk['status']; ?></td>
                                    </tr> 
                                <?php 
                                    $k++; 
                                    } 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>