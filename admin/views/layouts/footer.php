</div>
</div>
</body>


<script src="../assets/js/preview-image.js">

</script>
<script>
$(document).ready(() => {
    const navLink = $('.nav-link');
    const urlSearchParams = new URLSearchParams(window.location.search);
    const params = Object.fromEntries(urlSearchParams.entries());
    for (var i = 0; i < navLink.length; i++) {
        navLink[i].classList.remove('active');
        if (params.url.includes(navLink[i].getAttribute("name"))) {
            navLink[i].classList.add('active');
        }
    }

})
</script>

</html>