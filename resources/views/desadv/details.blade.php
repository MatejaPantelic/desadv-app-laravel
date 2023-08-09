<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ol class="list-group list-group-light">
                        {{--  displaying the name of the supplier that is not in the array of not null columns of the desadv table --}}
                        <li class="list-group-item border-0">
                            <div class="ms-2 me-auto border-bottom">
                                <div class="font-weight-bold"> Supplier </div>
                                {{ $desadv->supplier }}
                            </div>
                        </li>
                        {{-- displaying not null columns from desadv table --}}
                        @foreach ($notNullColumns as $column)
                            <li class="list-group-item border-0">
                                <div class="ms-2 me-auto border-bottom">
                                    <div class="font-weight-bold">{{ ucfirst(str_replace('_', ' ', $column)) }}</div>
                                    {{ $desadv->$column }}
                                </div>
                            </li>
                        @endforeach
                    </ol>
                    <div class="mt-5 text-center">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary" role="button"
                            aria-pressed="true">Back</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
