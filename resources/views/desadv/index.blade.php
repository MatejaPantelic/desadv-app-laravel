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
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
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
                            <div class="col-sm text-right">
                                Full-text search
                            </div>
                        </div>
                    </div>
                    <script src="{{ asset('js/showInputFileNames.js') }}"></script>
                    </body>
                </div>

                <div class="p-6 text-gray-900">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Supplier</th>
                                <th scope="col">Material</th>
                                <th scope="col">PO Number</th>
                                <th scope="col">Line Number</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Document ID</th>
                                <th scope="col">Arrival Date</th>
                                <th scope="col">Filename</th>
                                <th scope="col">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($desadvs as $desadv)
                                <tr>
                                    <td>{{ $desadv->supplier }}</td>
                                    <td>{{ $desadv->material }}</td>
                                    <td>{{ explode(':', $desadv->ponr_line)[0] }}</td>
                                    <td>{{ intval(explode(':', $desadv->ponr_line)[1]) }}</td>
                                    <td>{{ $desadv->quantity }}</td>
                                    <td>{{ $desadv->document_id }}</td>
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
