<?php

//http://localhost/garment%20project/Cord/newEmptyPHP.php

//$datesc = DATE_SUB(CURDATE(),INTERVAL 30 DAY);
$datesub = date_sub($object, $interval);
$sql="SELECT * from billing_invoices WHERE due_date <= '..'";
/*
SELECT * from boys_wear WHERE boys_wear.Date >= DATE_ADD(CURDATE(),INTERVAL -7 DAY) UNION SELECT * from gents_wear WHERE gents_wear.Date >= DATE_ADD(CURDATE(),INTERVAL -7 DAY) UNION SELECT * from girls_wear WHERE girls_wear.Date >= DATE_ADD(CURDATE(),INTERVAL -7 DAY)
        
        SELECT * FROM (
select s.item_name as item_name, s.Fabric_Type as Fabric_Type, s.Quantity as Quantity, s.Description as Description, s.production_status as production_status, s.item_number as item_number, s.Date as Date from boys_wear s
union
select b.item_name as item_name, b.Fabric_Type as Fabric_Type, b.Quantity as Quantity, b.Description as Description, b.production_status as production_status, b.item_number as item_number, b.Date as Date from gents_wear b
union
select c.item_name as item_name, c.Fabric_Type as Fabric_Type, c.Quantity as Quantity, c.Description as Description, c.production_status as production_status, c.item_number as item_number, c.Date as Date from girls_wear c 
union
select d.item_name as item_name, d.Fabric_Type as Fabric_Type, d.Quantity as Quantity, d.Description as Description, d.production_status as production_status, d.item_number as item_number, d.Date as Date from kids_wear d
union
select e.item_name as item_name, e.Fabric_Type as Fabric_Type, e.Quantity as Quantity, e.Description as Description, e.production_status as production_status, e.item_number as item_number, e.Date as Date from ladies_wear e 
union
select f.item_name as item_name, f.Fabric_Type as Fabric_Type, f.Quantity as Quantity, f.Description as Description, f.production_status as production_status, f.item_number as item_number, f.Date as Date from others f 
) foo where Date >= DATE_ADD(CURDATE(),INTERVAL -7 DAY) */