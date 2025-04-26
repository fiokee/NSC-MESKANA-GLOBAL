<x-app-layout name="Blog">
    <h2>Blog Posts</h2>

    <div class="blog-grid">
        @foreach ($posts as $post)
            <div class="blog-card" onclick="location.href='{{ route('blog.show', $post->slug) }}';">
                <img class="blog-img" src="{{ asset('storage/' . $post->image) }}" loading="lazy" alt="{{ $post->title }}">
                <div class="overlay"></div>
                <div class="content">
                    <div class="tag">{{ $post->category->name ?? 'General' }}</div>
                    <h1 class="title">{{ $post->title }}</h1>
                    <div class="date">{{ $post->created_at->format('d M. Y') }}</div>
                </div>
            </div>
        @endforeach
    </div>

   <!-- Pagination -->
<nav class="pagination">
    {{ $posts->links('vendor.pagination.custom') }}
</nav>

</x-app-layout>
