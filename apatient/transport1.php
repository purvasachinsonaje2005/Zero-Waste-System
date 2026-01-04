<?php include 'head.php';  
include 'aside.php'; ?>

<style>
    /* Sidebar - Black background and White text */
    .sidebar, .aside {
        background-color: #000000 !important;
        color: white !important;
    }

    /* Green Navbar */
    .navbar, .navbar-nav, .nav-item {
        background-color: #28a745 !important;
    }

    /* Green-themed styles */
    .page-wrapper {
        background-color: #f0fdf4;
        padding: 20px;
    }
    .card {
        border: 1px solid #28a745;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .card-body {
        background-color: #e9f7ef;
        color: #155724;
    }
    .btn {
        background-color: #28a745;
        color: white;
        border: none;
        margin: 5px;
    }
    .btn:hover {
        background-color: #218838;
    }
    .btn-primary {
        background-color: #34c759;
        color: #fff;
    }
    .btn-primary:hover {
        background-color: #28a745;
    }

    /* Table styles */
    .table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 8px;
        overflow: hidden;
    }
    .table th, .table td {
        padding: 12px 15px;
        text-align: center;
        color: black !important;
    }
    .table th {
        background-color: #28a745;
        color: white;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 14px;
    }
    .table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .table tbody tr:nth-child(odd) {
        background-color: #ffffff;
    }
    .table tbody tr:hover {
        background-color: #d4edda;
    }
    .table tbody tr td a {
        color: black !important;
        font-weight: normal;
        text-decoration: none;
    }
    .table tbody tr td a:hover {
        text-decoration: underline;
    }
    .table-responsive {
        margin-top: 20px;
    }
</style>

<div class="page-wrapper">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="btn-list">
                    <a href="transport1.php?user=<?php echo $_SESSION['username']; ?>">
                        <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary">
                            New Payment
                        </button>
                    </a>
                    <a href="transport1a.php?user=<?php echo $_SESSION['username']; ?>">
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
                        <h4 class="card-title">Client Details</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
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
                                while ($hk = mysqli_fetch_array($sq)) { ?>
                                    <tr>
                                        <td><?php echo $k; ?></td>
                                        <td><a href="transport3.php?id=<?php echo $hk['id']; ?>"><?php echo $hk['names']; ?></a></td>
                                        <td><?php echo $hk['pay_type']; ?></td>
                                        <td><?php echo $hk['client_type']; ?></td>
                                        <td><?php echo $hk['gabage_type']; ?></td>
                                        <td><?php echo $hk['location']; ?></td>
                                        <td><?php echo $hk['contact']; ?></td>
                                        <td><?php echo $hk['status']; ?></td>
                                    </tr>
                                <?php 
                                    $k++; 
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
