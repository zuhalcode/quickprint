<footer class="bg-dark text-white">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-8 mt-3 mb-0">
                <p> Copyright ©2020 All rights reserved by
                    <a href="#" style="text-decoration: none;">
                        <strong class="text-warning">QuickPrint</strong>
                    </a>
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="<?= BASEURL?>/bootstrap5/js/bootstrap.js"></script>
<script src="<?= BASEURL;?>/js/vanillatilt.js"></script>
<script src="<?= BASEURL;?>/js/script2.js"></script>
<script src="<?= BASEURL;?>/js/jquery.js"></script>
<script src="<?= BASEURL;?>/js/button.js"></script>
<script type="text/javascript">
VanillaTilt.init(document.querySelectorAll('.project-box'), {
    max: 25,
    speed: 400,
});

function toggle() {
    const blur = document.querySelector('.blur');
    blur.classList.toggle('active');
    const blur2 = document.querySelector('.blur2');
    blur2.classList.toggle('active');
    const popup = document.querySelector('#popup');
    popup.classList.toggle('active');
}
</script>

</body>

</html>