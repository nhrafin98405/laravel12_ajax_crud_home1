<div class="modal" id="studentModal">
    <div class="modal-dialog">
        <div class="modal-content">


            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <form method="POST" id="addStudent">
                @csrf
                <div class="modal-body">


                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter Name">
                                <span class="text-danger error-text name_error"></span>
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter Email">
                                <span class="text-danger error-text email_error"></span>
                        </div>

                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="Enter Phone">
                                <span class="text-danger error-text phone_error"></span>
                        </div>

                        <div class="col-md-6">
                            <label for="phone" class="form-label">Rool</label>
                            <input type="text" class="form-control" id="rool" name="rool"
                                placeholder="Enter Rool">
                                <span class="text-danger error-text rool_error"></span>
                        </div>

                        <div class="col-md-12">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" id="address" name="address" placeholder="Enter Address"></textarea>
                            <span class="text-danger error-text address_error"></span>
                        </div>
                    </div>

                </div>



                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add Student</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
