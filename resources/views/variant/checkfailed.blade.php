<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="position:relative">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><img src="{{ asset('storage/omedis.png') }}" /></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('variant.index') }}">OMEDIS Validator</a></li>
                </ol>
                <p id="version">VERSION<br/><span class="value">{{ \App\Models\History::getLastVersion() }}</span></p>
            </nav>
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

            <div class="container">
                @if ($errors != "")
                    <h4>Validation errors detected during file reading :</h4>
                    <p>{!! $errors !!}</p>
                @endif
                <h4 class="mt-4">Validate again</h4>

                    <p><a href="{{ route('variant.uploadcsv') }}">Validate csv file against Omedis</a></p>
                    <p><a href="{{ route('variant.uploadxml') }}">Validate xml file against Omedis</a></p>

            </div>

        </div>
    </div>

</x-app-layout>
