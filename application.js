var express = require('express');
//declar et init le serveur express
var app = express();
});
app.get('/etage/:etagenum/chambre', function(req, res) {
    res.render('chambre.ejs', {etage: req.params.etagenum});
});
app.listen(8080);
