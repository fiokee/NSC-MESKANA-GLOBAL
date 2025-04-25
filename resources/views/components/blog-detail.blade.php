<x-app-layout>
  <div class="container mx-auto py-8">
      {{-- Hero Image --}}
      @if ($post->image)
          <div class="blog-hero mb-6">
              <img
                  src="{{ asset('storage/' . $post->image) }}"
                  alt="{{ $post->title }}"
                  class="w-full h-64 object-cover rounded-lg shadow-md"
              />
          </div>
      @endif

      {{-- Title & Date --}}
      <h1 class="blog-title text-4xl font-bold mb-2">{{ $post->title }}</h1>
      <p class="blog-date text-gray-500 mb-6">
          Published on {{ $post->created_at->format('F j, Y') }}
      </p>

      {{-- Body --}}
      <div class="blog-body prose max-w-none">
        {!! str( $post->content)->sanitizeHtml() !!}
      </div>

      {{-- Related Posts --}}
      @if (!empty($relatedPosts) && $relatedPosts->count())
          <h2 class="mt-16 text-2xl font-semibold">Related Posts</h2>
          <div class="grid gap-6 md:grid-cols-3 mt-4">
              @foreach ($relatedPosts as $related)
                  <a href="{{ route('blog.show', ['slug' => $related->slug]) }}" class="block group">
                      <img
                          src="{{ asset('storage/' . $related->image) }}"
                          alt="{{ $related->title }}"
                          class="w-full h-40 object-cover rounded-md group-hover:opacity-75 transition"
                      />
                      <h3 class="mt-2 text-lg font-medium group-hover:text-primary">
                          {{ $related->title }}
                      </h3>
                  </a>
              @endforeach
          </div>
      @endif
  </div>


   {{-- {{-- <h2 style="margin-top: 60px; color: #001f3f;">Related Posts</h2>
    <div style="display: grid; gap: 20px; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); margin-top: 20px;">
  
  <a href="/blog/how-to-choose-solar-battery" style="text-decoration: none; color: inherit;">
    <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 2px 10px #00000010; transition: transform 0.4s ease;">
      <img src="img/furnitures (3).jpeg" alt="How to Choose a Solar Battery" style="width: 100%; height: 180px; object-fit: cover;">
      <div style="padding: 10px;">
        <h3 style="font-size: 18px; color: #001f3f;">How to Choose a Solar Battery</h3>
      </div>
    </div>
  </a> --}}
</x-app-layout>
