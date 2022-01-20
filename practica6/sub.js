const mqtt = require('mqtt')
const mysql = require('mysql')

const db = mysql.createConnection({
    host: "localhost",
    port: 3306,
    user: 'root',
    password: '',
    database: 'mqttnodepractica6'
})

db.connect(() => {
    console.log('Database ok!')
})

const sub = mqtt.connect('mqtt://localhost:9000')

sub.on('connect', () => {
    sub.subscribe('topic test')
})

sub.on('message', (topic, message) => {
    message = message.toString()
    message = message.split(' ')
    message = parseInt(message[1])
    console.log(message)
    db.query(
        'insert into ard set ?',
        {datas: message},
        (err, rows) => {
            if(!err) console.log('data saved!')
        }
    )
})