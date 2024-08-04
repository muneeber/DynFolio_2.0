    {{-- The whole world belongs to you. --}}
    <div class="col-span-2 p-6 md:col-span-2 lg:col-span-3">
        <div class="text-xl font-medium mt-2 text-zinc-200 mb-5">What I know</div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            <div class="flex-1 flex flex-col gap-4 bg-cardPrimary p-4 rounded-md shadow-lg">
                @foreach ($skills as $set)
                    
                <div class="text-primary font-medium text-lg tracking-wider">{{ $set->name }}</div>
                <div class="flex flex-wrap gap-2">
                  @foreach ($set->skills as $skill)
                      
                    <div
                        class="rounded-md bg-body text-xs text-primary p-2  {{ $skill->border_color!='none' ? 'border' : '' }} {{ $skill->border_color }}">
                        {{ $skill->name }}
                        </div>
                  @endforeach
                
                    
                </div>
                @endforeach

            </div>
        </div>
    </div>
