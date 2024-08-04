<div>
     <aside  id="aside" class="{{ $state }} lg:flex h-screen fixed w-screen  sm:w-[300px] z-30">
            <div class=" toggle flex flex-col lg:m-5 w-full">
                <div class="hidden lg:flex  gap-2 p-5 pt-0">
                    <div class=" size-4 bg-green-400 rounded-full"></div>
                    <div class=" size-4 bg-green-400 rounded-full"></div>
                </div>
                <div
                    class=" flex relative flex-col h-full p-5 text-[#8b8a91] bg-[#1c1b23] rounded-lg w-full  overflow-y-auto pb-20 md:pb-5">
                    <div wire:click='close' class="block lg:hidden p-5 z-10 text-primary absolute right-0 top-0 cursor-pointer text-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="text-primary">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </div>
                    @foreach ($mainLinks as $link)
                        
                    <a class="flex bg-transparent items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4"
                        href="{{ $link->link }}">
                        {!! $link->icon !!}
                        {{ $link->name }}
                    </a>
                    @endforeach
                    
                    <div class="mt-5">Socials</div>
                 
                   
                    @foreach ($socialLinks as $link)
                       
                    <a target="_blank"
                    class="flex bg-transparent items-center placeholder:text-info transform transition-transform duration-300 hover:-translate-y-1 text-sm gap-4 p-4"
                    href="{{ $link->link }}">
                    {!! $link->icon !!} {{ $link->name }}</a>
                   @endforeach

                   
               
                </div>
            </div>
        </aside>
        @script
<script>
    $wire.on('toggle', () => {
        document.querySelector('#aside').classList.remove('hidden');
        
    });
</script>
@endscript
</div>
