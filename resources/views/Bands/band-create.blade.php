<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="createModalLabel">Create User</h5>
                <button type="button" class="btn-close bg-dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('bands.store') }}" method="POST" enctype="multipart/form-data"
                    class="max-w-lg mx-auto p-4 bg-white shadow-md rounded-lg">
                    @csrf
                    <hr>
                    <div class="mb-4 mt-2">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Band Name</label>
                        <input type="text" name="band_name" id="band_name" class="w-full px-3 py-2 border rounded-lg"
                            placeholder="Enter your Band name">

                        @error('band_name')
                            <div class="text-sm text-red-500 italic">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4 mt-2">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Genre</label>
                        <input type="text" name="genre" id="genre" class="w-full px-3 py-2 border rounded-lg"
                            placeholder="Enter your genre">

                        @error('genre')
                            <div class="text-sm text-red-500 italic">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4 mt-2">
                        <label for="title" class="block text-gray-700 font-semibold mb-2">Year Started</label>
                        <input type="number" name="year_started" id="year_started"
                            class="w-full px-3 py-2 border rounded-lg" placeholder="Enter year_started">

                        @error('year_started')
                            <div class="text-sm text-red-500 italic">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4 mt-2">
                        <label for="title" class="block text-gray-700 font-semibold mb-2">Number of Members</label>
                        <input type="number" name="membersCount" id="membersCount"
                            class="w-full px-3 py-2 border rounded-lg" placeholder="Enter number of members">

                        @error('membersCount')
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
