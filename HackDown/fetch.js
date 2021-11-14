var mysql = require('mysql');

var con = mysql.createConnection({
  host: "remotemysql.com",
  user: "In1wWUorV0",
  password: "WtE0hpfL4V",
database:"In1wWUorV0"
});

con.connect(function(err) {
  if (err){
console.log(err)
return
}
  console.log("Connected to database!");
});

con.query(`SELECT * FROM questions`,(err,result)=>{
  if(err){
    throw err
  }
  console.log(result)
})