<x-layout>
    <x-slot name="content">
        <article>
            <h1>{{ $post->title }}</h1>
            {!! $post->body !!}
        </article>
        <a href="/"> Go Back</a>
    </x-slot>
</x-layout>
