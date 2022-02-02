<div class="list-group ag-list-group">
    <h6 class="list-group-item active">
        Информационные разделы
    </h6>
    <a href="/register/orders/" class="list-group-item">
        <i class="fa fa-object-ungroup"></i> Мои заказы
    </a>
    {if $user.GROUP_ID == 6}
    <a href="/register/blog/" class="list-group-item">
        <i class="fa fa-object-ungroup"></i> Мой блог
    </a>
    {/if}
    <a href="/register/profile" class="list-group-item">
        <i class="fa fa-object-ungroup"></i> Мой профиль
    </a>
</div>