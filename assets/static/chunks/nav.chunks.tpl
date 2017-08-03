<nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="[[ ~1 ]]">
      <img src="/assets/build/img/logo.png" alt="hedgehog logo" width="80px">
      <span class="logo-title">[[ ++site_name ]]</span>
    </a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">

        [[pdoMenu?
        	&parents=`0`
        	&firstClass=`0`
        	&lastClass=`0`
        	&outerClass=`navbar-nav`
        	&innerClass=`nav-link`
            &rowClass=`nav-item`
            &tpl=`@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]] class="nav-link">[[+menutitle]]</a>[[+wrapper]]</li>`
        ]]

    </div>
</nav>


