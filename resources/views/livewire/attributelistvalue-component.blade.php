<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        @push('pagetitle', 'Attribute List Values')
        @push('breadcrumb')
            @php(
            $breadcrumb_items = [
                        ['title' => 'Attribute Lists', 'url' => route('attribute-lists')],
                        ['title' => 'values for '.$attributeListName.' list', 'url' => '/attribute-list-values/'.$attributeListId],
                    ]
            )
            <livewire:breadcrumb-component :items="$breadcrumb_items" />
        @endpush

        <h2 class = 'mb-2'><b>{{ $attributeListName }}</b> attribute list. List of existing values :</h2>

        <livewire:attribute-list-values-table :attributeListId="$attributeListId"/>

    </div>

    <div>

        <x-dialog-modal wire:model="showingModal" class="flex items-center" maxWidth="2xl">

            <x-slot name="title">
                {{ $modalTitle }}
            </x-slot>

            <x-slot name="content">

                <form class="max-w-xl mx-auto" wire:submit.prevent='store'>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-5">
                            <x-label for="name" value="name" />
                            <x-input type="text" wire:model="name" name="name" class="block w-full"/>
                            <x-input-error for="name"  class="block w-full"/>
                        </div>
                        <div class="mb-5">
                            @if (Auth::check() and Auth::user()->hasRole('ROLE_ADMIN'))
                            <x-label for="odoo_name" value="odoo_name" />
                            <x-input type="text" wire:model="odoo_name" name="odoo_name"  class="block w-full"/>
                            <x-input-error for="odoo_name"  class="block w-full"/>
                            @endif
                        </div>
                    </div>


                    <div class="mb-5">
                        <x-label for="comment" value="comment" />
                        <x-textarea type="text" wire:model="comment" class="block w-full" />
                        <x-input-error for="comment"  class="block w-full"/>
                    </div>


            </x-slot>

            <x-slot name="footer">
                <x-button type="submit" class="mr-1">
                    {{ __('Save') }}
                </x-button>
                <x-secondary-button  class="mr-1" wire:click="$set('showingModal', false)" wire:loading.attr="disabled">
                    {{ __('Cancel')  }}
                </x-secondary-button>

                </form>

            </x-slot>


        </x-dialog-modal>



    </div>

</div>

