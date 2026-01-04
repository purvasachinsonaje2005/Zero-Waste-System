<?php include 'head.php';  
      include 'aaside.php'; ?>

<style>
    /* Green background for the page wrapper */
    .page-wrapper {
        background-color: #27ae60;
    }

    /* Card styles - black background with green border and white text */
    .card {
        background-color: #1e1e1e;
        color: white;
        border: 1px solid #27ae60;
    }
    .card-body {
        padding: 20px;
    }

    /* Button styles - Green button for primary actions */
    .btn {
        background-color: #27ae60;
        color: white;
        border: none;
        margin: 5px;
    }
    .btn:hover {
        background-color: #2ecc71;
    }
    .btn-primary {
        background-color: #34c759;
        color: white;
    }
    .btn-primary:hover {
        background-color: #28a745;
    }
    .btn-secondary {
        background-color: #1e1e1e;
        color: white;
    }

    /* Table styles */
    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #ffffff; /* White background for the table */
        border-radius: 8px;
        overflow: hidden;
    }
    table th, table td {
        padding: 10px;
        text-align: left;
    }
    table thead {
        background-color: #333333;
    }
    table th {
        color: #27ae60;
        font-weight: bold;
    }
    table tr:nth-child(even) {
        background-color: #f9f9f9; /* Light gray for even rows */
    }
    table tr:nth-child(odd) {
        background-color: #ffffff; /* White background for odd rows */
    }
    table tbody tr:hover {
        background-color: #f1f1f1; /* Hover effect for rows */
    }

    /* Form labels and input fields */
    .form-group label {
        color: white;
    }
    .form-control {
        background-color: #333333;
        color: white;
        border: 1px solid #27ae60;
    }
    .form-control:focus {
        border-color: #2ecc71;
    }

    /* Select dropdown */
    .form-control.show-tick {
        background-color: #333333;
        color: white;
        border: 1px solid #27ae60;
    }
    .form-control.show-tick:focus {
        border-color: #2ecc71;
    }
</style>

<div class="page-wrapper">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="btn-list">
                    <a href="inventory.php?user=<?php echo $_SESSION['username']; ?>">
                        <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary">
                            Add Payment
                        </button>
                    </a>

                    <a href="inventory2.php?user=<?php echo $_SESSION['username']; ?>">
                        <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary">
                            View Payments
                        </button>
                    </a>
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
                        <h4 class="card-title"></h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>Name</th>
                                    <th>Pay Type</th>
                                    <th>Category</th>
                                    <th>Waste Type</th> 
                                    <th>Address</th>
                                    <th>Contact</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <?php $k = 1; 
                            while($hk = mysqli_fetch_array($sq)) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $k; ?></td>
                                        <td><a href="inventory1.php?id=<?php echo $hk['id']; ?>" style="color: #27ae60;"><?php echo $hk['names']; ?></a></td>
                                        <td><?php echo $hk['pay_type']; ?></td>
                                        <td><?php echo $hk['client_type']; ?></td>
                                        <td><?php echo $hk['gabage_type']; ?></td>
                                        <td><?php echo $hk['location']; ?></td>
                                        <td><?php echo $hk['contact']; ?></td>
                                        <td><?php echo $hk['status']; ?></td>
                                    </tr> 
                                <?php $k++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>
