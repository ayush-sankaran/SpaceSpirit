import mysql.connector
import sys

BOZO = mysql.connector.connect(
    host="remotemysql.com",
    user="In1wWUorV0",
    passwd="WtE0hpfL4V",
    database="In1wWUorV0"
)

cursor = BOZO.cursor()

cursor.execute("SELECT " + sys.argv[1] + " FROM answers WHERE id = " + sys.argv[2])

result = cursor.fetchone()
print(result)
