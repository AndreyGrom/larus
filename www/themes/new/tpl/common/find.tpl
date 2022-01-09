<form action="/find/" method="get"  id="find-form">
    <div class="container">
        <div class="row">
            <div class="find-form">
                <div class="row">
                    <div class="col-sm-1 text-center">
                        <img src="{$theme_dir}img/find.png" alt="" id="find-icon">
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="q" id="q" placeholder="{if $placeholder}{$placeholder}{else}Поиск по сайту{/if}">
                    </div>
                    <div class="col-sm-1">
                        <img src="{$theme_dir}img/delete.png" alt="" id="close-find-icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    $(".icon-find a, #find-open").click(function (e) {
        e.preventDefault();
        $("#find-form").show();
    });
    $("#close-find-icon").click(function (e) {
        $("#find-form").hide();
    });
    $("#find-form").submit(function () {
        if ($("#find-form #q").val() !== ""){
            document.location.href = "/find/q=" + $("#find-form #q").val();
        }
        return false;
    });
    $("#find-icon").click(function (e) {
        $("#find-form").submit();
    });

</script>