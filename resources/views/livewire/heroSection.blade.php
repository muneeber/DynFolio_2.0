    <div  style=" background-image: url('{{ asset('images/cover.jpeg') }}');"  class="flex  rounded-lg w-full  bg-no-repeat bg-cover">
        <div
            class="px-3 flex justify-center md:rounded -ld  overflow-hidden md:px-10 py-5 bg-blur backdrop-filter backdrop-blur-md w-full gap-2 md:gap-10">
            <div class="">
                <img alt="Neeraj Walia" loading="lazy" width="120" height="120" decoding="async"
                    class="object-cover border-4 border-white rounded-full shadow-md"
                    style="color:transparent"
                    src="{{ asset('images/avatar.jpg') }}">
            </div>
            <div class="flex md:flex-1 flex-col justify-center gap-4">
                <div class="flex justify-between items-center gap-5 ">
                    <div class="text-2xl md:text-3xl flex flex-col font-bold text-highlight">{{ $name }}<div
                            class="text-sm font-thin flex justify-between items-center">{{ $handle }}<a
                                class="block md:hidden" target="_blank"
                                href="https://instagram.com/ezSnippet">
                                <button
                                    class="h-max w-max flex gap-2 justify-center items-center rounded-md outline-0 active:scale-95 active:shadow-inner disabled:opacity-50 disabled:pointer-events-none disbaled:cursor-not-allowed bg-cardPrimary text-primary font-semibold text-xs p-2">
                                    {!! $btn_icon !!}
                                </button></a></div>
                    </div><a class="hidden md:block" target="_blank"
                        href="{{ $backLink }}"><button
                            class="h-max w-max flex gap-2 justify-center items-center rounded-md outline-0 active:scale-95 active:shadow-inner disabled:opacity-50 disabled:pointer-events-none disbaled:cursor-not-allowed bg-cardPrimary text-primary font-semibold text-xs py-2 px-4">
                            {!! $btn_icon !!}<span class="hidden md:block">{{ $btn_text }}</span></button></a>
                </div>
            </div>

        </div>
    </div>
