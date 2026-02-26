<nav class="flex mb-4" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3 flex-wrap text-slate-700 font-medium">
        <li class="inline-flex items-center">
            <a href="/dashboard" class="inline-flex items-center hover:text-blue-600 transition-colors">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/></svg>
                Inicio
            </a>
        </li>

        @foreach($links as $label => $url)
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    <a href="{{ $url }}" class="ml-1 md:ml-2 hover:text-blue-600 transition-colors">{{ $label }}</a>
                </div>
            </li>
        @endforeach
    </ol>
</nav>