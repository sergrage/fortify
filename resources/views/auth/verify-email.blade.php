<x-app-layout>
    <div class="mt-52 overflow-hidden flex items-center justify-center">
        <div class="flex items-center bg-white dark:bg-gray-900" style="width: 600px;">
            <div class="container mx-auto">
                <div class="my-10">
                    <div class="text-center">
                        <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Подтверждение регистрации</h1>
                        <p class="text-gray-500 dark:text-gray-400">
                            Спасибо, что зарегистрировались на сайте. На Вашу почту отправлена ссылка с подтверждением.
                            Если Вы не получили ссылку, то мы отправим Вам новую!</p>

                        @if(session('status') == 'verification-link-sent')
                            <div class="mb-14 font-medium text-sm text-green-600">
                                Новая ссылка была отправлена на Вашу почту для подверрждения регистрации.
                            </div>
                        @endif
                        <div class="mt-4 flex items-center justify-center">
                            <form action="{{ route('verification.send')  }}" method="POST">
                                @csrf
                                <div class="mb-6">
                                    <button class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none" type="submit" >Отправить ссылку заново</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
