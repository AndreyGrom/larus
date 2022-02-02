{*{$categories|debug_print_var}*}

<ul{if !$sub} class="list-unstyled"{else} style="list-style: none;padding-left:10px;"{/if}>
    {section name=i loop=$categories}
        {if $categories[i].BLOGERS == 1}
            <li>
                <label>
                    <input type="checkbox" name="parents[]"
                           {section name=j loop=$blog.PARENTS}
                            {if $blog.PARENTS[j] == $categories[i].ID} checked="checked" {/if}
                           {/section}
                           value="{$categories[i].ID}"/> {$categories[i].TITLE}
                </label>
                {if $categories[i].SUB}
                    {include file="menu_.tpl" categories=$categories[i].SUB sub=true}
                {/if}
            </li>
        {/if}
    {/section}
</ul>