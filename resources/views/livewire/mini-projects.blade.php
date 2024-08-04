<div class="grid bg-cardPrimary gap-6 p-6 shadow-lg">
    <div class="text-xl font-medium mt-2 text-zinc-200">More projects</div>
    <div class="grid grid-cols-1 gap-4 rounded-lg">
        @foreach ($minis as $mini)
            
        <a target="_blank"
            href="{{ $mini->backLink }}">
            <div class="flex items-center gap-1 text-primary rounded-lg">
                {!! $mini->icon !!}
                <div class="flex flex-1 flex-col px-4 py-2">
                    <div class="flex text-sm font-medium">{{ $mini->name }}</div>
                    <div class="flex text-info text-xs ">{{ $mini->desc }}</div>
                </div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-chevron-right">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </div>
        </a>
        @endforeach
    </div>
</div>