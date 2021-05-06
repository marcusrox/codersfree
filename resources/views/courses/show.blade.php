<x-app-layout>
    <section class="bg-gray-700 py-12 mb-6">
        <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">
            <figure>
                <img class="h-60 w-full object-cover" src="{{ Storage::url($course->image->url )}}" alt="">
            </figure>
            <div class="text-white">
                <h1 class="text-4xl">{{ $course->title }}</h1>
                <h2 class="text-xl mb-3">{{ $course->title }}</h2>
                <p class="mb-2"><i class="fas fa-chart-line"></i> Nivel: {{ $course->level->name }}</p>
                <p class="mb-2">Categoria: {{ $course->category->name }}</p>
                <p class="mb-2"><i class="fas fa-users"></i> Matriculados: {{ $course->students_count }}</p>
                <p><i class="far fa-star"></i> Qualificação: {{ $course->rating }}</p>
                <p></p>
            </div>
        </div>
    </section>

    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <div class="order-2 lg:col-span-2 lg:order-1">
            <section class="card mb-6">
                <div class="card-body">
                    <h1 class="font-bold text-2xl mb-2">O que você aprenderá</h1>
                </div>
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2 pl-4">
                    @foreach($course->goals as $goal)
                        <li class="text-gray-700 text-base"><i class="fas fa-check text-gray-600 mr-2"></i> {{ $goal->name }}</li>
                    @endforeach
                </ul>
            </section>

            <section class="mb-6">
                <h1 class="font-bold text-3xl mb-2">Temas</h1>
                @foreach($course->sections as $section)
                    <article class="mb-4 shadow" 
                        @if ($loop->first)
                            x-data="{ open: true }"
                        @else 
                            x-data="{ open: false }"
                        @endif
                        >

                        <header class="border border-gray-200 px-4 py-2 cursor-pointer bg-gray-200" x-on:click="{ open = !open}">
                            <h1 class="font-bold text-lg text-gray-600">{{ $section->name }}</h1>
                        </header>

                        <div class="bg-white py-2 px-4" x-show="open">
                            <ul class="grid grid-cols-1 gap-2">
                            @foreach($section->lessons as $lesson)
                                <li class="text-gray-700 text-base mb-2"> <i class="fas fa-play-circle"></i> {{ $lesson->name }}</li>
                            @endforeach
                            </ul>
                        </div>

                    </article>
                @endforeach
            </section>

            <section class="mb-8">
                <h1 class="font-bold text-3xl">Requisitos</h1>
                <ul class="list-disc list-inside">
                    @foreach($course->requirements as $requirement)
                        <li class="text-gray-700 text-base">{{ $requirement->name }}</li>
                    @endforeach
                </ul>
            </section>

        </div>

        <div class="order-1 lg:order-2">
            <section class="card mb-4">
                <div class="card-body">
                    <div class="flex items-center">
                        <img class="h-12 w-12 object-cover rounded-full shadow-lg"
                            src="{{ $course->teacher->profile_photo_url }}" 
                            alt="">
                        <div class="ml-4">
                            <h1 class="font-bold text-gray-500 text-lg">Prof. {{ $course->teacher->name }}</h1>
                        </div>
                    </div>
                    @can('enrolled', $course)
                        <form method="post" action="{{ route('courses.enrolled', $course) }}">
                            @csrf
                            <button class="btn btn-danger btn-block mt-4">Matricular nesse curso</a>
                        </form>
                    @else
                        <a class="btn btn-danger btn-block mt-4" href="{{ route('courses.status', $course) }}">Assistir esse curso</a>
                    @endcan
                </div>
            </section>

            <aside class="hidden lg:block">
                @foreach($similares as $similar)
                    <article class="flex mb-6">
                        <img class="h-32 w-40 object-cover" src="{{ Storage::url($similar->image->url) }}" alt="">
                        <div class="ml-3">
                            <h1><a class="font-bold text-gray-500 mb-3" href="{{ route('courses.show', $course) }}">{{ Str::limit($similar->title, 30) }}</a></h1>
                            <div class="flex items-center">
                                <img class="h-8 w-8 object-cover rounded-full shadow-lg" src="{{ $similar->teacher->profile_photo_url }}" alt="">
                                <p class="text-gray-700 text-sm ml-2">{{ $similar->teacher->name }}</p>
                            </div>
                        </div>
                        <p class="text-sm">
                            <i class="fas fa-star mr-2 text-yellow-400"></i> {{ $similar->rating }}
                        </p>
                    </article>
                @endforeach
            </aside>
                

        </div>


    </div>

</x-app-layout>