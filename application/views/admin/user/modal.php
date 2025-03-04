<div class="modal fade text-left" id="user" tabindex="-1" role="dialog" aria-labelledby="user" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="user">
                    Add User
                </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="<?= base_url('admin/user'); ?>" method="POST">
                <div class="modal-body">
                    <label for="firstname">Firstname: </label>
                    <div class="form-group">
                        <input id="firstname" type="text" name="firstname" placeholder="Firstname" class="form-control" />
                    </div>
                    <label for="lastname">Lastname: </label>
                    <div class="form-group">
                        <input id="lastname" type="text" name="lastname" placeholder="Lastname" class="form-control" />
                    </div>
                    <label for="email">Email: </label>
                    <div class="form-group">
                        <input id="email" type="text" name="email" placeholder="Email Address" class="form-control" />
                    </div>
                    <label for="password">Password: </label>
                    <div class="form-group">
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="submit" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Adding</span>
                    </button>
                </div>
            </form>
            
        </div>
    </div>
</div>