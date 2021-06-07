<x-app-layout>
    <div class="container py-8 grid grid-cols-5">
        <aside>
            <h1 class="font-bold text-lg mb-4">Editar Curso</h1>
            <ul class="text-sm text-gray-600">
                <li class="leading-7 mb-1 border-l-4 border-indigo-400 pl-2"><a href="">Informações do Curso</a></li>
                <li class="leading-7 mb-1 border-l-4 border-transparent"><a href="">Atividades do Curso</a></li>
                <li class="leading-7 mb-1 border-l-4 border-transparent"><a href="">Objetivos do Curso</a></li>
                <li class="leading-7 mb-1 border-l-4 border-transparent"><a href="">Alunos</a></li>
            </ul>
        </aside>
        <div class="col-span-4 card">
            <div class="card-body text-gray-600">
                <h1 class="text-2xl font-bold uppercase">Informações do Curso</h1>
                <hr class="mt-2 mb-6">

                {!! Form::model($course, ['route' => ['instructor.courses.update', $course], 'method' => 'put', 'files' => true]) !!}
                    
                    @include('instructor.courses.partials.form')

                    <div class="flex justify-end">
                        {!! Form::submit('Salvar', ['class' => 'btn btn-blue cursor-pointer']) !!}
                    </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>

    @push('js')
        
    @endpush

</x-app-layout>