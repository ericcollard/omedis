<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" style="position:relative">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><img src="{{ asset('storage/omedis.png') }}" /></a></li>
                    <li class="breadcrumb-item">Data import</li>
                </ol>
                <p id="version">VERSION<br/><span class="value">{{ \App\Models\History::getLastVersion() }}</span></p>
            </nav>
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

            <div class="container">
                <h4>Importation réalisée pour la liste de valeur : {{  $attributelist->name }}</h4>
                <p>Nombre de valeur avec ID mises à jour : {{ $cntUpdateId }}</p>
                <p>Nombre de valeurs avec nom Odoo mises à jour : {{ $cntUpdateOdooName }}</p>
                <p>Nombre de valeurs avec nom mises à jour : {{ $cntUpdateName }}</p>
                <p>Nombre de valeurs créées : {{ $cntCreate }}</p>
                <p><a href="{{ route('attributelistvalue.index',$attributelist) }}">Afficher vers la liste de valeur</a></p>
                </p>
            </div>

        </div>
    </div>

</x-app-layout>
