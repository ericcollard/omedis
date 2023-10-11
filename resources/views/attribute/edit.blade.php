<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="position:relative">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><img src="{{ asset('storage/omedis.png') }}" /></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('attribute.index') }}">Attribute</a></li>
                    @if ($method === 'POST')
                        <li class="breadcrumb-item active">{{ __('Create') }}</li>
                    @else
                        <li class="breadcrumb-item active" aria-current="page">{{ $attribute->name }}</li>
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
                                <i class="fa fa-pencil"></i> {{ __('Create attribute') }}
                            @else
                                <i class="fa fa-pencil"></i> {{ __('Edit attribute') }} : {{ $attribute->name }}
                            @endif
                        </h3>

                    </div>
                    <div class="card-body">

                        <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method($method)

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                    <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                        <div class="form-group">

                                            <label for="required" class="form-label">Required attribute</label>
                                            <input type="checkbox" name="required" value="1" {{  ( $attribute->required == 1 ? ' checked' : '')  }} aria-describedby="requiredHelp" class = "rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800">
                                            <div id="requiredHelp" class="form-text">Indicate whether the current attribute has to be provided for each product, or can be optional.</div>

                                            @error('required')
                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" value="{{ old('name', $attribute->name) }}" class="form-control" placeholder="attribute-name"  aria-describedby="nameHelp" required>
                                        <div id="nameHelp" class="form-text">Name of the attribute. Since this name will be used in every data exchange, it's recommended to use a digital friendly name, using lowcase character, no space character, no special character. If word separation needed, please use - character. Exemple : <i>this-attribute-name</i></div>
                                        @error('name')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="comment" class="form-label">Comment</label>
                                        <textarea rows="4", cols="54" id="comment" name="comment" style="resize:none" class="form-control" placeholder="Comment"  aria-describedby="commentHelp">{{ old('comment', $attribute->comment) }}</textarea>
                                        <div id="commentHelp" class="form-text">Human friendly name for the current attribute, with any comment that may help understanding & usage.</div>
                                        @error('comment')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="data_type_id" class="form-label">Data type</label>
                                        <select name="data_type_id" id="data_type_id" class="form-control" required  onchange="val()" aria-describedby="datatypeHelp">
                                            <option value="">Choose a data type ...</option>
                                            @foreach($datatypes as $datatype)
                                                <option value='{{ $datatype->id }}' {{ $attribute->data_type_id ? ($attribute->data_type_id == $datatype->id ? 'selected' : '') : ( old('data_type_id') == $datatype->id ? 'selected' : '') }}>{{ $datatype->name }}</option>
                                            @endforeach
                                        </select>
                                        <div id="datatypeHelp" class="form-text">Type of data stored in the current attribute. If the selected data type is "<i>selection</i>", the value will have to be choosen in a closed list of value. For any other value, a Unit has to be provided.</div>
                                        @error('data_type_id')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                    <div class="form-group" id="attribute_list_id_group" style="display : {{ ($attribute->data_type_id == 1 ? 'block' : 'none') }}">
                                        <label for="attribute_list_id" class="form-label">Attribute list</label>
                                        <select name="attribute_list_id" id="attribute_list_id" class="form-control"   aria-describedby="attributelistHelp">
                                            <option value="">Choose an attribute list ...</option>
                                            @foreach($attributelists as $attributelist)
                                                <option value='{{ $attributelist->id }}' {{ $attribute->attribute_list_id ? ($attribute->attribute_list_id == $attributelist->id ? 'selected' : '') : ( old('attribute_list_id') == $attributelist->id ? 'selected' : '') }}>{{ $attributelist->name }}</option>
                                            @endforeach
                                        </select>
                                        <div id="attributelistHelp" class="form-text">When attribute data type is "<i>selection</i>", a list of value has to be selected. This indicates the list of values that can be use as attribute values.</div>
                                        @error('attribute_list_id')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                    <div class="form-group" id="unit_id_group" style="display : {{ ($attribute->data_type_id == 1 ? 'none' : 'block') }}">
                                        <label for="unit_id" class="form-label">Unit</label>
                                        <select name="unit_id" id="unit_id" class="form-control"  aria-describedby="unitHelp">
                                            <option value="">Choose an unit  ...</option>
                                            @foreach($units as $unit)
                                                <option value='{{ $unit->id }}' {{ $attribute->unit_id ? ($attribute->unit_id  == $unit->id ? 'selected' : '') : ( old('unit_id') == $unit->id ? 'selected' : '') }}>{{ $unit->name }}</option>
                                            @endforeach
                                        </select>
                                        <div id="unitHelp" class="form-text">When attribute data type is not "<i>selection</i>", a unit has to be provided. This corresponds to the unit of the data stored in this attribute</div>
                                        @error('unit_id')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a class="btn btn-danger" href="{{ route('attribute.index') }}"><i class="fa fa-btn fa-bank"></i> Cancel</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>


        </div>
    </div>

    @push('scripts')
        <script type="text/javascript">
            function val() {
                d = document.getElementById("data_type_id").value;
                if (d==1)
                {
                    document.getElementById("unit_id_group").style.display = "none";
                    document.getElementById("attribute_list_id_group").style.display = "block";


                }
                else {
                    document.getElementById("unit_id_group").style.display = "block";
                    document.getElementById("attribute_list_id_group").style.display = "none";
                }
            }
        </script>

        <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create( document.querySelector( '#comment' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>

    @endpush


</x-app-layout>
<?php
