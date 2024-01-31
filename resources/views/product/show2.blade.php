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
                            <span style="position:absolute; right:0"><a href=" {{ route('product.convert2odoo',$product) }}">Update Odoo Data</a></span>
                        </h3>
                    </div>
                    <div class="card-body">
                        <p>This product has {{ $product->getVariantCount() }} variants</p>
                        <ul>
                        @foreach ($product->variants as $variant)
                            <li>
                                <ul>
                                    @foreach ($variant->variantAttributes as $variantAttribute)
                                        <li>
                                            {!! $variantAttribute->toString() !!}

                                        </li>
                                    @endforeach
                                </ul>
                                <p><br/></p>
                            </li>
                        @endforeach
                        </ul>

                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        <h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="position:relative">
                            <i class="fa-regular fa-user"></i> Odoo data for product #<i>{{ $product->id }}</i>
                        </h3>
                    </div>
                    <div class="card-body">
                        <p>Product data</p>
                        <ul>
                            @foreach ($product->odooProductValues as $odooProductValue)
                                <li>
                                    <strong>{{ $odooProductValue->odooModel->name }}:</strong> {{ $odooProductValue->value }}
                                </li>
                            @endforeach
                        </ul>
                        <p>Variant data</p>
                        <ul>
                            @foreach ($product->variants as $variant)
                                <p>Variant # {{$variant->id}}</p>
                                <ul>
                                    @foreach ($variant->odooVariantValues as $odooVariantValue)
                                        <li>
                                            <strong>{{ $odooVariantValue->odooModel->name }}:</strong> {{ $odooVariantValue->value }}
                                            @if ($odooVariantValue->odooModel->name == 'attribute')
                                                {{ ' ('.$odooVariantValue->attribute_name.')' }}
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>

                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>


        </div>
    </div>
</x-app-layout>
