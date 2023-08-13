<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of items') }}
        </h2>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container ">
                        <div class="col-8 m-auto">
                            <h6 class="text-center">Upload new DESADV message</h6>
                        </div>
                        <div class="col-8 m-auto p-3">
                            <form method="POST" action="{{ route('desadv.store') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input @error('csv_file.*') is-invalid @enderror"
                                            id="csv_file" name="csv_file[]" required multiple>
                                        <label class="custom-file-label" for="csv_file">Choose one or more CSV
                                            files</label>
                                    </div>
                                    <div class="input-group-append ml-3">
                                        <button class="btn btn-success" type="submit">Upload</button>
                                    </div>
                                </div>
                            </form>
                            @error('csv_file.*')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                    <script src="{{ asset('js/showInputFileNames.js') }}"></script>
                    </body>
                </div>

                <div class="p-6 text-gray-900">
                    <div class="d-flex flex-row justify-content-end p-1">
                        <form class="form-inline" action="{{ route('desadv.search') }}" method="GET"> <!-- Adjust the width as needed -->
                            <input class="form-control" style="width: 250px;" type="search" placeholder="Search DESADV messages"
                                aria-label="Search" name="search">
                            <button class="btn btn-secondary ml-2" type="submit">Search</button>
                        </form>
                    </div>

                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Material</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">PO Number</th>
                                <th scope="col">Line Number</th>
                                <th scope="col">Supplier</th>
                                <th scope="col">Van ID</th>
                                <th scope="col">Arrival Date</th>
                                <th scope="col">Filename</th>
                                <th scope="col">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($desadvs as $desadv)
                                <tr>
                                    <td>{{ $desadv->material }}</td>
                                    <td>{{ $desadv->quantity }}</td>
                                    <td>{{ $desadv->po_number }}</td>
                                    <td>{{ $desadv->line_number }}</td>
                                    <td>{{ $desadv->supplier }}</td>
                                    <td>{{ $desadv->van_id }}</td>
                                    @if ($desadv->calculated_arrival_date)
                                        <td data-toggle="tooltip" data-placement="bottom"
                                            title="Calculated arrival data">
                                            {{ $desadv->arrival_date }}
                                            <span style="color:red">*</span>
                                        </td>
                                    @else
                                        <td> {{ $desadv->arrival_date }} </td>
                                    @endif

                                    <td>{{ $desadv->filename }}</td>
                                    <td>
                                        <form class="d-inline" method="GET"
                                            action="{{ route('desadv.show', ['desadv_id' => $desadv->id]) }}">
                                            <button type="submit" class="btn btn-info">Show more</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <span style="color:red">*</span> Arrival date calculated automatically, by adding 7 days to dispatch
                    date.
                </div>
                <div class="container">
                    <div class="pagination justify-content-center">
                        {{ $desadvs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
