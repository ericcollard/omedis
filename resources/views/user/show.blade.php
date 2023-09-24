<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><img src="{{ asset('storage/omedis.png') }}" /></a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $user->name }}</li>
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
                            <i class="fa-regular fa-user"></i> {{ $user->name }}
                        </h3>
                        @can ('delete', $user)
                            <form class="d-sm-inline-block" method="POST" action="{{ route('user.destroy',['user' => $user]) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger"> {{ __('Delete') }}</button>
                            </form>
                        @endcan

                        @can ('update', $user)
                            <button type="button" class="btn btn-warning m-lg-2">
                                <a href="{{ route('user.edit' , ['user' => $user]) }}" style="color: inherit">
                                    <i class="mdi mdi-account-edit me-1"></i> Mise à jour
                                </a>
                            </button>
                        @endcan

                    </div>
                    <div class="card-body">
                        <p>{{ __('Email') }}: {{ $user->email }}</p>
                        <p>{{ __('Roles') }}: @foreach  ($user->roles as $role)
                                {{ $role }}
                            @endforeach</p>
                        <p>{{ __('Adress') }}: {{ $user->adress }}</p>
                        <p>{{ __('Postal_code') }}: {{ $user->postal_code }}</p>
                        <p>{{ __('City') }}: {{ $user->city }}</p>
                        <p>{{ __('Phone') }}: {{ $user->phone }}</p>
                        <p>{{ __('Comment') }}: {{ $user->comment }}</p>
                        <p>{{ __('Last_login') }}: {{ $user->last_login }}</p>
                        <p>{{ __('Created at') }}: {{ $user->created_at }}</p>
                        <p>{{ __('Updated at') }}: {{ $user->updated_at }}</p>
                    </div>
                </div>


            </div>


        </div>
    </div>
</x-app-layout>
