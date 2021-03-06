<div class="center_side">
    <article class="article">

        <h1 class="big_header">Задание для веб-разработчиков</h1>

        <div class="article_content">
            <p>
                На плечи разработчиков ложится основная задача в любом проекте. Именно они представляют главную ценность команды, и от их работы зависит результат и конечный продукт. От выбора архитектуры до мелочей реализации — каждое ваше решение и подход оказывает первостепенное влияние на качество итогового проекта. Мы будем учиться создавать и запускать полноценные и качественные продукты. Получится это или нет — зависит от вас.
            </p>
            <p>
                Для того, чтобы начать рабочие процессы и взаимодействие, а также чтобы вы могли показать себя в деле, предлагаем вам выполнить начальное задание. Оно не разделяется на задания для серверных и клиентских программистов. Вне зависимости от специализации, хороший разработчик должен обладать знаниями во всех смежных областях. Поэтому, данное задание включает в себя написание как серверного, так и клиентского кода, а также верстку и дизайн. Что-то у вас получится лучше, а в чем-то, возможно, вы заполните какие-то пробелы. Помимо основной части предлагаем также более сложные задачки для тех, чьи амбиции и знания превосходят основное задание — здесь вы сможете выбрать что-то из своей области. Надеемся, вам будет интересно.
            </p>
            <p>
                А теперь к делу. Все мы сталкиваемся с интересными задачами, которые требуют углубления в тему и поиска решения. Это своего рода личные ислледования в определенной области. Например, вам нужно разработать модуль email-рассылок или создать класс для рисования графиков. Такие вещи требуют решения ряда нетривиальных задач, после закрытия которых ваши профессиональные знания пополнятся этим опытом. Одна из наших идей — закреплять такой опыт в виде написания небольшой статьи о своей теме, ее проблемах и решениях, которые вы нашли. Тогда ваш опыт смогут изучить другие члены команды (и не только), а вы сможете ознакомиться с их решениями. Так мы сможем эффективно делиться знаниями, а заодно будем учиться красиво и понятно излагать свои мысли в текстовой форме.
            </p>
            <p>
                Первая версия модуля статей у нас уже есть: можно создавать и редактировать материалы. Дальнейшее его развитие — объединение статей в тематические курсы. А для закрепления материала нужна система проверки знаний: в виде тестов и игр. Предлагаем вам попробовать создать прототип такого модуля.
            </p>

            <h2>Основная часть</h2>
            <p>
                Спроектировать и разработать основу будущего модуля тестирований для этого сайта. В составе модуля должны быть две основных страницы: форма создания и страница с самим тестом.
            </p>

            <h4>Форма создания теста</h4>
            <p>
                Форма должна включать в себя поле для заголовка, поле для вступительного абзаца и инструмент для добавления вопросов. Каждый вопрос имеет заголовок и 3 варианта ответа, один из которых нужно пометить как правильный. Вопросов может быть любое количество.
            </p>

            <h4>Страница теста</h4>
            <p>
                На этой странице выводятся все данные: заголовок, вступление и вопросы с возможностью выбора ответа и кнопкой «Ответить».
            </p>

            <h2>Дизайн</h2>
            <p>
                Дизайн всех этих страниц должен быть простым, чистым и легким. Подробная проработка всех элементов не требуется, но минимальное чувство вкуса не помешает.
            </p>
            <h2>Стек технологий</h2>
            <p>На первом этапе работы команды CodeX мы будем использовать классические и проверенные временем инструменты веб-разработки. Рекомендуем вам освежить навыки и использовать в своих реализациях только следующие технологии:
            <p>
                <span class="technic">PHP</span>, <span class="technic">MySQL</span>, <span class="technic">JavaScript</span>, <span class="technic">HTML5</span>, <span class="technic">CSS</span></p>
                <p>Использование сторонних решений, плагинов, расширений и тд не приветствуется — все лучше написать самостоятельно, пусть и минималистично.</p>
            </p>
            <h2>Деплой</h2>
            <p>Полученные файлы необходимо разместить на сервере и обеспечить доступ к работающему модулю по прямой ссылке. Также, весь проект следует разместить в вашем публичном репозитории на <a href="//github.com" target="_blank">GitHub</a></p>
            <h2>А теперь интереснее</h2>
            <p>
                Следующие «усложнения» позволят вам применить навыки в своих сильных сторонах. Каждое задание будет маркироваться специальным знаком, по которому можно будет определить, к какой области задание принадлежит и выбрать для себя что-нибудь подходящее. А лучше сразу несколько из разных областей!
            </p>
            <p>
                <ul class="additional_tasks legend">
                    <li class="back">Backend</li>
                    <li class="front">Frontend</li>
                    <li class="ui">UI/UX</li>
                </ul>
            </p>
            <ul class="additional_tasks">
                <li class="back">Выполнить реализацию с использованием MVC фреймворка. Например, <a href="//kohanaframework.org" target="_blank">Kohana Framework</a></li>
                <li class="front">
                    Реализовать вывод теста в виде презентации: сперва виден первый вопрос, после ответа на который отображается следующий.
                    <p>
                        <img src="/public/img/task/test-scheme.png">
                    </p>
                </li>
                <li class="back">Добавить возможность редактирования созданного теста.</li>
                <li class="front">Реализовать сборку ресурсов (JS, CSS файлов) модуля с помощью <a href="https://learn.javascript.ru/screencast/webpack" target="_blank">Webpack</a></li>
                <li class="back">Реализовать кэширование данных о тесте в <span class="technic">memcache</span> с возможностью очистки кэша при редактировании</li>
                <li class="ui">Выполнить дизайн страниц в стиле этого сайта, изучить похожие разделы на других площадках и использовать лучшие решения</li>
                <li class="front">Суммировать набранные баллы (количество правильных ответов) и отображать достигнутый результат в конце теста.</li>
                <li class="front">Добавить кнопки «Поделиться» для основных соцсетей. При клике должно показываться всплывающее окно с формой репоста</li>
                <li class="back">Добавить запись счетчика прохождения теста в <span class="technic">Redis</span> и вывод значения счетчика на странице теста</li>
                <li class="back">В форму создания теста добавить поле «Результаты», в котором можно задать несколько вариантов выводимых результатов в зависимости от набранных баллов. После прохождения теста проверять набранные баллы и выводить соответствующее сообщение.</li>
                <li class="front">Добавить таймер и прогрессбар, отображающие время, отведенное на ответ. Когда время вышло, засчитывать ответ на вопрос с 0 баллов.</li>
            </ul>
        </div>
    </article>
</div>

