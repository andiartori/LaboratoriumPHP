<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold">Welcome to Chirper!</h1>
        <p class="mt-4 text-base-content/60">This is your brand new Laravel application. Time to make it
            sing (or chirp)!</p>

        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <form action="/chirps" method="POST">
                    @csrf
                    <div class="rounded-lg w-full form-control ">
                        <textarea name ="message", placeholder="Input your chirp" rows= "4", maxlength = "255", required,
                            class="text-area text-area-bordered w-full resize-none">
                         </textarea>
                    </div>

                    @error('message')
                        <div class='label'>
                            <span class='label-text-alt text-error'>{{ $message }}</span>
                        </div>
                    @enderror

                    <div class="flex justify-end p-5">
                        <button type="submit" class="btn btn-primary btn-sm">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>


        @forelse($chirps as $chirp)
            <x-chirp :chirp="$chirp" />
        @empty

            <div>
                <p>No Chirp for the moment</p>
            </div>
        @endforelse

        {{--        The Old Code of having a dummy data. --}}
        {{--        @foreach ($chirps as $chirp) --}}
        {{--            <div class="card bg-base-100 shadow mt-8"> --}}
        {{--                <div class="card-body"> --}}
        {{--                    <div> --}}

        {{--                        <p> {{ $chirp['author'] }}</p> --}}
        {{--                        <p> {{ $chirp['message'] }}</p> --}}
        {{--                        <p> {{ $chirp['time']  }} </p> --}}
        {{--                    </div> --}}
        {{--                </div> --}}
        {{--            </div> --}}
        {{--        @endforeach --}}
    </div>
</x-layout>
