<?php Flasher::flash(); ?>
<div class=" container right-panel-active">
    <!-- Sign Up -->
    <div class="container__form container--signup">
        <form action="<?=BASEURL;?>/auth/register" method="POST" class="form" id="form1">
            <h2 class="form__title">Sign Up</h2>
            <input type="text" name="nama" placeholder="Username" class="input" required />
            <input type="email" name="email" placeholder="Email" class="input" required />
            <input type="password" name="password" placeholder="Password" class="input" required />
            <button type="submit" name="submit" class=" btn">Sign Up</button>
        </form>
    </div>
    <!-- Sign In -->
    <div class="container__form container--signin">
        <form action="<?=BASEURL;?>/auth/login" method="POST" class="form" id="form2">
            <h2 class="form__title">Sign In</h2>
            <input type="email" name="email" placeholder="Email" class="input" required />
            <input type="password" name="password" placeholder="Password" class="input" required />
            <a href="#" class="link">Forgot your password?</a>
            <button type="submit" class="btn">Sign In</button>
        </form>
    </div>
    <!-- Overlay -->
    <div class="container__overlay">
        <div class="overlay">
            <div class="overlay__panel overlay--left">
                <button class="btn " id="signIn">Sign In</button>
            </div>
            <div class="overlay__panel overlay--right">
                <button class="btn" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>