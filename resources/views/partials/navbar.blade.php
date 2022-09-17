<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="/images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a class="active" href="#home">home</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#products">products</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        <a href="#blogs">blogs</a>
    </nav>

    <div class="icons">
        <div id="cart-btn"></div>  
        <div class="fas fa-search" id="search-btn"></div>
        <a href="/login">
            <div class="fas fa-user" id="login-btn"></div>
        </a>

        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <!-- Search -->
    <form action="" method="">
    
    <div class="search-form">
        <input type="search" name="search" value="{{ request('search') }}" id="search-box"
            placeholder="search here..." aria-label="search">
        <label for="search-box" class="fas fa-search"></label>
    </div>
</form>




</header>
