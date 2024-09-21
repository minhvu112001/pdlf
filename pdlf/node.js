const express = require('express');
const mysql = require('mysql');
const bodyParser = require('body-parser');

const app = express();
const port = 3000;

// Middleware
app.use(bodyParser.urlencoded({ extended: true }));

// MySQL connection
const connection = mysql.createConnection({
    host: 'localhost',
    user: 'yourUsername',
    password: 'yourPassword',
    database: 'pdlf'
});

connection.connect((err) => {
    if (err) throw err;
    console.log('Connected to the database!');
});

// Route to display the form
app.get('/', (req, res) => {
    res.send(`
        <form action="/add-student" method="POST">
            <input type="text" name="name" placeholder="Name" required>
            <input type="number" name="age" placeholder="Age" required>
            <input type="text" name="address" placeholder="Address" required>
            <input type="tel" name="telephone" placeholder="Telephone" required>
            <button type="submit">Add Student</button>
        </form>
    `);
});

// Route to handle form submission
app.post('/add-student', (req, res) => {
    const { name, age, address, telephone } = req.body;

    const query = 'INSERT INTO students (name, age, address, telephone) VALUES (?, ?, ?, ?)';
    connection.query(query, [name, age, address, telephone], (err, result) => {
        if (err) throw err;
        res.send(`Student added with ID: ${result.insertId}`);
    });
});

// Start the server
app.listen(port, () => {
    console.log(`Server running at http://localhost:${port}`);
});
