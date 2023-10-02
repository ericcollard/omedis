<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><img src="{{ asset('storage/omedis.png') }}" /></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('attribute.index') }}">Attribute list</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $attributeList->name }}</li>
                </ol>
            </nav>
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

            <div class="container">

                <div class="card">
                    <div class="card-header">
                        <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            <i class="fa-regular fa-user"></i> <i>{{ $attributeList->name }}</i> Attribute list
                        </h3>
                    </div>
                    <div class="card-body">
                        <p>{{ __('name') }}: {{ $attributeList->name }}</p>
                        <p>{{ __('comment') }}: {{ $attributeList->comment }}</p>

                        <p>{{ __('Created at') }}: {{ $attributeList->created_at }}</p>
                        <p>{{ __('Updated at') }}: {{ $attributeList->updated_at }}  by {{ $attributeList->user->name }}</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            <i class="fa-regular fa-user"></i> List of values
                        </h3>
                    </div>
                    <div class="card-body">
                        <ul>
                            @forelse($attributeList->attributeListValues as $value)
                                <li>{{ $value->id }} - {{ $value->name }} - {{ $value->comment }}
                                    @if ($value->hex)
                                        {!! $value->hex !!}
                                        @endif
                                </li>
                            @empty
                                No data
                            @endforelse
                        </ul>

                    </div>
                </div>


            </div>


        </div>
    </div>
</x-app-layout>
