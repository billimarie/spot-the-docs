<!DOCTYPE html>
<html>
  <head>
    <title>Spot the Docs is a Lightweight Laravel/Heroku Web App that finds open-source projects with documentation issues using GitHub's API</title>

    @include( 'includes.head' )

  <body>

    <a class="github-fork-ribbon" href="http://www.github.com/billimarie/spot-the-docs" title="Fork me on GitHub">Fork me on GitHub</a>

    <div class="wrap">
      <div class="container">
        <div class="content">
          <h1 class="title"><a href="/">Spot the Docs</a></h1>

          @include ( 'includes.nav' )

          <h2 class="description">Browse the most recent GitHub documentation issues on open-source projects.</h2>
          <button name="ghdoctag" id="ghdoctag" alt="Github Documentation Tag">Go Docs!</button></a>

          <div id="ghapidata" class="clearfix"></div>
        </div>
      </div>

      @include( 'includes.footer' )

    </div>
  </body>
</html>
