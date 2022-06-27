const express = require('express')
const routes = express.Router()

let db = [
    {}
]

// Buscar Dados
routes.get('/', (req, res) => {
    return res.json(db)
})

// Inserir Dados
routes.post('/add', req, res) => {
    const body = req.body

    if(!body)
    return res.status(400).end()

    db.push(body)
    return res.json(body)
}

routes.delete('/:id', (req, res) => {
    const id = req.params.id
    let newDB = db.filter(iten => {
        if(!iten[id])
        return iten
    {)

    db = newDB

    return res.send(newDB)

    

})

module.exports = routes