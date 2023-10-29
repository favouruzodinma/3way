<div class="row align-items-center dashboard-copyright-content pb-4">
    <div class="col-lg-6">
         <p class="copy-desc">&copy; 3 WAY COURIER SERVICE LTD   2019 -<?php echo date("Y") ?> </p>
    </div><!-- end col-lg-6 -->
    <div class="col-lg-6">
        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14 justify-content-end">
            <li class="mr-3"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
        </ul>
    </div><!-- end col-lg-6 -->
</div><!-- end row -->



<!-- Modal -->
<div class="modal fade modal-container" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="la la-exclamation-circle fs-60 text-warning"></span>
                <h4 class="modal-title fs-19 font-weight-semi-bold pt-2 pb-1" id="deleteModalTitle">Your account will be deleted permanently!</h4>
                <p>Are you sure you want to delete your account?</p>
                <div class="btn-box pt-4">
                    <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Ok, Delete</button>
                </div>
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- Modal -->
<div class="modal fade modal-container" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="la la-exclamation-circle fs-60 text-warning"></span>
                <h4 class="modal-title fs-19 font-weight-semi-bold pt-2 pb-1" id="logoutModalTitle">Are You Ready To Logout!</h4>
                <!-- <p>Are you sure you want to delete your account?</p> -->
                <div class="btn-box pt-4">
                    <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn theme-btn theme-btn-sm lh-30">Logout</button>
                </div>
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->

<!-- Modal -->
<div class="modal fade modal-container" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="replyModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-gray">
                <div class="pr-2">
                    <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="replyModalTitle">
                        Reply to review
                    </h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times"></span>
                </button>
            </div><!-- end modal-header -->
            <div class="modal-body">
                <form method="post">
                    <div class="input-box">
                        <label class="label-text">Message</label>
                        <div class="form-group">
                            <textarea class="form-control form--control pl-3" name="message" placeholder="Write Message" rows="5"></textarea>
                        </div>
                    </div><!-- end input-box -->
                    <div class="btn-box text-right">
                        <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">Cancel</button>
                        <button class="btn theme-btn theme-btn-sm" type="submit">Reply <i class="la la-arrow-right icon ml-1"></i></button>
                    </div><!-- end btn-box -->
                </form>
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end modal -->
