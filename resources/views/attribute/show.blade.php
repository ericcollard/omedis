<x-app-layout>

    @push('styles')
        <style>

        </style>
    @endpush

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="position:relative">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><img src="{{ asset('storage/omedis.png') }}" /></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('attribute.index') }}">Attributes</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $attribute->name }}</li>
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
                            <i class="fa-regular fa-user"></i> <i>{{ $attribute->name }}</i> Attribute
                        </h3>
                    </div>
                    <div class="card-body">
                        <p><span class="field_title">{{ __('name') }}:</span> {{ $attribute->name }}</p>
                        @if (Auth::check() and Auth::user()->hasRole('ROLE_ADMIN'))
                            <p><span class="field_title">{{ __('Odoo Name') }}:</span> {{ $attribute->odoo_name }}</p>
                        @endif

                        <p><span class="field_title">{{ __('comment') }}:</span> {!! html_entity_decode($attribute->comment) !!}</p>
                        <p class="field_title">
                            @if ($attribute->required == 1)
                                This attribute is <strong>required</strong>
                            @else
                                This attribute is optional
                            @endif
                        </p>
                        <p><span class="field_title">{{ __('Data type') }}:</span> <a href="{{ route('datatype.show',$attribute->dataType) }}">{{ $attribute->dataType->name }}</a></p>
                        @if ($attribute->attribute_list_id)
                            <p><span class="field_title">{{ __('Attrinute list') }}:</span> <a href="{{ route('attributelist.show',$attribute->attributeList) }}  ">{{ $attribute->attributeList->name }}</a></p>
                        @endif
                        @if ($attribute->unit_id)
                            <p><span class="field_title">{{ __('Unit') }}:</span> <a href="{{ route('unit.show',$attribute->unit) }}  ">{{ $attribute->unit->name }}</a></p>
                        @endif
                        <p><span class="field_title">{{ __('Updated at') }}:</span> {{ $attribute->updated_at }} by {{ $attribute->user->name }}</p>

                    </div>
                </div>
            </div>


        </div>
    </div>


</x-app-layout>
