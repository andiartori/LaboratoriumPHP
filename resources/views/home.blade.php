<x-layout>

    <x-slot:title>
        Welcome
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold">Welcome to Chirper!</h1>
        <p class="mt-4 text-base-content/60">This is your brand new Laravel application. Time to make it
            sing (or chirp)!</p>
        @forelse($chirps as $chirp)
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                        <div class="semibold">{{$chirp->user ? $chirp->user->name : "Anonymous"}}</div>
                    <div class="mt-1">
                        {{ $chirp->message  }}
                    </div>
                    <div class="mt-1">
                        {{ $chirp->created_at->diffForHumans()  }}
                    </div>

                </div>

            </div>

        @empty
        <div> <p>No Chirp for the moment</p> </div>
        @endforelse

{{--        The Old Code of having a dummy data.--}}
{{--        @foreach($chirps as $chirp)--}}
{{--            <div class="card bg-base-100 shadow mt-8">--}}
{{--                <div class="card-body">--}}
{{--                    <div>--}}

{{--                        <p> {{ $chirp['author'] }}</p>--}}
{{--                        <p> {{ $chirp['message'] }}</p>--}}
{{--                        <p> {{ $chirp['time']  }} </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
    </div>
</x-layout>
