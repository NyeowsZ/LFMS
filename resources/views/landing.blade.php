<x-layout class="">

    {{-- Main Container --}}
    <div class="min-h-[100vh] flex flex-col-reverse md:flex-row items-center">

        {{-- Introduction Container -> container to center --}}
        <div id="about" class="md:flex-1 h-[100vh] md:h-full flex items-center justify-center">

            {{-- Main Introduction Container --}}
            <div class="w-[100vw]  md:w-175 px-3 md:px-0 h-fit space-y-10 md:space-y-0">
                <h1 class="text-3xl md:text-5xl font-semibold font-merri">Lost & Found: Helping You Reconnect</h1>
                <p class="mt-5 font-poppins">Lost something? We make it simple to find it fast. Just report what’s missing or check out what’s been found. Every day, we help people get their stuff back.
                    .</p>

                    <div class="text-xl mt-5 space-x-2 font-semibold space-y-2">
                        <button class="px-4 py-3 bg-accent text-primary">
                            Report Lost Item
                        </button>

                        <button class="px-4 py-3 bg-accent text-primary">
                            Search Found Items
                        </button>
                    </div>
            </div>
        </div>
        {{-- Introduction Container End --}}


        {{-- Login Form Container --}}
        <div class="w-[100vw] h-[100vh] md:w-130 md:h-[100vh] bg-accent flex items-center justify-center p-15">

            {{-- Login Form Main Container --}}
            <div class="size-full text-primary md:px-10 font-poppins">

                <img data-aos="zoom-out-down" src="{{ asset('images/lf-logo.svg') }}" class="my-10 size-30 mx-auto invert drop-shadow-2xl drop-shadow-black">

                <h1 data-aos="fade-up" class="text-4xl font-bold mx-auto w-fit">Login</h1>
                
                <div class="input-group mt-10 text-xl space-y-2 relative">
                    <input type="text" name="" placeholder="" class="font-normal border-b-2 border-primary w-full outline-0">
                    <label>ID Number</label>
                </div>

                <div class="input-group mt-5 text-xl space-y-2 relative">
                    <input type="password" name="" placeholder="" class="font-normal border-b-2 border-primary w-full outline-0">
                    <label>Password</label>
                </div>

                <button class="mt-10 py-3 w-full bg-primary text-accent font-semibold text-lg">Login</button>

                <a href="#about" class="mt-5 block w-fit mx-auto py-1.5 px-10 ring-2 ring-primary text-primary font-semibold text-lg md:hidden">Learn More</a>
            </div>
        </div>
        {{-- Login Form End --}}


    </div>
</x-layout>