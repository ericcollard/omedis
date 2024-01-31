<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="position:relative">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><img src="{{ asset('storage/omedis.png') }}" /></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('datatype.index') }}">Products</a></li>
                    @if ($method === 'POST')
                        <li class="breadcrumb-item active">{{ __('Create') }}</li>
                    @else
                        <li class="breadcrumb-item active" aria-current="page">{{ $product->id }}</li>
                    @endif
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
                            @if ($method === 'POST')
                                <i class="fa fa-pencil"></i> {{ __('Create product') }}
                            @else
                                <i class="fa fa-pencil"></i> {{ __('Edit product') }} : {{ $product->id }}
                            @endif
                        </h3>

                    </div>
                    <div class="card-body">

                        <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method($method)

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                    <div class="form-group">
                                        <strong>Id:</strong>
                                        <input type="text" name="id" value="{{ $product->id }}" class="form-control" placeholder="Datatype name">
                                        @error('id')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <p>This product has {{ $product->getVariantCount() }} variants</p>
                                @if ($product->getVariantCount() > 0)
                                    <table>
                                        <tr>
                                            @foreach ($product->variants[0]->variantAttributes as $variantAttribute)
                                            <th>
                                                {!! $variantAttribute->attribute->name !!}

                                            </th>
                                            @endforeach
                                        </tr>
                                        @foreach ($product->variants as $variant)
                                            <tr>

                                                @foreach ($variant->variantAttributes as $variantAttribute)
                                                    <td>
                                                        {!! $variantAttribute->toString(1) !!}

                                                    </td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </table>
                                @endif




                                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a class="btn btn-danger" href="{{ route('product.index') }}"><i class="fa fa-btn fa-bank"></i> Cancel</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>


        </div>
    </div>
</x-app-layout>
<?php
