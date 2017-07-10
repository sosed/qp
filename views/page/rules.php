<?php
use app\components\Html;

$this->title = 'Пользовательское соглашение';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    #nav-aside {
        padding-top: 25px;
    }
    #nav-aside a {
        color: #767685;
        border-bottom: 1px dotted;
        text-decoration: none;
    }
    #nav-aside a:hover {
        border-bottom-style: solid;
    }
    #nav-aside a.child {
        padding-left: 15px;
    }
    .p-rules ol { counter-reset: item; padding-left: 20px; }
    .p-rules ol > li{ display: block }
    .p-rules ol > li:before { content: counters(item, ".") ". "; counter-increment: item;}
    .p-rules ol > li.ol-title:before { font-size: 20px;}
    .p-rules li > ol > li:before {font-size: 14px;}
    .p-rules h3, .p-rules h2.list_title {
        font-size: 20px;
        display: inline;
        font-weight: bold;
    }
    .ol-title li {
        font-size: 14px;
    }
    ol.ol-root {
        padding-left: 0;
    }
</style>
<div class="page-static p-rules">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-sm-2">
            <div id="nav-aside">

            </div>
        </div>
        <div class="col-sm-9">
            <h2>Основные нормативно-правовые акты</h2>
            <p>
                Интернет-гипермаркет «КуПи» в своей деятельности руководствуется
                законодательством Российской Федерации, в том числе следующими законодательными актами:
            </p>
            <ol>
                <li>Гражданский кодекс Российской Федерации (ГК РФ)</li>
                <li>
                    Федеральный закон «Об основах государственного регулирования
                    торговой деятельности в Российской Федерации» №381-ФЗ
                </li>
                <li>Закон РФ «О защите прав потребителей» №2300-1</li>
                <li>Федеральный закон «О рекламе» N38-ФЗ</li>
                <li>Федеральный закон «О защите персональных данных» №152</li>
            </ol>

            <h2>Общие положения</h2>
            <p><b>
                    Представленная на сайте информация не является публичной офертой,
                    определяемой положениями Статьи 437 (2) Гражданского кодекса Российской Федерации.
                </b></p>
            <p>
                Сведения о товарах, их свойствах, характеристиках и ценах являются предложением
                делать оферты. Подтверждение заказа с указанием конкретного наименования и цены
                товара считается акцептом полученной оферты. Сообщение о цене заказанного товара,
                отличной от указанной в оферте, является отказом от акцепта и одновременно офертой
                со стороны ООО «КупиВл». Сведения о составе, свойствах и характеристиках товаров,
                представленных в каталоге сайта, могут быть изменены производителями в одностороннем
                порядке. Фотографические изображения товаров на сайте могут отличаться от оригиналов.

                Цена товара на сайте может отличаться от фактической к моменту оформления заказа на соответствующий товар.
                Реквизиты поставщика: ООО «КупиВл», ИНН: _____________ КПП _________ ОГРН _______________.
            </p>
            <p>
                Пользовательское соглашение считается заключенным между Сетью и Пользователем
                с момента выражения Пользователем согласия с условиями настоящего Пользовательского
                соглашения фактом отметки в поле
            </p>
            <div class="info">
                «Я ознакомлен и согласен с условиями пользовательского соглашения и условиями
                обработки и использования моих персональных данных»
            </div>

            <h2>Политика конфиденциальности</h2>
            <p>
                Одной из основополагающих ценностей интернет-гипермаркета «Купи» является безопасность
                и обеспечение конфиденциальности предоставленных Клиентами данных. С целью полного и
                всестороннего понимания данного документа, просим Вас внимательно с ним ознакомиться.
            </p>

            <ol class="ol-root">
                <li class="ol-title">
                    <h3 class="list_title">Определения и термины</h3>
                    <ol>
                        <li>
                            <b>Сайт — </b> сайт интернет-гипермаркета, на котором размещена информация о
                            предлагаемых Компанией товарах, маркетинговых акциях и иной информации в сети Интернет.
                        </li>
                        <li>
                            <b>Клиент — </b> физическое лицо, использующее сайт Компании.
                        </li>
                        <li>
                            <b>Персональные данные — </b>
                            информация, относящаяся к определенному Клиенту, указанная в п. 3.1 настоящего Положения.
                        </li>
                        <li>
                            <b>Обработка персональных данных — </b>
                            любые операции, совершаемые с использованием средств автоматизации или без использования
                            таких средств с персональными данными, включая сбор, запись, систематизацию, накопление,
                            хранение, уточнение (обновление, изменение), извлечение, использование, передачу
                            (распространение, предоставление, доступ), обезличивание, блокирование, удаление,
                            уничтожение персональных данных.
                        </li>
                        <li>
                            <b>Cookies — </b>
                            фрагменты данных, отправляемых веб-сервером браузеру при посещении сайта Клиентом.
                        </li>
                    </ol>
                </li>

                <li class="ol-title">
                    <h3 class="list_title">Цели и принципы политики конфиденциальности и сбора персональных данных</h3>
                    <ol>
                        <li>
                            Политика конфиденциальности действует в отношении любой указанной в разделе 3 информации,
                        которую Компания может получить о Клиенте во время использования сайта, программ и продуктов сайта.
                        </li>
                        <li>
                            Клиент предоставляет свои персональные данные с целью: 
                            <ul>
                                <li>создания учетной записи;</li>
                                <li>предоставления технической поддержки, связанной с использованием сайта;</li>
                                <li>оформления заказов, уведомления о состоянии заказов, обработки и получения платежей;</li>
                                <li>получения новостей, информации о продуктах, мероприятиях, рекламных акциях или услугах;</li>
                                <li>участия в рекламных акциях, опросах; </li>
                                <li>использования иных имеющихся на сайте сервисов, включая форум, персональные блоги,
                                сервис обмена личными сообщениями между зарегистрированными участниками,
                                персонализированные комментарии и отзывы, но не ограничиваясь ими.</li>
                            </ul>
                            <div class="info">
                                Предоставленные данные могут быть использованы в целях продвижения товаров от имени
                                Компании или от имени партнеров Компании.
                            </div>
                        </li>
                        <li>
                            Обеспечение надежности хранения информации и прозрачности целей сбора персональных данных.
                            Персональные данные Клиентов собираются, хранятся, обрабатываются, используются,
                            передаются и удаляются (уничтожаются) в соответствии с законодательством РФ, в т.ч.
                            Федеральным законом 27.07.2006 № 152-ФЗ «О персональных данных», и настоящей Политикой
                            конфиденциальности.
                        </li>
                    </ol>
                </li>
                <li class="ol-title">
                    <h3 class="list_title">Информация, подлежащая обработке</h3>
                    <ol>
                        <li>
                            Персональные данные, разрешённые к обработке в рамках настоящей Политики
                            конфиденциальности, предоставляются Клиентом путём заполнения регистрационной
                            формы на сайте Компании и включают в себя следующую информацию:
                            <ol>
                                <li>ФИО Клиента;</li>
                                <li>контактный телефон Клиента;</li>
                                <li>адрес электронной почты (e-mail);</li>
                                <li>адрес доставки Товара;</li>
                                <li>историю заказов.</li>
                            </ol>
                        </li>
                        <li>
                            Компания также получает данные, которые автоматически передаются в процессе просмотра при посещении сайта, в т. ч.:
                            <ol>
                                <li>IP адрес;</li>
                                <li>информация из cookies;</li>
                                <li>информация о браузере (или иной программе, которая осуществляет доступ к показу рекламы);</li>
                                <li>время доступа;</li>
                                <li>реферер (адрес предыдущей страницы).</li>
                            </ol>
                        </li>
                    </ol>
                </li>
                <li class="ol-title">
                    <h3 class="list_title">Обработка и использование персональных данных</h3>
                    <ol>
                        <li>
                            Обработка персональных данных Клиента осуществляется без ограничения срока, любым законным способом, в том числе в информационных системах персональных данных с использованием средств автоматизации или без использования таких средств.
                        </li>
                        <li>
                            Соглашаясь с настоящей Политикой конфиденциальности Клиент предоставляет Компании свое бессрочное согласие на обработку указанных в разделе 3 персональных данных всеми указанными в настоящей Политике способами, а также передачу указанных данных партнерам Компании для целей исполнения принятых на себя обязательств.
                        </li>
                        <li>
                            Компания не вправе передавать информацию о Клиенте неаффилированным лицам или лицам, не связанным с Компанией договорными отношениями.
                        </li>
                        <li>
                            Передача информации аффилированным лицам и лицам, которые связаны с Компанией договорными отношениями (курьерские службы, организации почтовой связи и т.д.), осуществляется для исполнения заказа Клиента, а также для возможности информирования Клиента о проводимых акциях, предоставляемых услугах, проводимых мероприятиях.
                        </li>
                        <li>
                            Аффилированные лица и лица, связанные с Компанией договорными отношениями, принимают на себя обязательства обеспечивать конфиденциальность информации и гарантировать ее защиту, а также обязуются использовать полученную информацию исключительно для целей исполнения указанных действий или оказания услуг.
                        </li>
                        <li>
                            Компания принимает все необходимые меры для защиты персональных данных Клиента от неавторизированного доступа, изменения, раскрытия или уничтожения.
                        </li>
                    </ol>
                </li>
                <li class="ol-title">
                    <h2 class="list_title">Права и обязанности Клиента</h2>
                    <ol>
                        <li>
                            Клиент обязуется не сообщать каким-либо третьим лицам логин и пароль, используемые им для идентификации на сайте Компании.
                        </li>
                        <li>
                            Клиент обязуется соблюдать должную осмотрительность при хранении пароля, а также при его вводе.
                        </li>
                        <li>
                            Клиент вправе изменять свои личные данные, а также требовать удаления личных данных у Компании.
                        </li>
                    </ol>
                </li>
                <li class="ol-title">
                    <h2 class="list_title">Дополнительные условия</h2>
                    <ol>
                        <li>
                            Соглашаясь с настоящей Политикой конфиденциальности, Клиент предоставляет свое бессрочное согласие на получение информации о состоянии заказов, учетной записи и прочих уведомлений технического характера, а также уведомлений рекламного характера, в том числе о текущих маркетинговых акциях и актуальных предложениях Компании, с помощью различных средств, включая SMS и электронную почту, но не ограничиваясь ими.  Клиент может в любое время отказаться от получения такой информации путем изменения данных учетной записи на сайте Компании.
                        </li>
                        <li>
                            Компания несет ответственность перед клиентом в случаях, предусмотренных действующим законодательством.
                        </li>
                        <li>
                            Компания освобождается от ответственности в случаях, когда информация о Клиенте:
                            <ul>
                                <li>стала публичным достоянием до её утраты или разглашения.</li>
                                <li>была получена от третьей стороны до момента её получения Компанией. </li>
                                <li>была разглашена с согласия Клиента.</li>
                            </ul>

                        </li>
                        <li>
                            Компания вправе вносить изменения в политику конфиденциальности в одностороннем порядке. Изменения вступают в силу с момента их опубликования на сайте Компании.
                        </li>
                    </ol>
                </li>
            </ol>
        </div>

    </div>

</div>

<script>
    (function () {
        HTMLElement.prototype.hasClass = function(cls) {
            var i;
            var classes = this.className.split(" ");
            for(i = 0; i < classes.length; i++) {
                if(classes[i] == cls) {
                    return true;
                }
            }
            return false;
        };

        var nav = document.getElementById('nav-aside'),
            h2 = document.getElementsByTagName('h2'),
            anchor;
        for(var i = 0; i < h2.length; i++) {
            anchor = 'r' + i;
            var a = document.createElement('a');
            a.innerHTML = h2[i].innerText;
            a.setAttribute('href', '#' + anchor);
            h2[i].setAttribute('id', anchor);

            nav.appendChild(a);
            nav.appendChild(document.createElement('br'));
            nav.appendChild(document.createElement('br'));
        }

    })();
</script>