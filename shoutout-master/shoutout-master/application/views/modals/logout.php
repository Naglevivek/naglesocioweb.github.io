<!-- Modal Logout -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            Are you sure you want to logout?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" onclick="location.href='<? echo base_url();?>logout'">Yes</button>
            </div>
        </div>
    </div>
</div>