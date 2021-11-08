/**
 * Part of exercise file for go lang course at 
 * https://web.learncodeonline.in
 */
const express = require('express')
const app = express()
const port = 8000

app.use(express.json());
app.use(express.urlencoded({ extended: true }));

app.get('/', (req, res) => {
  res.status(200).send("Welcome to LearnCodeOnline server")
})

app.get('/get', (req, res) => {
  res.status(200).json({ message: "Hello from learnCodeOnline.in" })
})


app.post('/post', (req, res) => {
  let myJson = req.body;      // your JSON

  res.status(201).send(myJson);
})

app.post('/post-form-url-encoded', (req, res) => {
  res.status(201).send(JSON.stringify(req.body));
})


app.listen(port, () => {
  console.log(`Listening at http://localhost:${port} in ${process.env.NODE_ENV} environment.`)
})