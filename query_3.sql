--Связываем 2 таблицы по firm_id и выбираем нужный нам город, чтобы названия не повторялись, используем GROUP BY--
SELECT f.name FROM Firms f, Offices o WHERE o.firm_id = f.id AND o.city_id = 1 GROUP BY f.name;