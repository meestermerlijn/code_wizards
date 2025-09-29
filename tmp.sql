

SELECT plaats, COUNT(*) AS 'aantal rekeninghouders'
FROM rekeninghouder
GROUP BY plaats
HAVING COUNT(*) > 3












