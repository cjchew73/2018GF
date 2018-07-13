

	SELECT mm as month, count(progress.intactual) as integrated
	from (
	    SELECT 01 mm UNION ALL SELECT 02 UNION ALL SELECT 03 
	    UNION ALL SELECT 04 UNION ALL SELECT 05 UNION ALL SELECT 06 UNION ALL SELECT 07  
	    UNION ALL SELECT 08 UNION ALL SELECT 09 UNION ALL SELECT 10 UNION ALL SELECT 11 
	    UNION ALL SELECT 12
	) derived left join progress on derived.mm=month(progress.intActual) and progress.breakdown = 'ogs gf rollout'
	GROUP BY derived.mm
