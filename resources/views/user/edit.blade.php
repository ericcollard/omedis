<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="position:relative">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><img src="{{ asset('storage/omedis.png') }}" /></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Users</a></li>
                    @if ($method === 'POST')
                        <li class="breadcrumb-item active">{{ __('Create') }}</li>
                    @else
                        <li class="breadcrumb-item active" aria-current="page">{{ $user->name }}</li>
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
                                <i class="fa fa-pencil"></i> {{ __('Create user') }}
                            @else
                                <i class="fa fa-pencil"></i> {{ __('Edit user') }} : {{ $user->name }}
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
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" placeholder="attribute-name"  aria-describedby="nameHelp" required>
                                        <div id="nameHelp" class="form-text">Name of the user.</div>
                                        @error('name')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="email" class="form-label">{{ __('Email') }} :</label>
                                        <input type="email" class="form-control" id="email" name="email"  aria-describedby="emailHelp" required  value="{{ $user->email ? $user->email : old('email') }}"/>
                                        <div id="emailHelp" class="form-text">Email of the user.</div>
                                        @error('email')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="adress" class="form-label">{{ __('Adress') }} :</label>
                                        <input type="text" class="form-control" id="adress" name="adress"  placeholder="Carlson street, 16" aria-describedby="adressHelp"  value="{{ $user->adress ? $user->adress : old('adress') }}"/>
                                        <div id="adressHelp" class="form-text">Adress of the user.</div>
                                        @error('adress')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="postal_code" class="form-label">{{ __('Postal Code') }} :</label>
                                        <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="54002" aria-describedby="postal_codeHelp"  value="{{ $user->postal_code ? $user->postal_code : old('postal_code') }}"/>
                                        <div id="postal_codeHelp" class="form-text">Postal code.</div>
                                        @error('postal_code')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="city" class="form-label">{{ __('City') }} :</label>
                                        <input type="text" class="form-control" id="city" name="city"  aria-describedby="cityHelp"  placeholder="Boston"  value="{{ $user->city ? $user->city : old('city') }}"/>
                                        <div id="cityHelp" class="form-text">City of the user.</div>
                                        @error('city')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">{{ __('Phone') }} :</label>
                                        <input type="text" class="form-control" id="phone" name="phone"  placeholder="+33 6 78 98 77 12"  aria-describedby="phoneHelp"  value="{{ $user->phone ? $user->phone : old('phone') }}"/>
                                        <div id="phoneHelp" class="form-text">Phone number of the user.</div>
                                        @error('phone')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="comment" class="form-label">Comment</label>
                                        <textarea rows="4", cols="54" id="comment" name="comment" style="resize:none" class="form-control" placeholder="Comment"  aria-describedby="commentHelp">{{ old('comment', $user->comment) }}</textarea>
                                        <div id="commentHelp" class="form-text">Any comment that may help.</div>
                                        @error('comment')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                    <div class="form-group" id="datepicker">
                                        <label for="email_verified_at"  class="form-label">{{ __('Email verified at') }}</label>
                                        <input type="text" class="form-control" name="email_verified_at" id="email_verified_at" data-provide="datepicker" data-date-format="dd/mm/yyyy" data-date-langage="fr"  data-date-autoclose="true" data-date-container="#datepicker" value="{{ $user->email_verified_at ? $user->email_verified_at->format('d/m/Y') : old('email_verified_at') }}" >
                                        @error('email_verified_at')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="password" class="form-label">{{ __('Password') }}</label>
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" value="{{ old('password') }}">
                                        @error('password')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mb-4">
                                    <div class="form-group">
                                        <label for="roles" class="form-label">Rôle</label>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="ROLE_ADMIN" id="roleCheck1" name="roles[]" {{ in_array("ROLE_ADMIN", $user->roles) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="roleCheck1">
                                                ROLE_ADMIN
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="ROLE_CONTRIBUTOR" id="roleCheck3" name="roles[]" {{ in_array("ROLE_CONTRIBUTOR", $user->roles) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="roleCheck3">
                                                ROLE_CONTRIBUTOR
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="ROLE_VISITOR" id="roleCheck4" name="roles[]" {{ in_array("ROLE_VISITOR", $user->roles) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="roleCheck4">
                                                ROLE_VISITOR
                                            </label>
                                        </div>
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
    @endpush


</x-app-layout>
<?php
