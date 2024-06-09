<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страховая компания "АвтоПлюс"</title>
    <link rel="stylesheet" href="styleClient.css">
</head>

<body>
    <header>
        <div class="header-content">
        <a href="indexClient.php"><h1>АвтоПлюс</h1></a>
            <nav>
                <a href="informationCompany.php">О компании</a>
                <a href="cooperation.php">Сотрудничество</a>
                <a href="contacts.php">Контакты</a>
                <a href="news.php">Новости</a>
                <a href="services.php">Услуги</a>
            </nav>
        </div>
    </header>

    <div class="news">
        <h2>Сроки поставки запчастей выросли до 45 дней из-за проблем с платежами</h2>
        <div class="full-text">
            <p>Сроки поставок автозапчастей выросли почти в два раза в этом году, рассказал «Известиям» глава Российского союза автостраховщиков Евгений Уфимцев. По его словам, ситуация с доставкой деталей стабилизировалась к концу 2023 года. Тогда их привозили в среднем за две-три недели, а основными хабами стали Турция, Объединенные Арабские Эмираты и Китай. Однако из-за задержек в проведении платежей с первыми двумя странами с начала 2024 года сроки изменились. Теперь поставки занимают не меньше месяца, сроки достигают 45 дней. 
Запрета на поставку комплектующих нет, однако в машинах используется много электроники, чипов, пояснил Евгений Уфимцев. Согласование тоже теперь занимает больше времени — элементы проверяют, чтобы они не были товарами двойного назначения. Средние сроки доставки деталей из Китая (в контейнерах) составляют 45 дней, а из ОАЭ — от полутора до трех месяцев, сообщил заместитель гендиректора по розничному бизнесу «Ингосстраха» Владимир Храбрых.

Время ремонта авто по ОСАГО сейчас в среднем занимает 50 рабочих дней с даты выдачи направления, рассказал генеральный директор консалтинговой компании в сфере страхования ООО «АСТ» Каро Карапетян. Однако по закону машина не должна находиться на сервисе ремонта по ОСАГО более 30 дней.

Поэтому доля ремонта по обязательной автогражданке сейчас составляет не более 3–5%, отметил управляющий партнер ГТК-Авто Александр Сагун. В остальных случаях организации перечисляют клиенту деньги.

</p>
        </div>
        <p class="read-more">Читать далее</p>
    </div>

    <div class="news">
        <h2>В РСА заявили о росте средней выплаты по ОСАГО</h2>
        <p>РСА: средняя выплата по ОСАГО выросла почти на 10%</p>
        <div class="full-text">
            <p>За первые четыре месяца 2024 года средняя выплата по ОСАГО составила 91,1 тыс. рублей, что на 8,9% выше средней выплаты за аналогичный период 2023 года (тогда она составила 83,7 тыс. рублей). Об этом говорится в сообщении Российского союза автостраховщиков (РСА), которое поступило «Известиям» 30 мая.
Средняя премия в апреле этого года составила 7263 рубля, что на 1% ниже прошлогоднего аналогичного показателя и на 10% ниже, чем в январе 2024 года, отметил глава РСА Евгений Уфимцев.
По его словам, средняя премия по ОСАГО с начала снизилась на 10%, тогда как инфляция составила 7,67%. Причиной этого является высокая конкуренция между страховщиками за безубыточных автовладельцев, которая возникла благодаря реформе тарифообразования в ОСАГО, заявил Уфимцев.

.</p>
        </div>
        <p class="read-more">Читать далее</p>
    </div>

    <script>
         document.querySelectorAll('.read-more').forEach(item => {
            item.addEventListener('click', function() {
                let fullText = this.parentNode.querySelector('.full-text');
                if (fullText.style.display === 'none' || fullText.style.display === '') {
                    fullText.style.display = 'block';
                    this.innerText = 'Свернуть';
                } else {
                    fullText.style.display = 'none';
                    this.innerText = 'Читать далее';
                }
            });
        });
    </script>
</body>

</html>