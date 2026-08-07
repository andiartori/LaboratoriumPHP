<x-layout>

    <x-slot:title>
        LoginPage
    </x-slot:title>

    <div class="hero min-h-[calc(100vh_-_16rem)]">
        <div class="hero-content flex-col">
            <div class="card w-96 bg-base-100">
                <div class="card-body">
                    <h1 class="text-3xl font-bold text-center mb-6">Create Account</h1>
                    <form method="POST" action="/login">
                        @csrf


                        {{-- Email --}}
                        <label class="floating-label mb-6">
                            <input type="email" name="email" placeholder="Put email here" value= "{{ old('email') }}"
                                class="input input-bordered @error('email') input-error @enderror">
                            <span>Email</span>
                        </label>
                        @error('email')
                            <div class= "label -mt-4 mb-2">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror

                        {{-- Password --}}
                        <label class="floating-label mb-6">
                            <input type="password" name="password" placeholder="Put password here"
                                value="{{ old('password') }}"
                                class="input input-bordered @error('password') input-error @enderror">
                            <span>Password</span>
                        </label>

                        @error('password')
                            <div class= "label -mt-4 mb-2">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror

                        <!-- Remember Me Button -->
                        <div class="form-control mt-4">
                            <label class="label cursor-pointer justrify-start">
                                <input type="checkbox" name="remember" class="checkbox">
                                <span class="label-text ml-2">Remember Me</span>
                            </label>
                        </div>

                        {{-- Login Button --}}
                        <div class="form-control mt-8">
                            <button type="submit" class="btn btn-primary btn-sm w-full">Login</button>
                        </div>
                    </form>

                    <div class="devider">OR</div>
                    <p class="text-center text-sm">Dont have account ?
                        <a href="/register" class="link link-primary">Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-layout>
