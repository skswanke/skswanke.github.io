<!-- ######################     Main Navigation   ########################## -->
<div class="nav-wrap">
<div class="nav-anchor"></div>
<nav>
    <ol>
        <?php
        /* This sets the current page to not be a link. Repeat this if block for
         *  each menu item */
        if ($path_parts['filename'] == "index") {
            print '<li class="activePage">Home</li>';
        } else {
            print '<li><a href="index.php">Home</a></li>';
        }
        if ($path_parts['filename'] == "projects") {
            print '<li class="activePage">Projects</li>';
        } else {
            print '<li><a href="projects.php">Projects</a></li>';
        }
        if ($path_parts['filename'] == "experience") {
            print '<li class="activePage">Experience</li>';
        } else {
            print '<li><a href="experience.php">Experience</a></li>';
        }
        if ($path_parts['filename'] == "coursework") {
            print '<li class="activePage">Course Work</li>';
        } else {
            print '<li><a href="coursework.php">Course Work</a></li>';
        }
        if ($path_parts['filename'] == "blog") {
            print '<li class="activePage">Blog</li>';
        } else {
            print '<li><a href="blog.php">Blog</a></li>';
        }
        /* example of repeating */
        if ($path_parts['filename'] == "form") {
            print '<li class="activePage">Contact</li>';
        } else {
            print '<li><a href="form.php">Contact</a></li>';
        }
        ?>
    </ol>
</nav>
</div>
