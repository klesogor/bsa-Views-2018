<!-- Modal -->
{{-- This would be more logical to make modal as the component. Howevere, since there are only 1 modal, I just included it everywhere --}}
<div id = "delete-modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Are you sure?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>This currency will be deleted permanently.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button id="submit" type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>