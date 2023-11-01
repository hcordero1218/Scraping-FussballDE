@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Bloque para Pichanga FC FEM -->
<div class="text-left">
    <h1 class="text-5xl uppercase relative">
        <span class="underline decoration-8 decoration-red-700">Pichanga FC</span> FEM
    </h1>
    <div class="flex flex-col md:flex-row mt-4">
        <div class="w-full md:w-2/5 md:mr-4 mb-4 md:mb-0">
            <div class="h-full">
                @include('pfem.lastmatch')
            </div>
        </div>
        <div class="w-full md:w-3/5">
            <div class="h-full">
                @include('pfem.matches')
            </div>
        </div>
    </div>

    <div class="my-4"></div>
    <div id="accordion-collapse-1" data-accordion="collapse">
    <h2 id="accordion-collapse-heading-1">
        <button type="button"
            class="flex items-center justify-between w-full p-5 font-medium text-left rounded-t-xl text-gray-500 border border-gray-0 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover.bg-gray-100 dark:hover.bg-gray-800"
            data-accordion-target="#accordion-collapse-body-1" aria-expanded="false"
            aria-controls="accordion-collapse-body-1">
            <span>Table Bezirksliga 2023/24</span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 5 5 1 1 5" />
            </svg>
        </button>
    </h2>
    <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
        <div class="w-full p-5 sm:w-auto">
        @include('pfem.table')
        </div>
    </div>
</div>

</div>
<div class="my-4"></div>
<!-- Bloque para Pichanga FC 7 -->
<div class="text-left">
    <h1 class="text-5xl uppercase relative">
        <span class="underline decoration-8 decoration-red-700">Pichanga FC</span> 7
    </h1>
    <div class="flex flex-col md:flex-row mt-4">
        <div class="w-full md:w-2/5 md:mr-4 mb-4 md:mb-0">
            <div class="h-full">
                @include('p7.lastmatch')
            </div>
        </div>
        <div class="w-full md:w-3/5">
            <div class="h-full">
                @include('p7.matches')
            </div>
        </div>
    </div>

    <div class="my-4"></div>
    <div id="accordion-collapse-2" data-accordion="collapse">
        <h2 id="accordion-collapse-heading-2">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-left rounded-t-xl text-gray-500 border border-gray-0 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                aria-controls="accordion-collapse-body-2">
                <span>Table Landesliga 2023/24</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
            <div class="p-5 ">
                @include('p7.table')
            </div>
        </div>
    </div>
</div>
<div class="my-4"></div>

<!-- Bloque para Pichanga FC 11 -->
<div class="text-left">
    <h1 class="text-5xl uppercase relative">
        <span class="underline decoration-8 decoration-red-700">Pichanga FC</span> 11
    </h1>
    <div class="flex flex-col md:flex-row mt-4">
        <div class="w-full md:w-2/5 md:mr-4 mb-4 md:mb-0">
            <div class="h-full">
                @include('p11.lastmatch')
            </div>
        </div>
        <div class="w-full md:w-3/5">
            <div class="h-full">
                @include('p11.matches')
            </div>
        </div>
    </div>

    <div class="my-4"></div>
    <div id="accordion-collapse-3" data-accordion="collapse">
        <h2 id="accordion-collapse-heading-3">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-left rounded-t-xl text-gray-500 border border-gray-0 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                aria-controls="accordion-collapse-body-3">
                <span>Table Verbandsliga 2023/24</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
            <div class="p-5">
                @include('p11.table')
            </div>
        </div>
    </div>
</div>

@endsection