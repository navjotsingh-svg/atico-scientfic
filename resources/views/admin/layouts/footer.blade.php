 <div class="footer">
    <p>© Atico India . All Rights Reserved</p>
</div>
<script src="/assets/js/template.js"></script>
<script>
$(function () {
    $('.main-menu .has-subnav > a').on('click', function (e) {
        var href = $(this).attr('href') || '';
        if (href === 'javascript:;' || href === '#') {
            e.preventDefault();
            $(this).parent().toggleClass('open');
        }
    });
});
</script>



@yield('script')


