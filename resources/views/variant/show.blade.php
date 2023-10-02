<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><img src="{{ asset('storage/omedis.png') }}" /></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('variant.index') }}">Variants</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $variant->id }}</li>
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
                            <i class="fa-regular fa-user"></i> Variant #<i>{{ $variant->id }}</i>
                        </h3>
                    </div>
                    <div class="card-body">
                        <p>{{ __('Created at') }}: {{ $variant->created_at }}</p>
                        <p>{{ __('Updated at') }}: {{ $variant->updated_at }}</p>

                        <ul>
                            @foreach ($variant->variantAttributes as $variantAttribute)
                                <li>
                                    <strong>{{ $variantAttribute->attribute->name }}:</strong>
                                    @switch($variantAttribute->attribute->datatype->name)
                                        @case("selection")
                                        {{ $variantAttribute->attribute->attributeList->attributeListValues->where('id', $variantAttribute->value_int)->first()->name }}
                                        @break

                                        @case("string")
                                        {{ $variantAttribute->value_str }}
                                        @break

                                        @case("integer")
                                        {{ $variantAttribute->value_int }}
                                        @break

                                        @case("float")
                                        {{ $variantAttribute->value_float }}
                                        @break

                                        @case("boolean")
                                        {{ $variantAttribute->value_int }}
                                        @break

                                        @case("money")
                                         {{ $variantAttribute->value_float }}
                                        @break

                                        @case("text")
                                        {{ $variantAttribute->value_txt }}
                                        @break
                                    @endswitch

                                    @if ($variantAttribute->attribute->datatype->name != 'selection' and $variantAttribute->attribute->unit and $variantAttribute->attribute->unit->name != 'none')
                                        {{ $variantAttribute->attribute->unit->name }}
                                    @endif

                                </li>
                            @endforeach
                        </ul>


                    </div>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
