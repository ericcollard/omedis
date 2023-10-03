<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="position:relative">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><img src="{{ asset('storage/omedis.png') }}" /></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('datatype.index') }}">Datatypes</a></li>
                    @if ($method === 'POST')
                        <li class="breadcrumb-item active">{{ __('Create') }}</li>
                    @else
                        <li class="breadcrumb-item active" aria-current="page">{{ $datatype->name }}</li>
                    @endif
                </ol>
                <p id="version">VERSION<br/><span class="value">{{ \App\Models\history::getLastVersion() }}</span></p>
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
                                <i class="fa fa-pencil"></i> {{ __('Create data type') }}
                            @else
                                <i class="fa fa-pencil"></i> {{ __('Edit data type') }} : {{ $datatype->name }}
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
                                        <strong>Name:</strong>
                                        <input type="text" name="name" value="{{ $datatype->name }}" class="form-control" placeholder="Datatype name">
                                        @error('name')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                    <div class="form-group">
                                        <strong>Comment:</strong>
                                        <textarea rows="4", cols="54" id="comment" name="comment" style="resize:none" class="form-control" placeholder="Comment">{{ $datatype->comment }}</textarea>
                                        @error('comment')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a class="btn btn-danger" href="{{ route('datatype.index') }}"><i class="fa fa-btn fa-bank"></i> Cancel</a>
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
