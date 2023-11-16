@extends('layouts.app')

@section('content')



        <!-- Основной контент (правая часть) -->
        <div class="w-full p-4 main_content">
            <div class="flex flex-col space-y-4 mb-5">
                <h2 class="font-semibold text-2xl mb-0">Уведомления</h2> <!-- Заголовок "Уведомления" -->

                <!-- Уведомление 1 - Выполнено (зеленый) -->
                <div class="notification red">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="font-semibold text-lg">Обновления в доставке Name (id)</div>
                            <div class="text-gray-600">Статус звена Точка А - Точка Б изменился: выполнено</div>
                        </div>
                        <button class="text-white px-4 py-2 rounded">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Уведомление 2 - В работе (желтый) -->
                <div class="notification green">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="font-semibold text-lg">Обновления в доставке Name (id)</div>
                            <div class="text-gray-600">Статус звена Точка А - Точка Б изменился: в работе</div>
                        </div>
                        <button class="text-white px-4 py-2 rounded">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Уведомление 3 - Задерживается (красный) -->
                <div class="notification yellow">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="font-semibold text-lg">Обновления в доставке Name (id)</div>
                            <div class="text-gray-600">Статус звена Точка А - Точка Б изменился: задерживается</div>
                        </div>
                        <button class="text-white px-4 py-2 rounded">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex flex-col space-y-4 mb-5">
                <h2 class="font-semibold text-2xl mb-0">Последние доставки</h2>

                <div class="delivery">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="font-semibold text-lg">Обновления в доставке Name (id)</div>
                            <div class="text-gray-600">Статус звена Точка А - Точка Б изменился: выполнено</div>
                        </div>
                        <button class="text-white px-4 py-2 rounded">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <div class="delivery">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="font-semibold text-lg">Обновления в доставке Name (id)</div>
                            <div class="text-gray-600">Статус звена Точка А - Точка Б изменился: в работе</div>
                        </div>
                        <button class="text-white px-4 py-2 rounded">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <div class="delivery">
                    <div class="flex justify-between items-center">
                        <div>
                            <div class="font-semibold text-lg">Обновления в доставке Name (id)</div>
                            <div class="text-gray-600">Статус звена Точка А - Точка Б изменился: задерживается</div>
                        </div>
                        <button class="text-white px-4 py-2 rounded">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>




@endsection
