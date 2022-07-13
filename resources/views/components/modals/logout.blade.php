<div id="logout-modal" class="modal fade" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('logout') }}" method="post" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Sign Out</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="lead text-muted">Are you sure you want to logout?</p>
            </div>
            <div class="modal-footer">
                <button type="button" data-bs-dismiss="modal" class="btn btn-outline-secondary">Cancel</button>
                <button type="submit" class="btn btn-outline-danger">Logout</button>
            </div>
        </form>
    </div>
</div>