<div class="modal fade" id="deleteModal{{ $booking->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $booking->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                <button type="button" class="btn-close bg-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this booking?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text-dark" data-bs-dismiss="modal">Close</button>
                <form method="POST" action="{{ route('bookings.destroy', ['id' => $booking->id]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger text-dark">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
