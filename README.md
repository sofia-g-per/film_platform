# Реализовано
- Каталог фильмов по жанрам.
- Фильтрация фильмов по дате выхода, режиссерам, актерам.
- Отображение страницы фильма с подробной информацией.
- Seed-ы для плагина SofyaPer.FilmPlatform.
- К собственному плагину SofyaPer.FilmPlatform подключен плагин Rainlab.User, добавлены таблицы в базе данных для отзывов и избранного 

# Структура проекта
Для организации работы с фильмами создан plugin SofyaPer.FilmPlatform.
Схема базы данных: https://dbdocs.io/sofia.g.per/FilmPlatform?view=relationships
(таблица user хранит внешних пользователей и создаётся плагином Rainlab.User. Используется в схеме только для демонстрации связей)

Основные сущности:
- Film - фильмы
- Genre - жанры фильмов
- FilmCrew - общая информация об участниках кинопроизводства (актеры, режиссеры) 
- FilmCrewRole - роль участника кинопроизводства в процессе (актер, режиссер)
- Review - отзыв внешнего пользователя 
- UserFavouriteFilm - избранное пользователя
Связь между фильмами (Film) и участниками кинопроизводства (FilmCrew) осуществляется с дополнительным параметром - роль (FilmCrewRole), что более наглядно отображено в таблице filmcrew_to_films
