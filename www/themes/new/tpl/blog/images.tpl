

<div class="text-center">
    {section name=i loop=$items}
        {if $items[i] != $skin}
        <div class="blog-image">
            <a class="fancy" href="/upload/images/blog/{$items[i]}"><img src="/upload/images/blog/{$items[i]}" alt=""></a>
        </div>
        {/if}
    {/section}    
</div>
