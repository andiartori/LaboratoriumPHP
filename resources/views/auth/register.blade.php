<x-layout>

    x-slot:title>
        Registration
    </x-slot:title>

    <div class="hero min-h-[calc(100vh - 16rem)]">
        <div class="hero-content flex-col">
            <div class="card w-96 bg-base-100">
                <div class="card-body">
                    <h1 class="text-3xl font-bold text-center mb-6">Create Account</h1>
                   <form method="POST" action="/register">
                        @csrf

                        {{-- Name --}}
                        <label class="floating-label mb-6">
                            <input text="text" name="name" placeholder="Put name here"value= "{{old('name')}}"
                            class="input input-bordered @error('name') input-error @enderror" 
                            >     
                            <span>Name</span>
                        </label>
                        @error('name')
                        <div class= "label -mt-4 mb-2" >
                            <span class="label-text-alt text-error" >{{ $message }}</span>
                        </div>
                        @enderror

                        {{-- Email --}}
                        <label class="floating-label mb-6">
                            <input text="email" name="email" placeholder="Put email here" value= "{{old('email')}}"
                            class="input input-bordered @error('email') input-error @enderror" 
                            >     
                            <span>Email</span>
                        </label>
                        @error('email')
                        <div class= "label -mt-4 mb-2" >
                            <span class="label-text-alt text-error" >{{ $message }}</span>
                        </div>
                        @enderror

                        {{-- Password --}}
                        <label class="floating-label mb-6">
                            <input text="password" name="password" placeholder="Put password here" value="{{ old('password') }}"
                            class="input input-bordered @error('password') input-error @enderror">
                            <span>Password</span>
                        </label>

                        @error('password')
                        div class= "label -mt-4 mb-2" >
                            <span class="label-text-alt text-error" >{{ $message }}</span>
                        </div>
                        @enderror

                        {{-- Password Confirmation --}}
                        <label class="floating-label mb-6">
                            <input text="password" name="password_confirmation" placeholder="Put password confirmation here" value="{{ old('password_confirmation') }}"
                            class="input input-bordered @error('password_confirmation') input-error @enderror">
                            <span>Password Confirmation</span>

                        </label>

                        {{-- Submit Button --}}
                        <div class="form-control mt-8">
                            <button type="submit" class="btn btn-primary btn-sm w-full">Register</button>
                        </div>
                    </form>
                    
                    <div class="devider" >OR</div>
                    <p class="text-center text-sm" >Already have an account ?
                        <a href="/login" class="link link-primary" >Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-layout>