<li>
    <a class="fancybox" href="/upload/images/blog/{$image}"><img style="width: 200px;" src="/upload/images/blog/{$image}" alt=""/></a>
    <p><a class="del-image" href="{$image}">Удалить</a></p>
    <a class="skin" {if $skin == $image}style="display: none" {/if} href="{$image}">Главная</a>
</li>