-- query inline di tipe CC1
-- get logo
SELECT genset_content FROM '$domain_name'_genset
WHERE genset_type='logo'

-- get display name (store)
SELECT genset_content FROM '$domain_name'_genset
WHERE genset_type='display_name'

-- get home banner
SELECT genset_content FROM '$domain_name'_genset
WHERE genset_type='home_banner'

-- get 2 top newest product (di home & product detail)
SELECT prod_id, prod_name, 
CONCAT(LEFT(prod_desc, 97), '...') 'prod_desc', prod_image
FROM '$domain_name'_prod
ORDER BY prod_date DESC
LIMIT 2

-- get about us
SELECT aboutus_id, aboutus_title, aboutus_desc
FROM  '$domain_name'_aboutus 
ORDER BY aboutus_title

-- get category di kiri product
SELECT prod_cat_id, prod_cat_name
FROM '$domain_name'_prod_cat
ORDER BY prod_cat_name

-- get product di kanan category
SELECT DISTINCT prod_id, prod_name, prod_image, prod_cat_name
FROM '$domain_name'_prod p
JOIN '$domain_name'_prod_cat pc ON pc.prod_cat_id=p.prod_cat_id
WHERE p.prod_cat_id = '$cat_id'
ORDER BY prod_date DESC

-- get product detail
SELECT DISTINCT prod_id, prod_name, prod_desc, prod_image, prod_cat_name
FROM angela_prod p
JOIN angela_prod_cat pc ON pc.prod_cat_id=p.prod_cat_id
WHERE p.prod_id = '$prod_id'

-- insert contact us
INSERT INTO contactus (contactus_name, contactus_email, contactus_message, contactus_isread, contactus_date)
VALUES ('$cu_name', '$cu_email', '$cu_message', 1, CURRENT_TIMESTAMP())