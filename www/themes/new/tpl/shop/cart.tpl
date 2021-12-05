{include file="../common/header.tpl"}
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {*<ol class="breadcrumb">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/shop">Магазин</a></li>
                    <li class="active">Корзина</li>
                </ol>*}
                <h2 class="page-title">Ваша корзина</h2>
                <br/><br/>
                {if $cart}
                <table class="table table-hover table-bordered">
                    <tr>
                        <th>Название</th>
                        <th>Длина</th>
                        <th>Разъем</th>
                        <th>Кол-во</th>
                        <th>Цена</th>
                        <td></td>
                    </tr>
                    {section name=i loop=$cart}
                        <tr>
                            <td>{$cart[i]->name}</td>
                            <td>{$cart[i]->len_text}</td>
                            <td>{$cart[i]->raz_text}</td>
                            <td>{$cart[i]->count}</td>
                            <td>{($cart[i]->len + $cart[i]->raz) * $cart[i]->count}</td>
                            <td><a href="/shop/cart/remove/id={$smarty.section.i.index}"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                        </tr>
                    {/section}
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><strong>Итого: </strong></td>
                        <td><strong>{$itog}</strong></td>

                    </tr>
                </table>
                    <br/>
                    <br/>
                    <div class="">
                        <a class="btn btn-primary" href="/shop/cancel">Отменить все покупки</a>
                    </div>
                    <div class="">

                        <h3>Оплатить:</h3>
                        <div class="alert alert-info">
                            <h5><i class="fa fa-money"></i> Стоимость: {$itog} <i class="fa fa-rub"></i></h5>
                            <form class="form-inline" target="_blank" action="https://money.yandex.ru/quickpay/confirm.xml">
                                <input type="hidden" name="need-email" value="true"/>
                                <input type="hidden" name="receiver" value="410011333889756"/>
                                <input type="hidden" name="formcomment" value="Атмосфера живого звука"/>
                                <input type="hidden" name="short-dest" value="Оплата заказа"/>
                                <input type="hidden" name="targets" value="Покупка"/>
                                <input type="hidden" name="sum" value="{$itog}"/>
                                <input type="hidden" name="quickpay-form" value="shop"/>
                                <div class="form-group">
                                    <label class="" for="paymentType">Способ оплаты</label>
                                    <select id="paymentType" class="form-control" name="paymentType">
                                        <option value="AC">Банковская карта</option>
                                        <option value="PC">Яндекс.Деньги</option>
                                    </select>
                                </div>
                                <button name="submit-button" type="submit" class="btn btn-success btn-large"><i class="fa fa-shopping-cart"></i> Купить</button>
                            </form>
                            <p></p>
                            <p>После нажатия на кнопку <strong>Купить</strong> Вы будете переведены на страницу платежной системы, где Вам, помимо платежных данных, нужно будет ввести свой e-mail.</p>
                            <ul class="list-inline">
                                <li><i class="fa fa-certificate"></i> <a href="">Гарантии</a></li>
                                <li><i class="fa fa-info-circle"></i> <a href="">Условия предоставления услуг</a><li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                {else}
                <h3>Ваша корзина пуста</h3>
                {/if}
            </div>
        </div>



    </div>
</section>

{include file="../common/footer.tpl"}