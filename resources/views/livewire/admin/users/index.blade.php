@section('title', __('Users'))
<div>
    <div class="flex justify-between">

        <h1>{{ __('Users') }}</h1>

        <div>
            @can('add_users')
                <livewire:admin.users.invite/>
            @endcan
        </div>

    </div>

    <div class="mt-5 mb-5 grid sm:grid-cols-1 md:grid-cols-3 gap-4">

        <div class="col-span-2">
            <x-form.input type="search" name="name" wire:model="name" label="none" :placeholder="__('Search Users')" />
        </div>

    </div>

    <div class="mb-5" x-data="{ isOpen: @if($openFilter || request('openFilter')) true @else false @endif }">

        <button type="button" @click="isOpen = !isOpen" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs leading-4 font-medium rounded-t text-grey-700 bg-gray-200 hover:bg-grey-300 dark:bg-gray-700 dark:text-gray-200 transition ease-in-out duration-150">
            <svg class="h-5 w-5 text-gray-500 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
            {{ __('Advanced Search') }}
        </button>

        <button type="button" wire:click="resetFilters" @click="isOpen = false" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs leading-4 font-medium rounded text-grey-700 bg-gray-200 hover:bg-grey-300 dark:bg-gray-700 dark:text-gray-200 transition ease-in-out duration-150">
            <svg class="h-5 w-5 text-gray-500 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
            </svg>
            {{ __('Reset form') }}
        </button>

        <a href="{{ route('dashboard') }}"
           class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs leading-4 font-medium rounded text-grey-700 bg-gray-200 hover:bg-grey-300 dark:bg-gray-700 dark:text-gray-200 transition ease-in-out duration-150">
            <svg class="h-5 w-5 text-gray-500 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg"
                 fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M18.121,9.88l-7.832-7.836c-0.155-0.158-0.428-0.155-0.584,0L1.842,9.913c-0.262,0.263-0.073,0.705,0.292,0.705h2.069v7.042c0,0.227,0.187,0.414,0.414,0.414h3.725c0.228,0,0.414-0.188,0.414-0.414v-3.313h2.483v3.313c0,0.227,0.187,0.414,0.413,0.414h3.726c0.229,0,0.414-0.188,0.414-0.414v-7.042h2.068h0.004C18.331,10.617,18.389,10.146,18.121,9.88 M14.963,17.245h-2.896v-3.313c0-0.229-0.186-0.415-0.414-0.415H8.342c-0.228,0-0.414,0.187-0.414,0.415v3.313H5.032v-6.628h9.931V17.245z M3.133,9.79l6.864-6.868l6.867,6.868H3.133z"/>
            </svg>
            {{ __('To Dashboard') }}
        </a>

        <div
                x-show="isOpen"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="bg-gray-200 dark:bg-gray-700 rounded-b-md p-5"
                wire:ignore.self>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <x-form.input type="email" id="email" name="email" :label="__('Email')" wire:model="email" />
                <x-form.daterange id="joined" name="joined" :label="__('Joined Date Range')" wire:model.lazy="joined" />
            </div>
        </div>

    </div>

    <div class="overflow-x-scroll shadow-md">
        <table>
        <thead>
        <tr>
            <th><a href="#" wire:click.prevent="sortBy('first_name')">{{ __('Name') }}</a></th>
            <th><a href="#" wire:click.prevent="sortBy('email')">{{ __('Email') }}</a></th>
            <th>{{ __('Joined') }}</th>
            <th>{{ __('Roles') }}</th>
            <th>{{ __('Action') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($this->users() as $user)
            <tr>
                <td class="flex">
                    <div>
                        @if (storage_exists($user->image))
                            <img src="{{ storage_url($user->image) }}" alt="{{ $user->name }}" width="30" class="h-8 w-8 rounded-full">
                        @endif
                    </div>
                    <div class="pl-1 pt-1">{{ $user->name }}</div>
                </td>
                <td>{{ $user->email }}</td>
                <td>
                    @if (! empty($user->invite_token))
                        <small class="dark:text-gray-300">{{ __('Invited') }}<br> {{ date('jS M Y H:i', strtotime($user->invited_at)) }}</small>
                    @else
                        {{ $user->created_at !=='' ? date('jS M Y', strtotime($user->created_at)) : '' }}
                    @endif
                </td>
                <td>
                    @foreach($user->roles as $role)
                        {{ $role->label }}<br>
                    @endforeach
                </td>
                <td>
                    <div class="flex space-x-2">

                            @can('view_users_profiles')
                                <a href="{{ route('admin.users.show', $user) }}">{{ __('Profile') }}</a>
                            @endcan

                            @if(can('edit_users'))
                                <a href="{{ route('admin.users.edit', $user) }}">{{ __('Edit') }}</a>
                            @elseif(auth()->id() === $user->id && can('edit_own_account'))
                                <a href="{{ route('admin.users.edit', $user) }}">{{ __('Edit') }}</a>
                            @endif

                            @if(can('add_users') && !empty($user->invite_token))
                                    <x-modal>
                                        <x-slot name="trigger">
                                            <a href="#" @click="on = true">{{ __('Resend Invite') }}</a>
                                        </x-slot>

                                        @if($sentEmail === false)
                                            <x-slot name="title">Send {{ $user->name }} {{ __('another invite email') }}.</x-slot>
                                            <x-slot name="content"></x-slot>
                                            <x-slot name="footer">
                                                <button @click="on = false">{{ __('Cancel') }}</button>
                                                <button class="btn btn-primary" wire:click="resendInvite('{{ $user->id }}')">{{ __('Yes, Send Email') }}</button>
                                            </x-slot>
                                        @else
                                            <x-slot name="title">{{ __('Invite email sent') }}</x-slot>
                                            <x-slot name="content"></x-slot>
                                            <x-slot name="footer">
                                                <button @click="on = false">{{ __('Close') }}</button>
                                            </x-slot>
                                        @endif
                                    </x-modal>
                            @endif

                            @if(can('delete_users') && auth()->id() !== $user->id)
                                <x-modal>
                                    <x-slot name="trigger">
                                        <a href="#" @click="on = true">{{ __('Delete') }}</a>
                                    </x-slot>

                                    <x-slot name="title">{{ __('Confirm Delete') }}</x-slot>

                                    <x-slot name="content">
                                        <div class="text-center">
                                            {{ __('Are you sure you want to delete') }}: <b>{{ $user->name }}</b>
                                        </div>
                                    </x-slot>

                                    <x-slot name="footer">
                                        <button @click="on = false">{{ __('Cancel') }}</button>
                                        <button class="btn btn-red" wire:click="deleteUser('{{ $user->id }}')">{{ __('Delete User') }}</button>
                                    </x-slot>
                                </x-modal>
                            @endif
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>

    {{ $this->users()->links() }}

</div>
