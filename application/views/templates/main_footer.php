    <!-- Footer -->

    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModal">Logout</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure you want to Logout?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('Login/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Change Password Modal-->
    <form class="userConf" method="post" action="<?= base_url('Login/changepassword'); ?>">
        <div class="modal fade" id="userConf" tabindex="-1" role="dialog" aria-labelledby="userConf" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="userConf">Change Password</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" value="<?= $user['id']; ?>" id="id" name="id">
                        <div class="form-group">
                            <label class="col-form-label" for="user">Name:</label>
                            <input type="text" class="form-control" value="<?= $user['name']; ?>" id="name" name="name" disabled>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="oldpassword">Old Password:</label>
                            <input type="password" class="form-control" id="oldpassword" name="oldpassword">
                            <?= form_error('oldpassword', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="newpassword1">New Password:</label>
                            <input type="password" class="form-control" id="newpassword1" name="newpassword1">
                            <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="newpassword2">Confirm Password:</label>
                            <input type="password" class="form-control" id="newpassword2" name="newpassword2">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-success" type="submit" value="ChangePassword">Change</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>


    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
    <script src="<?= base_url('assets/datatables/'); ?>jquery.dataTables.js"></script>
    <script src="<?= base_url('assets/datatables/'); ?>dataTables.bootstrap4.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>

    </body>

    </html>