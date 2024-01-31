<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="position:relative">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><img src="{{ asset('storage/omedis.png') }}" /></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('product.index') }}">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $product->id }}</li>
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
                            <i class="fa-regular fa-user"></i> Product #<i>{{ $product->id }}</i>
                            @if (Auth::check() and Auth::user()->hasRole('ROLE_ADMIN'))
                                <span style="position:absolute; right:0"><a href=" {{ route('product.convert2odoo',$product) }}">Update Odoo Data</a></span>
                            @endif
                        </h3>
                    </div>
                    <div class="card-body">
                        <p>This product has {{ $product->getVariantCount() }} variants</p>
                        <ul>
                            @foreach ($master_data as $key => $master_data_variant)
                                <li>
                                    <p>variant #{{ $key + 1 }}</p>
                                    <ul>
                                        @foreach ($master_data_variant as $master_data_variant_attribute)
                                            <li>
                                                {{$master_data_variant_attribute[0]}} : {{$master_data_variant_attribute[1]}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                        @endforeach
                        </ul>
                    </div>
                </div>

                @if (Auth::check() and Auth::user()->hasRole('ROLE_ADMIN'))
                    <div class="card mt-4">
                    <div class="card-header">
                        <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="position:relative">
                            <i class="fa-regular fa-user"></i> Odoo data for product #<i>{{ $product->id }}</i>
                        </h3>
                    </div>
                    <div class="card-body">
                        <p>Product data</p>
                        <ul>
                            @foreach ($odoo_product_data as $key => $odoo_product_value)
                                <li>
                                    {{$odoo_product_value[0]}} : {{$odoo_product_value[1]}}
                                </li>
                            @endforeach
                        </ul>

                        <p>Variant data</p>
                        <ul>
                            @foreach ($odoo_variants_data as $key => $odoo_variant_data)
                                <li>
                                    <p>variant #{{ $key + 1 }}</p>
                                    <ul>
                                        @foreach ($odoo_variant_data as $odoo_variant_data_attribute)
                                            <li>
                                                @if ($odoo_variant_data_attribute[0] == "attribute")
                                                    {{$odoo_variant_data_attribute[2]}} : {{$odoo_variant_data_attribute[1]}}
                                                @else
                                                    {{$odoo_variant_data_attribute[0]}} : {{$odoo_variant_data_attribute[1]}}
                                                @endif

                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>

                @endif

            </div>


        </div>
    </div>
</x-app-layout>
