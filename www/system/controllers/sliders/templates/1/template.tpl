<div class="ag_slider" id="ag_slider_{$ag_slider[0].SLIDER_ID}">
    <ul class="slides">
        {section name=i loop=$ag_slider}
        <li class="slide"><img src="/upload/images/sliders/{$ag_slider[i].SLIDER_ID}/{$ag_slider[i].IMAGE}" alt="{$ag_slider[i].TITLE}"/></li>
        {/section}
    </ul>
</div>