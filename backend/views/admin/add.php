<?php
require_once 'common/header.php';
?>
<!-- Dashboard Wrapper starts -->
<div class="dashboard-wrapper"> 

    <!-- Top Bar starts -->
    <div class="top-bar">
        <div class="page-title"> Insert New Admin </div>
    </div>
    <!-- Top Bar ends --> 

    <!-- Main Container starts -->
    <div class="main-container"> 

        <!-- Container fluid Starts -->
        <div class="container-fluid"> 

            <!-- Spacer starts -->
            <div class="spacer"> 
                <?php include 'common/message_panel.php';?>
                <?php include 'common/error_panel.php';?>
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="blog">
                            <div class="blog-body">
                                <form id="defaultForm" method="post" action="index.php" class="form-horizontal">
                                    <input type="hidden" name="action" value="admin_add_save">
                                    <fieldset>
                                        <legend>Login Information</legend>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Admin Name</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="adminname" required/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">Password</label>
                                            <div class="col-lg-9">
                                                <input type="password" class="form-control" name="password" required />
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend>General Information</legend>
                                        <div class="form-group">
                                            <label class="col-lg-6 control-label">Name</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="name" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-6 control-label">Gender</label>
                                            <div class="col-lg-6">
                                                <label class="radio-inline">
                                                    <input type="radio" name="gender" value="1" checked="true"> Male
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="gender" value="0"> Female
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-6 control-label">Phone Number</label>
                                            <div class="col-lg-6">
                                                <input type="tel" pattern="^[0-9\-\+\s\(\)]*$" class="form-control" name="phone" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-6 control-label">Email</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="email" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-6 control-label">Address</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="address" />
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="form-group">
                                        <div class="col-lg-6 col-lg-offset-6">
                                            <button type="submit" class="btn btn-success">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

<?php
require_once 'common/footer.php';
?>