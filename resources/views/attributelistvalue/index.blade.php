<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="position:relative">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><img src="{{ asset('storage/omedis.png') }}" /></a></li>
                    <li class="breadcrumb-item">Attribute List
                        @if (!$attributelist)
                            Values
                        @endif
                    </li>
                </ol>
                <p id="version">VERSION<br/><span class="value">{{ \App\Models\History::getLastVersion() }}</span></p>
            </nav>
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if ($attributelist)
                <div class="card">
                    <div class="card-header">
                        <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="position:relative">
                            <i class="fa-regular fa-user"></i> <b>{{ $attributelist->name }}</b> Attribute List
                        </h3>
                    </div>
                    <div class="card-body">
                        <p>{{ __('name') }}: {{ $attributelist->name }}</p>
                        @if (Auth::check() and Auth::user()->hasRole('ROLE_ADMIN'))
                            <p>{{ __('odoo name') }}: {{ $attributelist->odoo_name }}</p>
                        @endif
                        <p>{{ __('comment') }}: {{ $attributelist->comment }}</p>

                        <hr>
                        <h4>List of values</h4>
                        <p><a href="{{ route('attributelistvalue.import',$attributelist) }}  ">import values</a></p>
                        <p>
                        <form class="d-sm-inline-block" action="{{  route('attributelistvalue.destroyall',$attributelist) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field("DELETE") }}
                            <button type="submit" class="btn btn-danger btn-sm ml-2"
                                    onclick="return confirm(\'Are You Sure Want to Delete?\')">
                                <i class="fa fa-trash" aria-hidden="true"></i> Delete all values
                            </button>
                        </form>
                        </P>

                        <div class="container mt-4">
                            {{ $dataTable->table() }}
                        </div>


                    </div>
                </div>
            @else
                <div class="container mt-4">
                    {{ $dataTable->table() }}
                </div>
            @endif


        </div>
    </div>

    @push('scripts')
        {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    @endpush

</x-app-layout>
