<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="position:relative">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><img src="{{ asset('storage/omedis.png') }}" /></a></li>
                    <li class="breadcrumb-item">CSV sample file</li>
                </ol>
                <p id="version">VERSION<br/><span class="value">{{ \App\Models\History::getLastVersion() }}</span></p>
            </nav>
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

            <div class="container">

                <div class="card">
                    <div class="card-header">
                        <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="position:relative">
                            <i class="fa-regular fa-user"></i> CSV Sample file
                            <p><a href="{{ URL::to( 'storage/sample.csv')  }}" target="_blank">Download the sample file</a></p>
                        </h3>

                        @if ($errors != "")
                            <h4>Errors detected during file reading :</h4>
                            <p>{!! $errors !!}</p>
                        @endif

                    </div>
                    <div class="card-body">
                        @foreach ($lines as $line_key => $line)
                            @if ($line_key > 0)
                            <p>Line #{{ $line_key - 1 }} :
                                <ul>
                                @foreach ($line as $field_key => $field)
                                        <li>
                                            <strong>{{ $attributes[$field_key]->name }}:</strong>
                                            {{ $field }}
                                            @if ($attributes[$field_key]->datatype != 'selection' and $attributes[$field_key]->unit and $attributes[$field_key]->unit->name != 'none' and strlen($field) > 0)
                                                {{ $attributes[$field_key]->unit->name }}
                                            @endif
                                        </li>
                                @endforeach
                                </ul>

                            </p>
                            @endif
                        @endforeach



                    </div>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
