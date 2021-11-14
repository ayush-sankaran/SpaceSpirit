import mysql.connector
import random

BOZO = mysql.connector.connect(
    host="remotemysql.com",
    user="In1wWUorV0",
    passwd="WtE0hpfL4V",
    database="In1wWUorV0"
)

cursor = BOZO.cursor()

length = 0
cursor.execute("SELECT id FROM questions")
result = cursor.fetchall()
id = random.choice(result)

print(id)
