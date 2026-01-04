<?php include 'head.php';  
include 'aaside.php'; ?>

<style>
    /* Sidebar - Black background and White text */
    .sidebar, .aside {
        background-color: #000000 !important; /* Set sidebar color to black */
        color: white !important; /* Set text color to white for better contrast */
    }

    /* Green Navbar */
    .navbar, .navbar-nav, .nav-item {
        background-color: #28a745 !important; /* Set navbar color to green */
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
        color: black !important; /* All table text in black */
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
        color: black !important; /* Links in black */
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
                    <a href="patients.php?user=<?php echo $_SESSION['username']; ?>">
                        <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary">
                            Add Client
                        </button>
                    </a>

                    <a href="patients1.php?user=<?php echo $_SESSION['username']; ?>">
                        <button type="button" class="btn waves-effect waves-light btn-rounded btn-primary">
                            View Clients
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Register Client</h4>
                        <form enctype="multipart/form-data" method="post" action="" autocomplete="off">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Name</label>
                                        </div>
                                    </div>

                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <input type="hidden" name="date" required class="form-control" value="<?php echo date('Y-m-d') ?>">
                                            <input type="text" name="names" required class="form-control" placeholder="Enter the name of the client">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Payment Type</label>
                                        </div>
                                    </div>

                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <select name="pay_type" class="form-control show-tick" required data-live-search="true">
                                                <option selected value="">---Choose---</option>
                                                <option value="monthly">Monthly</option>
                                                <option value="percollection">Per Collection</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Garbage Type</label>
                                        </div>
                                    </div>

                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <select name="client_type" class="form-control show-tick" required data-live-search="true">
                                                <option selected value="">---Choose---</option>
                                                <option value="company">Company</option>
                                                <option value="individual">Individual</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Address</label>
                                        </div>
                                    </div>

                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <input type="text" name="location" required class="form-control" placeholder="Enter the address of the client">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Contact</label>
                                        </div>
                                    </div>

                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <input type="number" name="contact" required class="form-control" placeholder="Enter the contact number of the client">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Garbage Type</label>
                                        </div>
                                    </div>

                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <select name="gabage_type" class="form-control show-tick" required data-live-search="true">
                                                <option selected value="">---Choose---</option>
                                                <?php 
                                                    $sql = mysqli_query($con, "SELECT * FROM gabbage_type");
                                                    while ($row = mysqli_fetch_array($sql)) {
                                                ?>
                                                <option value="<?php echo $row['name']; ?>">
                                                    <?php echo $row['name']; ?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="status" required class="form-control" value="pending">

                                <div class="form-actions">
                                    <div class="text-right">
                                        <button type="submit" name="submit" class="btn btn-info">REGISTER CLIENT</button>
                                        <button type="reset" class="btn btn-dark">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>
