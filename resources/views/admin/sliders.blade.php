<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Слайды') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">

                    <div class="col-span-6 sm:col-span-4 mb-6">
                        <a href="{{ route('renderAddSliderPage') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50 transition ease-in-out duration-150">Добавить</a>
                    </div>
                    
                    <table>
                        <thead>
                            <tr>
                                <th>Заголовок</th>
                                <th>Описание</th>
                                <th>Кнопка</th>
                                <th>Ссылка</th>
                                <th>Изображение</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sliders as $slider)
                                <tr>
                                    <td>{{ $slider->title }}</td>
                                    <td>
                                        <small>{{ $slider->description }}</small>
                                    </td>
                                    <td>{{ $slider->btn_name }}</td>
                                    <td>{{ $slider->btn_link }}</td>
                                    <td>
                                        <img src="/storage/{{ $slider->image }}" width="150" />
                                    </td>
                                    <td>
                                        <form action="{{ route('deleteSlide', $slider->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-red-500" type="submit">Удалить</button>
                                        </form>
                                        <a href="{{ route('renderEditSlide', $slider->id) }}">Редактировать</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
        <style>
            table {
                width: 100%;
                text-align: left;
                color: white;
            }
            table tr {
                border-bottom: 1px solid white;
            }
        </style>
    </div>
</x-app-layout>
