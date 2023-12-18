<div class="modal fade" id="updateModal{{$booking->id}}" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="updateModalLabel">Update booking</h5>
                <button type="button" class="btn-close bg-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4 mt-2">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Select Band</label>
                        <select name="band_id" class="form-select">
                            @foreach ($bands as $band)
                                <option value="{{ $band->id }}" {{ $booking->band_id == $band->id ? 'selected' : '' }}>
                                    {{ $band->band_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="mb-4 mt-2">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                        <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded-lg"
                            placeholder="Enter your name" value="{{$booking->name}}">

                        @error('name')
                            <div class="text-sm text-red-500 italic">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4 mt-2">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" name="email" id="email" class="w-full px-3 py-2 border rounded-lg"
                            placeholder="Enter your email" value="{{$booking->email}}">

                        @error('email')
                            <div class="text-sm text-red-500 italic">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4 mt-2">
                        <label for="title" class="block text-gray-700 font-semibold mb-2">Date</label>
                        <input type="date" name="booking_date" id="booking_date"
                            class="w-full px-3 py-2 border rounded-lg" placeholder="Enter booking_date" value="{{$booking->booking_date}}">

                        @error('booking_date')
                            <div class="text-sm text-red-500 italic">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4 mt-2">
                        <label for="title" class="block text-gray-700 font-semibold mb-2">Time</label>
                        <input type="time" name="booking_time" id="booking_time"
                            class="w-full px-3 py-2 border rounded-lg" placeholder="Enter number of members" value="{{$booking->booking_time}}">

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
