
<style>
  * {
    box-sizing: border-box; 
  }
  body {
    display: flex;
    min-height: 100vh;
    flex-direction: row;
    margin: 0;
  }
  .col-1 {
    background: #D7E8D4;
    flex: 1;
  }
  .col-2 {
    display: flex;
    flex-direction: column;
    flex: 5;
  }
  .content {
    display: flex;
    flex-direction: row;
  }
  .content > article {
    flex: 4;
    min-height: 60vh;
  }
  header, footer {
    background: yellowgreen;
    height: 20vh;
  }
  header, footer, article, nav {
    padding: 1em;
  }
</style>

  <nav class="col-1">Nav</nav>
  <div class="col-2">
  	<header>Header</header>
    <main class="content">
    <article>Article</article>
    </main>
  	<footer>Footer</footer>
  </div>
