<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><img src="{{ asset('storage/omedis.png') }}" /></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('attribute.index') }}">Attributes</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $attribute->name }}</li>
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
                            <i class="fa-regular fa-user"></i> <i>{{ $attribute->name }}</i> Attribute
                        </h3>
                    </div>
                    <div class="card-body">
                        <p>{{ __('name') }}: {{ $attribute->name }}</p>
                        <p>{{ __('comment') }}: {{ $attribute->comment }}</p>
                        <p>
                            @if ($attribute->required == 1)
                                This attribute is required
                            @else
                                This attribute is optional
                            @endif
                        </p>
                        <p>{{ __('data_type_id') }}: <a href="{{ route('datatype.show',$attribute->dataType) }}">{{ $attribute->dataType->name }}</a></p>
                        @if ($attribute->attribute_list_id)
                            <p>{{ __('attribute_list_id') }}: <a href="{{ route('attributelist.show',$attribute->attributeList) }}  ">{{ $attribute->attributeList->name }}</a></p>
                        @endif
                        @if ($attribute->unit_id)
                            <p>{{ __('unit_id') }}: <a href="{{ route('unit.show',$attribute->unit) }}  ">{{ $attribute->unit->name }}</a></p>
                        @endif

                        <p>{{ __('Created at') }}: {{ $attribute->created_at }}</p>
                        <p>{{ __('Updated at') }}: {{ $attribute->updated_at }} by {{ $attribute->user->name }}</p>

                    </div>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
