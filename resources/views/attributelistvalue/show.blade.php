<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="position:relative">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><img src="{{ asset('storage/omedis.png') }}" /></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('attribute.index') }}">Attribute List Value</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $attributeListValue->name }}</li>
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
                            <i class="fa-regular fa-user"></i> <i>{{ $attributeListValue->name }}</i> Attribute List Value
                        </h3>
                    </div>
                    <div class="card-body">
                        <p>{{ __('name') }}: {{ $attributeListValue->name }}</p>
                        <p>{{ __('comment') }}: {{ $attributeListValue->comment }}</p>

                        @if ($attributeListValue->attribute_list_id)
                            <p>{{ __('attribute_list_id') }}: <a href="{{ route('attributelist.show',$attributeListValue->attributeList) }}  ">{{ $attributeListValue->attributeList->name }}</a></p>
                        @endif


                        <p>{{ __('Created at') }}: {{ $attributeListValue->created_at }}</p>
                        <p>{{ __('Updated at') }}: {{ $attributeListValue->updated_at }}  by {{ $attributeListValue->user->name }}</p>

                    </div>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
