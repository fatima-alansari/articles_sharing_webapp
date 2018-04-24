    <?php
    /**
     * PHP version 5.6
     * 
     * Website default/home page.
     * 
     * @category Webpage
     * @package  Open_Blog_Site
     * @author   Fatima A. Alansari <fatima.a.alansari@outlook.com>
     * @license  All rights reserved
     * @link     https://github.com/fatima-alansari/open_blog_site
     */
      
      require 'layouts/head.html';
    ?>

  <body class='container'>
    
    <?php
      require 'layouts/navbar.html';
    ?>

    <main>
      <div class="navbar-template text-center">
        <h1>Top Articles</h1>
        <p class="lead text-info">What are you looking for?</p>
      </div>
    </main>

  </body>

    <?php
      require 'layouts/footer.html';
    ?>
</html>