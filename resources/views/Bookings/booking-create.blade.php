<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="createModalLabel">Create User</h5>
                <button type="button" class="btn-close bg-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('bookings.store') }}" method="POST" enctype="multipart/form-data"
                    class="max-w-lg mx-auto p-4 bg-white shadow-md rounded-lg">
                    @csrf
                    <hr>
                    <div class="mb-4 mt-2">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Select Brand</label>
                        <select name="band_id" id="" class="form-select">Select Band
                        @foreach ($bands as $band)
                            <option value="{{$band->id}}" class="form-select">{{$band->band_name}}</option>
                        @endforeach
                    </select>
                    </div>

                    <div class="mb-4 mt-2">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                        <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded-lg"
                            placeholder="Enter your name">

                        @error('name')
                            <div class="text-sm text-red-500 italic">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4 mt-2">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" name="email" id="email" class="w-full px-3 py-2 border rounded-lg"
                            placeholder="Enter your email">

                        @error('email')
                            <div class="text-sm text-red-500 italic">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4 mt-2">
                        <label for="title" class="block text-gray-700 font-semibold mb-2">Date</label>
                        <input type="date" name="booking_date" id="booking_date"
                            class="w-full px-3 py-2 border rounded-lg" placeholder="Enter booking_date">

                        @error('booking_date')
                            <div class="text-sm text-red-500 italic">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4 mt-2">
                        <label for="title" class="block text-gray-700 font-semibold mb-2">Time</label>
                        <input type="time" name="booking_time" id="booking_time"
                            class="w-full px-3 py-2 border rounded-lg" placeholder="Enter number of members">

                        @error('booking_time')
                            <div class="text-sm text-red-500 italic">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary text-dark" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary text-dark">Save changes</button>
                      </div>
                </form>
            </div>
        </div>
    </div>
</div>
