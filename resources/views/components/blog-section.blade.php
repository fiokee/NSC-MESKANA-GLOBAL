<x-app-layout>
    <h2>Blog Posts</h2>

  <div class="blog-grid">
    <!-- Blog Card 1 -->
    <div class="blog-card" onclick="location.href='blog-detail.html';">
      <img class="blog-img" src="img/furnitures (3).jpeg" loading="lazy" alt=""></img>
      <div class="overlay"></div>
      <div class="content">
        <div class="tag">Travel</div>
        <h1 class="title">Travel is coming new</h1>
        <div class="date">18 Sep. 2017</div>
      </div>
    </div>

    <!-- Blog Card 2 -->
    <div class="blog-card" onclick="location.href='blog-detail.html';">
      <img class="blog-img"src="img/lighting (5).jpeg" loading="lazy" alt=""></img>
      <div class="overlay"></div>
      <div class="content">
        <div class="tag">Solar Tips</div>
        <h1 class="title">Top solar mistakes to avoid</h1>
        <div class="date">12 Mar. 2024</div>
      </div>
    </div>

    <!-- Blog Card 3 -->
    <div class="blog-card" onclick="location.href='blog-detail.html';">
      <img class="blog-img" src="img/solar-equipment (2).jpeg" loading="lazy" alt=""></img>
      <div class="overlay"></div>
      <div class="content">
        <div class="tag">Installations</div>
        <h1 class="title">How to choose the right inverter</h1>
        <div class="date">08 Apr. 2024</div>
      </div>
    </div>

    <!-- Blog Card 4 -->
    <div class="blog-card" onclick="location.href='blog-detail.html';">
      <img class="blog-img" src="img/furnitures (7).jpeg" loading="lazy" alt=""></img>
      <div class="overlay"></div>
      <div class="content">
        <div class="tag">Energy</div>
        <h1 class="title">Save more with solar systems</h1>
        <div class="date">21 Apr. 2024</div>
      </div>
    </div>
  </div>

  <!-- Pagination -->
  <nav class="pagination">
    <ul>
      <li><a href="#">« Prev</a></li>
      <li><a href="#" class="active">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">Next »</a></li>
    </ul>
  </nav>

</x-app-layout>