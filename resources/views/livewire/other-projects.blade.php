<section class="grid gap-5 p-5 md:p-0">
    @foreach ($projects as $project)
        
    <div class="text-xl font-bold text-highlight">{{ $project->name }}</div>
    <div class="grid text-white grid-cols-2 md:grid-cols-4 lg:grid-cols-4 xl::grid-cols-5 gap-5">
        
        @foreach ($project->projects as $item)
            
        <div class="flex flex-col gap-3">
            <a target="_blank" href="/">
                <div class="relative aspect-video rounded-lg overflow-hidden"><img alt="Solidity"
                        loading="lazy" decoding="async" data-nimg="fill" class="object-cover"
                        style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                        sizes="100vw"
                        src="{{ Storage::url($item->image) }}">
                    <div class="progress-bar">
                        <div class="h-full bg-btnHighlight" style="width:90%"></div>
                    </div>
                </div>
            </a>
            <div class="grid gap-2 px-2">
                <div class="text-highlight font-bold">{{ $item->name }}</div>
                <div class="flex gap-2 md:gap-10"><a target="_blank"
                        class="flex items-center text-info text-xs gap-1" href="/"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-code">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg>1,128</a><a target="_blank"
                        class="flex items-center text-info text-xs gap-1" href="/"><svg
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-history">
                            <path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path>
                            <path d="M3 3v5h5"></path>
                            <path d="M12 7v5l4 2"></path>
                        </svg>{{ $project->created_at->diffForHumans() }}</a></div>
            </div>
        </div>
        @endforeach
      
    </div>
    @endforeach
    
</section>