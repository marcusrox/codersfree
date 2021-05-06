<x-app-layout>

    <section class="bg-cover" style="background-image: url({{ asset('img/children-593313_1920.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Os melhores cursos de programação GRATIS para você aprender e sair da frente!</h1>
                <p class="text-white text-lg mt-2 mb-4">Se está buscando aumentar os seus conhecimento de programação, chegou ao lugar certo. Aqui você terá todos os recursos que te ajudarão neste processo </p>

                <div class="pt-2 relative mx-auto text-gray-600">

                    @livewire('search')

                </div>
            </div>
        </div>            
    </section>

    <div>Aqui vai o componente livewire('course-index')</div>

</x-app-layout>