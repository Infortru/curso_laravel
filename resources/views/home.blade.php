    <x-app-layout>
        <div class="max-w-4xl mx-auto px-4">
            <h1>Bienvenido, esta es la página de inicio</h1>

            <x-alert2 type="danger" class="mb-14">
                <x-slot name="title">
                    Título de la alerta
                </x-slot>
                Contenido de la alerta
            </x-alert2>
            <p>Hola mundo</p>
        </div>
    </x-app-layout>
