<fieldset>
    <form class="space-y-5" method="POST" action="{{ route('movies.search') }}">
        @csrf
        <div>
            <label for="title" class="block text-sm/6 font-medium text-gray-900">Tytuł filmu</label>
            <div class="mt-2">
                <div class="flex rounded-md bg-white outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" name="title" id="title" class="block min-w-0 grow px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" value="{{ old('title', request()->title) }}">
                </div>
                @error('title')
                    {{ $message }}
                @enderror
            </div>
        </div>

        <div class="flex gap-3">
            <div class="flex h-6 shrink-0 items-center">
                <div class="group grid size-4 grid-cols-1">
                    <input id="algorithm1" aria-describedby="algorithm1-description" name="algorithm1" type="checkbox" @checked(request('algorithm1')) class="col-start-1 row-start-1 appearance-none rounded border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                    <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-[:disabled]:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                        <path class="opacity-0 group-has-[:checked]:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path class="opacity-0 group-has-[:indeterminate]:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div class="text-sm/6">
                <label for="algorithm1">
                    <p class="font-medium text-gray-900">3 losowe tytuły</p>
                    <p id="algorithm1-description" class="text-gray-500">Zwracane są 3 losowe tytuły.</p>
                </label>
            </div>
        </div>
        <div class="flex gap-3">
            <div class="flex h-6 shrink-0 items-center">
                <div class="group grid size-4 grid-cols-1">
                    <input id="algorithm2" aria-describedby="algorithm2-description" name="algorithm2" type="checkbox" @checked(request('algorithm2')) class="col-start-1 row-start-1 appearance-none rounded border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                    <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-[:disabled]:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                        <path class="opacity-0 group-has-[:checked]:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path class="opacity-0 group-has-[:indeterminate]:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div class="text-sm/6">
                <label for="algorithm2">
                    <p class="font-medium text-gray-900">Na literę "W", parzysty tytuł</p>
                    <p id="algorithm2-description" class="text-gray-500">Zwracane są wszystkie filmy na literę ‘W’ ale tylko jeśli mają parzystą liczbę znaków w tytule.</p>
                </label>
            </div>
        </div>
        <div class="flex gap-3">
            <div class="flex h-6 shrink-0 items-center">
                <div class="group grid size-4 grid-cols-1">
                    <input id="algorithm3" aria-describedby="algorithm3-description" name="algorithm3" type="checkbox" @checked(request('algorithm3')) class="col-start-1 row-start-1 appearance-none rounded border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                    <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-[:disabled]:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                        <path class="opacity-0 group-has-[:checked]:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path class="opacity-0 group-has-[:indeterminate]:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div class="text-sm/6">
                <label for="algorithm3">
                    <p class="font-medium text-gray-900">Więcej niż jedno słowo</p>
                    <p id="algorithm3-description" class="text-gray-500">Zwracane są wszystkie tytuły, które składają się z więcej niż 1 słowa.</p>
                </label>
            </div>
        </div>

        <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 mb-7 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Szukaj
            </button>
        </div>
    </form>
</fieldset>
