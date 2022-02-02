<li>
    <a class="fancybox" href="/upload/images/blog/{$image}"><img style="height: 200px;" src="/upload/images/blog/{$image}" alt=""/></a>
    <p>
        <a data-name="{$image}" data-id="{$id}" class="remove-image-item" href="#">Удалить</a>
    </p>
    <p >
        <a {if $skin == $image}style="display: none" {/if} data-name="{$image}" data-id="{$id}" class="skin-image-item"  href="#">Сделать главной</a>
    </p>

</li>