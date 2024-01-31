<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="position:relative">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><img src="{{ asset('storage/omedis.png') }}" /></a></li>
                    <li class="breadcrumb-item">Data import for attribute list : {{  $attributelist->name }}</li>
                </ol>
                <p id="version">VERSION<br/><span class="value">{{ \App\Models\History::getLastVersion() }}</span></p>
            </nav>
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

            <div class="container">
                <form action="{{ route('attributelistvalue.decodecsv', $attributelist) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label" for="inputFile">Your file:</label>
                        <input
                            type="file"
                            name="file"
                            id="inputFile"
                            class="form-control @error('file') is-invalid @enderror">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="delimiter">Csv delimiter character</label>
                        <select name="delimiter" id="delimiter">
                            <option value=";" selected="selected">;</option>
                            <option value=",">,</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label mt-3" for="enlosure">Csv enclosure character</label>
                        <select name="enclosure" id="enclosure">
                            <option value='"' selected="selected">"</option>
                            <option value="'">'</option>
                            <option value="|">|</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label mt-3" for="escape">Csv escape character</label>
                        <select name="escape" id="escape">
                            <option value="\" selected="selected">\</option>
                            <option value="\\">\\</option>
                        </select>
                    </div>

                        @error('file')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>

                </form>


            </div>

        </div>
    </div>

</x-app-layout>
