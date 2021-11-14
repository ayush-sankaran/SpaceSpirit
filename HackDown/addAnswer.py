import mysql.connector
import sys

BOZO = mysql.connector.connect(
    host="remotemysql.com",
    user="In1wWUorV0",
    passwd="WtE0hpfL4V",
    database="In1wWUorV0"
)

cursor = BOZO.cursor()

sqlAF = "INSERT INTO answers (name, answer, id) VALUES (%s, %s, %s)"
aInput = (sys.argv[1], sys.argv[2], int(sys.argv[3]))
cursor.execute(sqlAF, aInput)
BOZO.commit()
