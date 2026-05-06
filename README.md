# Leadoscope on Webula Starter

Этот репозиторий теперь совмещает `Webula Starter` и текущий фронтовой прототип `Leadoscope`.
Starter используется как WordPress-основа, а текущие маркетинговые страницы и кабинет перенесены в шаблоны темы.

## Что уже внедрено

- в репозиторий добавлена starter-сборка WordPress;
- тема переименована в `Leadoscope`;
- статические страницы перенесены в WordPress-шаблоны темы;
- подключены ассеты текущего проекта внутри `theme/`;
- добавлен отдельный шаблон для CRM dashboard-прототипа.

## Текущие шаблоны страниц

- `front-page.php` — главная;
- `page-about.php` — страница `about`;
- `page-service.php` — страница `service`;
- `page-faq.php` — страница `faq`;
- `page-dashboard.php` — страница `dashboard`;
- `page.php` — базовый шаблон для остальных страниц.

Чтобы WordPress автоматически подхватил эти шаблоны по slug, создайте страницы с адресами:

- `/about/`
- `/service/`
- `/faq/`
- `/dashboard/`

Что осталось в шаблоне:

- минимальная тема WordPress без проектной бизнес-логики;
- базовая webpack-сборка для `main.css` и `main.js`;
- один кастомный ACF-блок `spacer`, который можно использовать почти в любом проекте;
- Docker-окружение и dev tooling из текущего репозитория.

Что удалено:

- все кастомные блоки, кроме `spacer`;
- проектные шаблоны, CPT, AJAX, SEO, mail, analytics и другая специфичная логика;
- привязка темы к конкретному контенту и конкретному дизайну.

## Быстрый старт

1. Скопируйте `sample.env` в `.env`.
2. При необходимости измените порты и имя проекта.
3. Поднимите окружение:

```bash
docker-compose up -d
```

4. Установите фронтенд-зависимости:

```bash
yarn install
```

5. Соберите ассеты:

```bash
yarn dev
```

Для production-сборки:

```bash
yarn prod
```

## Spacer Block

Блок `Spacer` остаётся как универсальный.

Поля блока:

- `Height` - высота в пикселях;
- `Show guide grid` - включает визуальную сетку;
- `Background` - фон и скругления для секции.

Файлы блока:

- `theme/src/CACFBlocks/Block/SpacerBlock.php`
- `theme/template-parts/spacer.php`
- `assets/js/entry/spacerEntry.js`
- `assets/scss/blocks/_spacer.scss`

## Что обычно меняется в новом проекте

- название темы в `theme/style.css`;
- цвета и типографика в `theme/theme.json` и `assets/scss/main.scss`;
- шаблоны `header.php`, `footer.php`, `index.php`;
- список плагинов и ACF-полей под конкретный проект.
