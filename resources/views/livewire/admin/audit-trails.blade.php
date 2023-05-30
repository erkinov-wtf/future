@section('title', __('Audit Trail'))
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar">
            @include('layouts.navigation')
        </nav>

        <main class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div>
                <h1>{{ __('Audit Trails') }}</h1>

                <div class="mt-5 grid sm:grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="col-span-2">
                        <x-form.input type="search" id="title" name="title" wire:model="title" label="none"
                                      :placeholder="__('Search Actions')"/>
                    </div>
                </div>

                <div class="mb-5"
                     x-data="{ isOpen: @if($openFilter || request('openFilter')) true @else false @endif }">

                    <button type="button" @click="isOpen = !isOpen"
                            class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs leading-4 font-medium rounded-t text-grey-700 bg-gray-200 hover:bg-grey-300 dark:bg-gray-700 dark:text-gray-200 transition ease-in-out duration-150">
                        <svg class="h-5 w-5 text-gray-500 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                        {{ __('Advanced Search') }}
                    </button>

                    <button type="button" wire:click="resetFilters" @click="isOpen = false"
                            class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs leading-4 font-medium rounded text-grey-700 bg-gray-200 hover:bg-grey-300 dark:bg-gray-700 dark:text-gray-200 transition ease-in-out duration-150">
                        <svg class="h-5 w-5 text-gray-500 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
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

                            <x-form.select id="user_id" name="user_id" :label="__('User')" wire:model="user_id">
                                <option value="">Select</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </x-form.select>

                            <x-form.select id="section" name="section" :label="__('Section')" wire:model="section">
                                <option value="">Select</option>
                                @foreach($sections as $section)
                                    <option value="{{ $section }}">{{ $section }}</option>
                                @endforeach
                            </x-form.select>

                            <x-form.select id="type" name="type" :label="__('Type')" wire:model="type">
                                <option value="">Select</option>
                                @foreach($types as $type)
                                    <option value="{{ $type }}">{{ $type }}</option>
                                @endforeach
                            </x-form.select>

                            <x-form.daterange id="created_at" name="created_at" :label="__('Created Date Range')"
                                              wire:model.lazy="created_at"/>
                        </div>
                    </div>

                </div>

                <div class="overflow-scroll">
                    <table>
                        <thead>
                        <tr>
                            <th>
                                <a href="#" wire:click.prevent="sortBy('user_id')" role="button"
                                   href="#">{{ __('User') }}</a>
                            </th>
                            <th>
                                <a href="#" wire:click.prevent="sortBy('title')" role="button"
                                   href="#">{{ __('Action') }}</a>
                            </th>
                            <th>
                                <a href="#" wire:click.prevent="sortBy('section')" role="button"
                                   href="#">{{ __('Section') }}</a>
                            </th>
                            <th>
                                <a href="#" wire:click.prevent="sortBy('type')" role="button"
                                   href="#">{{ __('Type') }}</a>
                            </th>
                            <th>
                                <a href="#">{{ __('View') }}</a>
                            </th>
                            <th>
                                <a href="#" wire:click.prevent="sortBy('created_at')" role="button"
                                   href="#">{{ __('Created At') }}</a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($this->userlogs() as $log)
                            <tr>
                                <td>{{ $log->user->name ?? '' }}</td>
                                <td>{{ $log->title }}</td>
                                <td>{{ $log->section }}</td>
                                <td>{{ $log->type }}</td>
                                <td>
                                    @if ($log->link !== null)
                                        <a href="{{ url($log->link) }}">{{ __('View') }}</a>
                                    @endif
                                </td>
                                <td>{{ $log->created_at !=='' ? date('jS M Y H:i:s', strtotime($log->created_at)) : '' }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                {{ $this->userlogs()->links() }}

            </div>
        </main>
    </div>
</div>
