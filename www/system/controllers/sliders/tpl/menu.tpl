<div class="panel-group hidden-sm hidden-xs" role="tablist">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
            <h4 class="panel-title">
                <span class="glyphicon glyphicon-film"></span>
                <a class="" data-toggle="collapse" href="#collapseListGroup1" aria-expanded="true"
                   aria-controls="collapseListGroup1">Слайдеры</a>
                <span class="caret"></span>
                <a class="btn btn-info btn-xs" data-target="" data-toggle="tooltip" href="?c=sliders&act=new">
                    <span class="glyphicon glyphicon-plus"></span>
                    Создать слайдер
                </a>

            </h4>
        </div>
        <div id="collapseListGroup1" class="panel-collapse collapse in" role="tabpanel"
             aria-labelledby="collapseListGroupHeading1" aria-expanded="true">
            {if ($sliders)}
                <ul class="nav">
                    {section name=i loop=$sliders}
                        <li>
                            <a href="?c=sliders&sid={$sliders[i].ID}" data-toggle="tooltip"><span class="glyphicon glyphicon-text-size btn-xs"></span> {$sliders[i].NAME}</a>
                        </li>
                    {/section}
                </ul>
            {else}
                <br/>
                <ul>Нет слайдеров</ul>
                <br/>
            {/if}
        </div>
    </div>
</div>