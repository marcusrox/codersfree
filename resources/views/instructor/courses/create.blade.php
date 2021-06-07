<x-app-layout>
    <div class="comtainer py-8">
        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl font-bold">Criar novo curso</h1>
                <hr class="mt-2 mb-6">
                {!! Form::open(['route' => 'instructor.courses.store', 'files' => true, 'autocomplete' => 'off']) !!}
                {!! Form::hidden('user_id', auth()->user()->id) !!}
                @include('instructor.courses.partials.form')

                <div class="flex justify-end">
                    {!! Form::submit('Salvar', ['class' => 'btn btn-blue cursor-pointer']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</x-app-layout>